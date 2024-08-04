document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuItems = document.querySelectorAll('.mobile-menu-item');

    menuToggle.addEventListener('click', function () {
        if (mobileMenu.classList.contains('translate-y-full')) {
            mobileMenu.classList.remove('translate-y-full');
            mobileMenu.classList.add('translate-y-0');
        } else {
            mobileMenu.classList.remove('translate-y-0');
            mobileMenu.classList.add('translate-y-full');
        }
    });

    mobileMenuItems.forEach(item => {
        item.addEventListener('click', function () {
            mobileMenu.classList.remove('translate-y-0');
            mobileMenu.classList.add('translate-y-full');
        });
    });
});
