$(document).ready(function() {

	$('.carousel').each(function()
	{
		var $slickElement = $(this);
		$slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide)
		{
			var i = (currentSlide ? currentSlide : 0) + 1;
			$('.carousel-nav__wrap .slides-num', slick.$slider.parent()).html(i + '<span class="slides-num__color">/' + slick.slideCount + '</span>');
		});

		var params = {
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: false,
			infinite: true
		};
		if($(this).hasClass('carousel-center-mode'))
		{
			params['centerMode'] = true;
			params['centerPadding'] = 0;
		}
		$slickElement.slick(params);

		$slickElement.parent().find('.carousel-nav__wrap .arrow-next').click(function()
		{
			$slickElement.slick('slickNext');
		});
		$slickElement.parent().find('.carousel-nav__wrap .arrow-prev').click(function()
		{
			$slickElement.slick('slickPrev');
		});
	});

	$('.slider__list').slick({
		infinite: true,
		slidesToShow: 9,
		slidesToScroll: 1,
		arrows: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
				slidesToShow: 8
				}
			},
			{
				breakpoint: 1024,
				settings: {
				slidesToShow: 6
				}
			},
			{
				breakpoint: 600,
				settings: {
				slidesToShow: 4
				}
			},
				{
				breakpoint: 480,
				settings: {
				slidesToShow: 4
				}
			}
			]
	  });

	$('#slider-range').slider({
		range: true,
		min: 0,
		max: 5000,
		values: ['1700', '5000'],
		slide: function(event, ui) {
			$('#slider-min-value').val(ui.values[0]);
			$('#slider-max-value').val(ui.values[1]);
		}
	});
	  
	$(".search-form__search-icon").click(function() {
		$(".search-form__input").addClass('search-form__input--open');
		$(".search-form__close-icon").addClass('search-form__close-icon--d-block');
		$(".search-form__input-group").addClass('search-form__input-group--border-color');
		$(this).next().focus();
	});
	
	$(".search-form__close-icon").click(function() {
		$(".search-form__input").removeClass('search-form__input--open');
		$(".search-form__close-icon").removeClass('search-form__close-icon--d-block');
		$(".search-form__input-group").removeClass('search-form__input-group--border-color');
	});

	$(".filters__list-item-title").click(function (){
		$(this).next().toggleClass('filters__list-item-content--display--block');
		$(this).toggleClass('filters__list-item-title--minus');
	})

	$(".cart-button").click(function (){
		$('.skins-market__right-block-header .cart').toggleClass("cart__position-right--m");
		$('.skin-page .cart').toggleClass("cart__position-right--s");
	});


	$(".popup-close-button").click(function () {
		$('.cart').removeClass('cart__position-right--m').removeClass('cart__position-right--s');
		$(document).find('.popup-window').removeClass('popup-window--display--flex').removeClass('popup-window--opacity--1');
	});

	$('.skins-market-list__item').each(function() {
		$(this).click(function (e) {
			if ($(e.target).closest('.skins-market-list__item-to-cart-button').length) {
				$(this).find('.skins-market-list__skin-info-bottom-content').toggleClass('skins-market-list__skin-in-cart-icon');

				if ($(this).find('.skins-market-list__item-to-cart-button').html() == "В корзину") {
					$(this).find('.skins-market-list__item-to-cart-button').html('Убрать из корзины');
				}
				else {
					$(this).find('.skins-market-list__item-to-cart-button').html('В корзину');
				}

			}
		});
	});


	$(".collapse-button").click(function (){
		if ($(this).hasClass("collapse-button__show")) {
			$(".seo-text-block").addClass("seo-text-block--height--auto").removeClass("seo-text-block--height--m");
			$(this).html('Свернуть');
			$(this).addClass('collapse-button-hide').removeClass("collapse-button__show");
			$(this).addClass('collapse-button--padding-top--xs').removeClass("collapse-button--padding-top--s");
		}
		else {
			$(".seo-text-block").addClass("seo-text-block--height--m").removeClass("seo-text-block--height--auto");
			$(this).html('Развернуть');
			$(this).addClass('collapse-button__show').removeClass("collapse-button__hide");
			$(this).addClass('collapse-button--padding-top--s').removeClass("collapse-button--padding-top--xs");
		}
	});



});