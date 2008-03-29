// dependencies:
// * ajax.js:
  /*extern sajax_init_object, sajax_do_call */
// * wikibits.js:
  /*extern changeText, akeytt, hookEvent, jsMsg */

// These should have been initialized in the generated js
/*extern ajWatchWb, wgPageName */

if(typeof ajWatchWb === "undefined" || !ajWatchWb) {
	var ajWatchWb = {
		watchMsg: "Watch",
		unwatchMsg: "Unwatch",
		watchingMsg: "Watching...",
		unwatchingMsg: "Unwatching..."
	};
}

ajWatchWb.supported = true; // supported on current page and by browser
ajWatchWb.watching = false; // currently watching page
ajWatchWb.inprogress = false; // ajax request in progress
ajWatchWb.timeoutID = null; // see ajWatchWb.ajaxCall
ajWatchWb.watchLinks = []; // "watch"/"unwatch" links

ajWatchWb.setLinkText = function(newText) {
	for (i = 0; i < ajWatchWb.watchLinks.length; i++) {
		changeText(ajWatchWb.watchLinks[i], newText);
	}
};

ajWatchWb.setLinkID = function(newId) {
	// We can only set the first one
	ajWatchWb.watchLinks[0].setAttribute( 'id', newId );
	akeytt(newId); // update tooltips for Monobook
};

ajWatchWb.setHref = function( string ) {
	for( i = 0; i < ajWatchWb.watchLinks.length; i++ ) {
		if( string == 'watch' ) {
			ajWatchWb.watchLinks[i].href = ajWatchWb.watchLinks[i].href
				.replace( /&action=unwatch/, '&action=watch' );
		} else if( string == 'unwatch' ) {
			ajWatchWb.watchLinks[i].href = ajWatchWb.watchLinks[i].href
				.replace( /&action=watch/, '&action=unwatch' );
		}
	}
}

ajWatchWb.ajaxCall = function() {
	if(!ajWatchWb.supported) {
		return true;
	} else if (ajWatchWb.inprogress) {
		return false;
	}
	if(!wfSupportsAjax()) {
		// Lazy initialization so we don't toss up
		// ActiveX warnings on initial page load
		// for IE 6 users with security settings.
		ajWatchWb.supported = false;
		return true;
	}

	ajWatchWb.inprogress = true;
	ajWatchWb.setLinkText( ajWatchWb.watching
		? ajWatchWb.unwatchingMsg : ajWatchWb.watchingMsg);
	sajax_do_call(
		"wfAjaxWatch",
		[wgPageName, (ajWatchWb.watching ? "u" : "w")], 
		ajWatchWb.processResult
	);
	// if the request isn't done in 10 seconds, allow user to try again
	ajWatchWb.timeoutID = window.setTimeout(
		function() { ajWatchWb.inprogress = false; },
		10000
	);
	return false;
};

ajWatchWb.processResult = function(request) {
	if(!ajWatchWb.supported) {
		return;
	}
	var response = request.responseText;
	if( response.match(/^<w#>/) ) {
		ajWatchWb.watching = true;
		ajWatchWb.setLinkText(ajWatchWb.unwatchMsg);
		ajWatchWb.setLinkID("wk-unwatch");
		ajWatchWb.setHref( 'unwatch' );
		document.getElementById("wk-unwatch").innerHTML=uwatcht;
	} else if( response.match(/^<u#>/) ) {
		ajWatchWb.watching = false;
		ajWatchWb.setLinkText(ajWatchWb.watchMsg);
		ajWatchWb.setLinkID("wk-watch");
		ajWatchWb.setHref( 'watch' );
		document.getElementById("wk-watch").innerHTML=watcht;
	} else {
		// Either we got a <err#> error code or it just plain broke.
		window.location.href = ajWatchWb.watchLinks[0].href;
		return;
	}
	jsMsg( response.substr(4), 'watch' );
	ajWatchWb.inprogress = false;
	if(ajWatchWb.timeoutID) {
		window.clearTimeout(ajWatchWb.timeoutID);
	}
	return;
};

ajWatchWb.onLoad = function() {

	// This document structure hardcoding sucks.  We should make a class and
	// toss all this out the window.
	var el1 = document.getElementById("contact-unwatch");
	var el2 = null;
	if (!el1) {
		el1 = document.getElementById("mw-unwatch-link1");
		el2 = document.getElementById("mw-unwatch-link2");
	}
	if(el1) {
		ajWatchWb.watching = true;
	} else {
		ajWatchWb.watching = false;
		el1 = document.getElementById("contact-watch");
		if (!el1) {
			el1 = document.getElementById("mw-watch-link1");
			el2 = document.getElementById("mw-watch-link2");
		}
		if(!el1) {
			ajWatchWb.supported = false;
			return;
		}
	}

	// The id can be either for the parent (Monobook-based) or the element
	// itself (non-Monobook)
	ajWatchWb.watchLinks.push( el1.tagName.toLowerCase() == "a"
		? el1 : el1.firstChild );

	if( el2 ) {
		ajWatchWb.watchLinks.push( el2 );
	}

	// I couldn't get for (watchLink in ajWatchWb.watchLinks) to work, if
	// you can be my guest.
	for( i = 0; i < ajWatchWb.watchLinks.length; i++ ) {
		ajWatchWb.watchLinks[i].onclick = ajWatchWb.ajaxCall;
	}
	return;
};

hookEvent("load", ajWatchWb.onLoad);

/**
 * @return boolean whether the browser supports XMLHttpRequest
 */
function wfSupportsAjax() {
	var request = sajax_init_object();
	var supportsAjax = request ? true : false;
	delete request;
	return supportsAjax;
}

function wfSearchFocus(){
// this is to make the search icon focus on our search text
document.getElementById("searchInput").focus();
}
 
