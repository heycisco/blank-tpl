// jqs = jQuery.noConflict();
jQuery(function() {
	@@include('__const.js'); // тут переменные
	@@include('__functions.js'); // все функции
	@@include('components/__menu.js'); // скрипты для меню


	$(window).on('load', function() {
// действия после загрузки:
		selResume();
		positionStart();

	});
	$(window).on('resize', function() {
// действия после ресайза окна:
		positionStart();

	});
});
