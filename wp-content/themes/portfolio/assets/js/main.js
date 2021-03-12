$(document).ready(function() {
	$('.zoom-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			}
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
		
	});

	$('.burger').click(function() { // задаем функцию при нажатиии на элемент <button>
		$(this).toggleClass("burger--active");
		$('.header__navigation').toggleClass("header__navigation--active"); // удаляем, или добавляем элементу <p> два класса
		$('.header__menu').toggleClass("header__menu--active"); 
		$('.header__menu-link').toggleClass("header__menu-link--active");
	});
	
	$('.header__menu-link').click(function() { // задаем функцию при нажатиии на элемент <button>
		$('.burger').removeClass("burger--active");
		$('.header__navigation').removeClass("header__navigation--active"); // удаляем, или добавляем элементу <p> два класса
		$('.header__menu').removeClass("header__menu--active"); 
		$('.header__menu-link').removeClass("header__menu-link--active");
	});
	

});
