function menuToggle ( trigger ) {
    if ( trigger.id === 'header-menu-hamburger' ) {
        document.getElementById('header-flyout').classList.remove('hide');
    } else {
        document.getElementById('header-flyout').classList.add('hide');
    }
    return;
}
