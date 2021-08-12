const codexEditor = $('.codex-editor');
const codexEditorRedactor = $('.codex-editor .codex-editor__redactor');
const codexBlock = $('.codex-editor .ce-block');
const codexBlockFocused = $('.codex-editor .ce-block--focused');

const codexToolbar = $('.codex-editor .ce-toolbar__content');
const codexToolbarMoved = $('.codex-editor .ce-toolbar__plus').add('.codex-editor .ce-toolbox');


function positionControl() {
	let movedElements = $('.ajust-position-wrapper');
	let position = codexBlockFocused.position();
	let posT = position.top;
	let posL = position.left -= 50;
	$(movedElements).css({
		'top': posT + 'px',
		'left': posL + 'px'
	});
}

function moveToInput() {
	$(codexEditorRedactor).prepend('<div class="ajust-position-wrapper"></div>');
	$(codexToolbarMoved).appendTo('.ajust-position-wrapper');
	$(codexEditor).addClass('position-was-fixed');
	positionControl();
}

function moveToDefault() {
	$(codexToolbarMoved).appendTo(codexToolbar);
	$('.ajust-position-wrapper').remove();
	$(codexEditor).removeClass('position-was-fixed');
}

if ($(window).width() < 650) {
	moveToInput();

}

$(window).on('resize', function() {
	if (($(window).width() < 650) && !($(codexEditor).hasClass('position-was-fixed'))) {
		moveToInput();
	} else if (($(window).width() < 650) && ($(codexEditor).hasClass('position-was-fixed'))) {
		positionControl();
	} else {
		moveToDefault();
	}
});
