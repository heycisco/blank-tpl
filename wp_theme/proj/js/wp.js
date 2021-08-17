jQuery(document).ready(function (jQuery) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
jQuery("html").addClass("ios");
}
if (navigator.userAgent.search("MSIE") >= 0) {
jQuery("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
jQuery("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
jQuery("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
jQuery("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
jQuery("html").addClass("opera");
}
jQuery(".menu-icon").on("click", function () {
jQuery("#menu").toggleClass("toggled");
});
jQuery(".menu-toggle").on("keypress", function(e) {
if(e.which == 13) {
jQuery("#menu").toggleClass("toggled");
}
});
});

