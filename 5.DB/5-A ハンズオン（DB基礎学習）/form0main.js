jQuery(function () {
      var appear = false;
      var pageTop = $('#page_top');
      $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
          if (appear == false) {
            appear = true;
            pageTop.stop().animate({
              'bottom': '0px'
            }, 300);
          }
        } else {
          if (appear) {
            appear = false;
            pageTop.stop().animate({
              'bottom': '-50px'
            }, 300);
          }
        }
      });
      pageTop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
      });
});

let followSpace = document.querySelector('.followSpace');

let followModal = document.querySelector('.followModal');

let followCloseBtn = document.querySelector('.followCloseBtn');

let followOverlay = document.querySelector('.followOverlay');

followSpace.addEventListener('click', function (e) {

      e.preventDefault();
      followModal.classList.add('active');
      followOverlay.classList.add('active');

});

followOverlay.addEventListener('click', function () {

      followModal.classList.remove('active');
      followOverlay.classList.remove('active');

});

let space = document.querySelector('.space');

let modal = document.querySelector('.modal');

let closeBtn = document.querySelector('.close');

let overlay = document.querySelector('.overlay');


space.addEventListener('click', function (e) {

    e.preventDefault();
    modal.classList.add('active');
    overlay.classList.add('active');

});

overlay.addEventListener('click', function () {

    modal.classList.remove('active');
    overlay.classList.remove('active');

});

  const headerMove = $('header');

  $(window).on("load scroll", function () {

        if ($(this).scrollTop() > 100 && headerMove.hasClass("isFixed") == false) {
            headerMove.css("display", "block");
            headerMove.css({ "top": "-80px" });
            headerMove.addClass("isFixed");
            headerMove.css({ "top": 0 }, 600);
            headerMove.css({ "z-index": "555" });
      }
        else if ($(this).scrollTop() < 80 && headerMove.hasClass("isFixed") == true) {
            headerMove.removeClass("isFixed");
            headerMove.css("display", "none");
      }

})

  window.addEventListener('load', (event) => {

    document.querySelectorAll('a[href^="#"]').forEach(e => e.addEventListener('click', function(e){

      e.preventDefault();

      let target = e.target.getAttribute("href");

      let targetTop = document.querySelector(target).getBoundingClientRect().top  + window.pageYOffset;

      let scrollOptions = {
        left: 0,
        top: targetTop,
        behavior: 'smooth'
      }

      window.scrollTo(scrollOptions);
    }));

  });