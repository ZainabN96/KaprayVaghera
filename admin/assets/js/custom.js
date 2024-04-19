// Ensure only bell icon dropdown opens when clicked
$('.bell-dropdown').click(function (e) {
    e.stopPropagation();
    $('.notification-menu').toggleClass('show');
    $('.user-menu').removeClass('show');
});

// Ensure only welcome dropdown opens when clicked
$('.welcome-dropdown').click(function (e) {
    e.stopPropagation();
    $('.user-menu').toggleClass('show');
    $('.notification-menu').removeClass('show');
});

// Close dropdown menus when clicking outside
$(document).click(function () {
    $('.user-menu, .notification-menu').removeClass('show');
});
