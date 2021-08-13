// Отключение действий при нажатии на кнопки
function preventDefault() {
	$(elToDisableActions).on('click', function(event) {
		event.preventDefault();
	});
}

// Рандомизируем оформление постов
function randomArticlePrev() {
	$(articlePrev).each(function() {
		let randomBackground = (Math.random() * 1 + 1);
		let bgType = randomBackground.toFixed();
		$(this).addClass('bg-' + bgType);
	});

	$(articlePrevPic).each(function() {
		let randomRotate = (Math.random() * 16) - 11;
		$(this).css({ 'transform': 'rotate(' + randomRotate + 'deg)' });

		let randomStaple = (Math.random() * 4 + 1);
		let staplePos = randomStaple.toFixed();
		$(this).addClass('staple-' + staplePos);
	});

	$(articleStaple).each(function() {
		let randomLeft = (Math.random() * 160 + 6);
		let randomBottom = (Math.random() * 24 + 6);
		let randomRotate2 = (Math.random() * 45 - 23);
		$(this).css({ 'left': +randomLeft + 'px', 'bottom': +randomBottom + 'px', 'transform': 'rotate(' + randomRotate2 + '15deg)' });
	});
}

// Автоподгонка размера заголовка поста
function postTitleSize() {
	let postBrandingHeight = $(headerBranding).height();
	$(singlePostHeader).css({ 'min-height': 'calc(' + postBrandingHeight + 'px + (var(--section-padding))' });

	let postTitleHeight = $(singlePostHeader).height();
	$(singlePostWrapper).css({ 'padding-top': 'calc((var(--section-padding) * 2) + ' + postTitleHeight + 'px)' });
}

// Плавная прокрутка к началу страницы
function scrollTop() {
	$(scrollTopBtn).on('click', function() {
		let el = $(this);
		let dest = el.attr('href');
		if (dest !== undefined && dest !== '') {
			$('html').animate({
				scrollTop: $(dest).offset().top
			}, 500);
		}
		return false;
	});
}

// Сворачивание длинного содержимого поста
function postContentCollapse() {
	
}

// Добавление вложенным меню функционала и анимации
function menuChildDecktop() {
	$('.menu-item-has-children>a').append('<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg></span>');
	$('.menu-item-has-children>a').click(function() {
		if ($(this).parent().hasClass('clicked')) {
			$('.menu-item-has-children.clicked ul').hide(300);
			$('.menu-item-has-children').removeClass('clicked').find('ul').hide(300);
		} else {
			$('.menu-item-has-children.clicked ul').hide(300);
			$('.menu-item-has-children').removeClass('clicked').find('ul').hide(300);
			$(this).parent().addClass('clicked');
			$(this).parent().find('ul').show(300);
		}
	});
}
