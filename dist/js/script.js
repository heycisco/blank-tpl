// jqs = jQuery.noConflict();
jQuery(function() {
	const suitContainer = ('.suit')
const suitItem = $('.suit__item');
const resetSuit = $('#reset_suit');

; // тут переменные
	function selResume() {
let wasActivated = localStorage.getItem('selected');
	if (wasActivated) {
		let selectedId = localStorage.getItem('selected-suit');
		let selectedItem = document.getElementById(selectedId);
		$(suitContainer).addClass('suit-selected');
		$(selectedItem).addClass('active');
		console.log('posStart');
	}
}


function positionStart() {
	if ($(suitContainer).hasClass('suit-selected')) {
		let fix = 2.9;
		let height = $(suitContainer).height() / fix;
		let width = $(suitContainer).width() / fix;
		$(suitItem).eq(0).css({
			'bottom': height + 'px',
			'right': width + 'px'
		});
		$(suitItem).eq(1).css({
			'bottom': height + 'px',
			'left': width + 'px'
		});
		$(suitItem).eq(2).css({
			'top': height + 'px',
			'right': width + 'px'
		});
		$(suitItem).eq(3).css({
			'top': height + 'px',
			'left': width + 'px'
		});

	} else {
		let fix = 3.2;
		let height = $(suitContainer).height() / fix;
		let width = $(suitContainer).width() / fix;
		$(suitItem).eq(0).css({
			'bottom': height + 'px',
			'right': width + 'px'
		});
		$(suitItem).eq(1).css({
			'bottom': height + 'px',
			'left': width + 'px'
		});
		$(suitItem).eq(2).css({
			'top': height + 'px',
			'right': width + 'px'
		});
		$(suitItem).eq(3).css({
			'top': height + 'px',
			'left': width + 'px'
		});
	}
}



$(suitItem).on('click', function() {
	$(suitContainer).addClass('suit-selected');
	$(suitItem).removeClass('active');
	$(this).addClass('active');
	let selectedSuit = $(this).attr('id');
	localStorage.setItem('selected', true);
	localStorage.setItem('selected-suit', selectedSuit);
	positionStart();
});

$(resetSuit).on('click', function() {
	$(suitContainer).removeClass('suit-selected');
	$(suitItem).removeClass('active');
	localStorage.removeItem('selected');
	localStorage.removeItem('selected-suit');
	positionStart();
});
; // все функции


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
