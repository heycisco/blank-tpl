// Отключение действий при нажатии на кнопки
function preventDefault() {
	$("button").on("click", function (event) {
		event.preventDefault();
	});
}
