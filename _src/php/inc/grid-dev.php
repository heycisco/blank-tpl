<style>
.show-grid::before {
	--grid-color: #ff00001c;
}
#grid-btn {
	position: fixed;
	right: 12px;
	bottom: 12px;
	padding: 2px 4px;
	background: #00000047;
	color: #fff;
	font-size: 12px;
	cursor: pointer;
	user-select: none;
}
#grid-btn:hover {
	background: #red;
}
.show-grid .main-header {
	background: #0000001f;
}
.show-grid .main-footer {
	background: #0000001f;
}
.show-grid section>* {
	background: #0000001f;
}
.show-grid:before {
	position: fixed;
	max-width: var(--page-width);
	margin: 0 auto;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	content: '';
	pointer-events: none;
	--grid-column-width: calc((100% - var(--grid-gutter) * var(--grid-columns)) / var(--grid-columns));
	border: solid transparent;
	border-width: 0 calc(var(--grid-sides) - var(--grid-gutter) / 2);
	background-image: repeating-linear-gradient(to right,
		transparent 0,
		transparent calc(var(--grid-gutter) / 2),
		var(--grid-color) calc(var(--grid-gutter) / 2),
		var(--grid-color) calc(var(--grid-column-width) + var(--grid-gutter) / 2),
		transparent calc(var(--grid-column-width) + var(--grid-gutter) / 2),
		transparent calc(var(--grid-column-width) + var(--grid-gutter)));
	background-repeat: no-repeat;
}
</style>
<script>
	const bodyGrid = document.querySelector("body.main-body");
	function showGrid(){bodyGrid.classList.toggle("show-grid")}
</script>
<div id="grid-btn" onclick="showGrid()">GRID</div>