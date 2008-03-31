function AjaxLogin_popup_login_form() {
    var content = document.getElementById('content');

    var ajaxlogin = document.getElementById('ajaxlogin');
    if (!ajaxlogin) {
        var ajaxlogin = document.createElement('div');
        ajaxlogin.id = 'ajaxlogin';
        content.insertBefore(ajaxlogin, content.firstChild);
    }

    sajax_do_call('AjaxLogin::getLoginForm', [], ajaxlogin);
}

function AjaxLogin_submit_login() {
    var ajaxlogin = document.getElementById('ajaxlogin');
    var user = document.getElementById('ajaxloginUsername').value;
    var pass = document.getElementById('ajaxloginPassword').value;

    sajax_do_call('AjaxLogin::processLoginRequest', [user,pass], ajaxlogin);
    return false;
}

function AjaxLogin_init_logout() {
    sajax_do_call('AjaxLogin::getLogoutInProgressMessage', [], AjaxLogin_perform_logout);
}

function AjaxLogin_perform_logout(progress_msg) {
    var content = document.getElementById('content');

    var ajaxlogout = document.createElement('div');
    ajaxlogout.id = 'ajaxlogoutprogress';
    ajaxlogout.innerHTML = progress_msg.responseText;
    content.insertBefore(ajaxlogout, content.firstChild);

    var ajaxlogout = document.getElementById('ajaxlogoutprogress');
    sajax_do_call('AjaxLogin::processLogoutRequest', [], ajaxlogout);
    
    var logout = document.getElementById("pt-logout");
    logout.parentNode.removeChild(logout);
}

addOnloadHook(function(){
    var anonlogin = document.getElementById("pt-login");
    if (anonlogin) {
        anonlogin.firstChild.onclick = AjaxLogin_popup_login_form;
        anonlogin.firstChild.href = '#';
    }

    var logout = document.getElementById("pt-logout");
    if (logout) {
        logout.firstChild.onclick = AjaxLogin_init_logout;
        logout.firstChild.href = '#';
    }
});