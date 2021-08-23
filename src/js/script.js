// jqs = jQuery.noConflict();
jQuery(function () {
	@@include('__const.js'); // тут переменные
	@@include('__functions.js'); // все функции
	@@include('components/__menu.js'); // скрипты для меню

	// действия:
	preventDefault(); // отключаем кнопки


	$(window).on('load', function () {
		// действия после загрузки:
		console.log('loaded!');
		showAbbrTitle(); // всплывающее окно

	});

	$(window).on('resize', function () {
		// действия при ресайзе окна:
		console.log('resized');

	});

});
