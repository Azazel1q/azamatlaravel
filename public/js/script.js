
window.addEventListener('scroll', e => {
    document.body.style.cssText = `--scrollTop:${this.scrollY}px`;
})

const burger_button = document.querySelector('#burger_button'),
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
    closeMenuAnim();
}

function openMenuAnim() {
    menu_body.style.transform = `translateY(0px)`;
    menu_body.style.opacity = '1';
}

function closeMenuAnim() {
    menu_body.style.transform = 'translateY(-10px)';
    menu_body.style.opacity = '0';
}
