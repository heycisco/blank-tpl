// jqs = jQuery.noConflict();
jQuery(function() {
	; // тут переменные
	
// Отключение действий при нажатии на кнопки
function preventDefault() {
	$('button').on('click', function(event) {
		event.preventDefault();
	});
}
; // все функции
	; // скрипты для меню


// действия:
	preventDefault(); // отключаем кнопки


	$(window).on('load', function() {
// действия после загрузки:

	$(window).on('resize', function() {
// действия при ресайзе окна:

	});

	});
});