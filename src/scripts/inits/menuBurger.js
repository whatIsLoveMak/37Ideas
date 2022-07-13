import $ from 'jquery';
$(document).ready(function(){
    $('.header__burger').click(function() {
        $('.header__burger, .header__menu.disable').toggleClass('active-menu');
        $('body').toggleClass('lock');       
    })
    $('.header__menu.disable .header__link').click(function(event) {
        event.preventDefault();
        $('.header__burger, .header__menu.disable').toggleClass('active-menu');
        $('body').toggleClass('lock');       
    })
})