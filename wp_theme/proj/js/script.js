jqs = jQuery.noConflict();
jQuery(function() {
	; // тут переменные
	
// Отключение действий при нажатии на кнопки
function preventDefault() {
	jqs('button').on('click', function(event) {
		event.preventDefault();
	});
}
; // все функции
	; // скрипты для меню


// действия:
	preventDefault(); // отключаем кнопки


	jqs(window).on('load', function() {
// действия после загрузки:

	jqs(window).on('resize', function() {
// действия при ресайзе окна:

	});

	});
});
