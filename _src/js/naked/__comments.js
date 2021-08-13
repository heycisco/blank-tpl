jQuery(window).on('load', function(){

console.log('script-start');

const codexEditor = jQuery('.codex-editor');
const codexEditorRedactor = jQuery('.codex-editor .codex-editor__redactor');
const codexBlock = jQuery('.codex-editor .ce-block');
const codexToolbar = jQuery('.codex-editor .ce-toolbar__content');
const codexToolbarMoved = jQuery('.codex-editor .ce-toolbar__plus').add('.codex-editor .ce-toolbox');



function moveToInput() {
	jQuery(codexEditorRedactor).prepend('<div class="ajust-position-wrapper"></div>');
	jQuery(codexToolbarMoved).appendTo('.ajust-position-wrapper');
	let movedElements = jQuery('.ajust-position-wrapper');
	jQuery(movedElements).css({
		'left': '-50px'
	});
	jQuery(codexEditor).addClass('position-was-fixed');
	console.log('moveToInput');
}

function positionControl() {
	let movedElements = jQuery('.ajust-position-wrapper');
	let codexBlockFocused = jQuery('.codex-editor .ce-block--focused');
	let position = codexBlockFocused.position();
	let posTop = position.top;
	let posLeft = position.left -= 50;
	jQuery(movedElements).css({
		'top': posTop + 'px',
		'left': posLeft + 'px'
	});
	console.log('positionControl');
}

function moveToDefault() {
	jQuery(codexToolbarMoved).appendTo(codexToolbar);
	jQuery('.ajust-position-wrapper').remove();
	jQuery(codexEditor).removeClass('position-was-fixed');
	console.log('moveToDefault');
}


// jQuery(codexBlock).on('click', function() {
// 	jQuery(codexBlock).removeClass('ce-block--focused');
// 	jQuery(this).addClass('ce-block--focused');
// 	console.log('click event');
// });

if (jQuery(window).width() < 650) {
	moveToInput();
	jQuery(codexBlock).on('click', function() {
		positionControl();
	});
	console.log('first init');
}
jQuery(window).on('resize', function() {
	if ($(window).width() < 650) {
		moveToDefault();
		moveToInput();
		positionControl();
	} else {
		moveToDefault();
	}
});
console.log('resize init');
});