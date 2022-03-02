document.addEventListener("DOMContentLoaded", function () {
   // бургер
$(".header__burger").click(function (event) {
   $(".header__burger,.header__menu").toggleClass("active");
   $('html').toggleClass('no__scroll');
 });



 //  яндекс карта
ymaps.ready(init);
function init() {
  let breakpoint = window.matchMedia("(max-width: 48em)");
  let descOptions = {
    iconLayout: "default#image",
    iconImageHref: "img/icons/map.svg",
    iconImageSize: [96, 131],
    iconImageOffset: [-15, -30],
  };
  if (breakpoint) {
    descOptions.iconImageSize = [55, 65];
    descOptions.iconImageOffset = [0, -10];
  }

  var myMap = new ymaps.Map("contloc", {
      center: [55.588888, 37.744441],
      zoom: 15,
      controls: ["zoomControl"],
      behaviors: ["drag"],
    }),
    myPlacemark = new ymaps.Placemark(
      [55.588888, 37.744441],
      {
        hintContent: "Московская область, Проектируемый проезд, №5541",
        balloonContent: "БММ",
      },
      descOptions
    );

  myMap.geoObjects.add(myPlacemark);
}

const anchors = document.querySelectorAll('a[href*="#"]')
  for( let anchor of anchors) {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const blockID = anchor.getAttribute('href')
      document.querySelector('' + blockID).scrollIntoView({
        behavior: "smooth",
        block: "start"
      })
    })
  }


  const banerHomeSwiper = new Swiper(".baner-home-swiper", {
      navigation: {
        nextEl: ".baner-home-btn-next",
    },
    pagination: {
        el: ".baner-home-pagination .total",
        type: "custom",
        renderCustom: function (swiper, current, total) {
            let totalRes = total >= 10 ? total : `0${total}`;
            return totalRes;
        },
    },
    slidesPerView: 1,
    spaceBetween: 2,
    loop: true,
    slideActiveClass: 'active',
    speed: 500,
    autoplay: {
      delay: 3000,
    },
  });
  let curnum = document.querySelector(".baner-home-pagination .current");
    banerHomeSwiper.on("slideChange", function () {
    let ind = banerHomeSwiper.realIndex + 1,
        indRes = ind >= 10 ? ind : `0${ind}`;
    curnum.innerHTML = indRes;
  });



  const mobileSwiper = new Swiper(".mobile-slider", {
  slidesPerView: 1.71,
  spaceBetween: 20,
  loop: true,
  speed: 500,
});
  function resize() {
    if ($(window).width() >= 769) {
      mobileSwiper.destroy();
    }
  }
  
  if ($(".mobile-slider").length > 0) {
    resize();
  } else {
  }


  //   табы
	const tabs = document.querySelector('.tabs');
	const tabsBtn = document.querySelectorAll('.tabs__btn');
	const tabsContent = document.querySelectorAll('.tabs__content');

	if (tabs) {
		tabs.addEventListener('click', (e) => {
			if (e.target.classList.contains('tabs__btn')) {
				const tabsPath = e.target.dataset.tabsPath;
				tabsBtn.forEach(el => {el.classList.remove('tabs__btn--active')});
				document.querySelector(`[data-tabs-path="${tabsPath}"]`).classList.add('tabs__btn--active');
				tabsHandler(tabsPath);
			}
		});
	}
	const tabsHandler = (path) => {
		tabsContent.forEach(el => {el.classList.remove('tabs__content--active')});
		document.querySelector(`[data-tabs-target="${path}"]`).classList.add('tabs__content--active');
	};



  $('.open__modal').click(function(e) {
    e.preventDefault();
    $('.modal__bg').fadeIn(600);
    $('html').addClass('no__scroll');
  });
  $('.close__modal').click(function(e) {
    e.preventDefault();
    $('.modal__bg').fadeOut(600);
    $('html').removeClass('no__scroll');
  });

  $('.open__modal-btn').click(function(e) {
    e.preventDefault();
    $('.modal__bg-btn').fadeIn(600);
    $('html').addClass('no__scroll');
  });
  $('.close__modal-btn').click(function(e) {
    e.preventDefault();
    $('.modal__bg-btn').fadeOut(600);
    $('html').removeClass('no__scroll');
  });


})