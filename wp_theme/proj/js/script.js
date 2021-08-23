jQuery.noConflict();
jQuery(function () {
	; // тут переменные
	// Отключение действий при нажатии на кнопки
function preventDefault() {
	jQuery("button").on("click", function (event) {
		event.preventDefault();
	});
}
; // все функции
	; // скрипты для меню

	// действия:
	preventDefault(); // отключаем кнопки


	jQuery(window).on('load', function () {
		// действия после загрузки:
		console.log('loaded!');
		showAbbrTitle(); // всплывающее окно

	});

	jQuery(window).on('resize', function () {
		// действия при ресайзе окна:
		console.log('resized');

	});

});
