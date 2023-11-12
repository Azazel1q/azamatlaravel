window.addEventListener('scroll', e => {
    let scrollOffset = this.scrollY;
    document.body.style.cssText = `--scrollTop:${scrollOffset}px`;
    if(scrollOffset > 450) {
        getLight();
    } else {
        removeLight();
    }
})

//header
const headerLogo = document.querySelector('.logo');

// menu
const burger_button = document.querySelector('#burger_button'),
    burger_button_svg = document.querySelector('.dropdown-menu__svg'),
    menu = document.querySelector('#menu'),
    menu_body = document.querySelector('#menu__body');
isClick = false;

burger_button.addEventListener('click', function() {
    if(isClick == false) {
        openMenu();
    } else {
        closeMenu();
    }
});

function openMenu() {
    menu.style.right = `0`;
    isClick = true;
    setTimeout(openMenuAnim, 500);
}

function closeMenu() {
    menu.style.right = `-50%`;
    isClick = false;
    closeMenuAnim();ЫЫ
}

function openMenuAnim() {
    menu_body.style.transform = `translateY(0px)`;
    menu_body.style.opacity = '1';
}

function closeMenuAnim() {
    menu_body.style.transform = 'translateY(-10px)';
    menu_body.style.opacity = '0';
}

function getLight() {
    headerLogo.classList.add('logo-light');
    burger_button_svg.classList.add('dropdown-menu__svg-light');
}

function removeLight() {
    headerLogo.classList.remove('logo-light');
    burger_button_svg.classList.remove('dropdown-menu__svg-light');
}
