;(function (jQuery) {
'use strict';
jQuery.fn.vids = function (options) {
var settings = {
customSelector: null,
ignore: null
};
if (!document.getElementById('vids-style')) {
var head = document.head || document.getElementsByTagName('head')[0];
var css = '.video-wrap{width:100%;position:relative;padding:0}.video-wrap iframe, .video-wrap object, .video-wrap embed{position:absolute;top:0;left:0;width:100%;height:100%}';
var div = document.createElement("div");
div.innerHTML = '<p>x</p><style id="vids-style">' + css + '</style>';
head.appendChild(div.childNodes[1]);
}
if (options) {
jQuery.extend(settings, options);
}
return this.each(function () {
var selectors = [
'iframe[src*="youtube.com"]',
'iframe[src*="youtube-nocookie.com"]',
'iframe[src*="player.vimeo.com"]',
'iframe[src*="dailymotion.com"]',
'iframe[src*="metacafe.com"]',
'iframe[src*="player.twitch.tv"]',
'iframe[src*="vine.co"]',
'iframe[src*="liveleak.com"]',
'iframe[src*="kickstarter.com"][src*="video.html"]',
'object',
'embed'
];
if (settings.customSelector) {
selectors.push(settings.customSelector);
}
var ignoreList = '.vids-ignore';
if (settings.ignore) {
ignoreList = ignoreList + ', ' + settings.ignore;
}
var jQueryallVideos = jQuery(this).find(selectors.join(','));
jQueryallVideos = jQueryallVideos.not('object object');
jQueryallVideos = jQueryallVideos.not(ignoreList);
jQueryallVideos.each(function (count) {
var jQuerythis = jQuery(this);
if (jQuerythis.parents(ignoreList).length > 0) {
return;
}
if (this.tagName.toLowerCase() === 'embed' && jQuerythis.parent('object').length || jQuerythis.parent('.video-wrap').length) {
return;
}
if ((!jQuerythis.css('height') && !jQuerythis.css('width')) && (isNaN(jQuerythis.attr('height')) || isNaN(jQuerythis.attr('width')))) {
jQuerythis.attr('height', 9);
jQuerythis.attr('width', 16);
}
var height = (this.tagName.toLowerCase() === 'object' || (jQuerythis.attr('height') && !isNaN(parseInt(jQuerythis.attr('height'), 10)))) ? parseInt(jQuerythis.attr('height'), 10) : jQuerythis.height(),
width = !isNaN(parseInt(jQuerythis.attr('width'), 10)) ? parseInt(jQuerythis.attr('width'), 10) : jQuerythis.width(),
aspectRatio = height / width;
if (!jQuerythis.attr('id')) {
var videoID = 'vid' + count;
jQuerythis.attr('id', videoID);
}
jQuerythis.wrap('<div class="video-wrap"></div>').parent('.video-wrap').css('padding-top', (aspectRatio * 100) + '%');
jQuerythis.removeAttr('height').removeAttr('width');
});
});
};
})(window.jQuery || window.Zepto);