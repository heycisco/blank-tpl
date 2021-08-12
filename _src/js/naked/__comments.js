const codexEditor = $('.codex-editor');
const codexEditorRedactor = $('.codex-editor .codex-editor__redactor');
const codexBlock = $('.codex-editor .ce-block');
const codexToolbar = $('.codex-editor .ce-toolbar__content');
const codexToolbarMoved = $('.codex-editor .ce-toolbar__plus').add('.codex-editor .ce-toolbox');


// $(codexBlock).on('click', function() {
// 	$(codexBlock).removeClass('ce-block--focused');
// 	$(this).addClass('ce-block--focused');
// });



function moveToInput() {
	$(codexEditorRedactor).prepend('<div class="ajust-position-wrapper"></div>');
	$(codexToolbarMoved).appendTo('.ajust-position-wrapper');
	let movedElements = $('.ajust-position-wrapper');
	$(movedElements).css({
		'left': '-50px'
	});
	$(codexEditor).addClass('position-was-fixed');
	console.log('moveToInput');
}

function positionControl() {
	let movedElements = $('.ajust-position-wrapper');
	let codexBlockFocused = $('.codex-editor .ce-block--focused');
	let position = codexBlockFocused.position();
	let posTop = position.top;
	let posLeft = position.left -= 50;
	$(movedElements).css({
		'top': posTop + 'px',
		'left': posLeft + 'px'
	});
	console.log('positionControl');
}

function moveToDefault() {
	$(codexToolbarMoved).appendTo(codexToolbar);
	$('.ajust-position-wrapper').remove();
	$(codexEditor).removeClass('position-was-fixed');
	console.log('moveToDefault');
}

if ($(window).width() < 650) {
	moveToInput();
	$(codexBlock).on('click', function() {
		positionControl();
	});
}
$(window).on('resize', function() {
	if ($(window).width() < 650) {
		moveToDefault();
		moveToInput();
		positionControl();
	} else {
		moveToDefault();
	}
});
