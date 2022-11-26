const ham = $('#js-hamburger'); //js-hamburgerの要素を取得し、変数へ
const nav = $('#js-nav');
ham.on('click',function(){
    ham.toggleClass('active');
    nav.toggleClass('active');
});