=== Shrinking Video ===
Contributors: blakelong
Donate Link: staff@digital-scripts.com
Tags: video, shortcode, plugin, media, videos, position, position top, scroll past, youtube, vimeo, dailymotion, embed
Requires at least: 4.6.1
Tested up to: 4.7
Stable tag: 1.1.1
License: GPLv2 or later

Shrinking Video is a simple plugin that allows for a video to be seen on the top right of the window when the user scrolls past the video.

== Description ==

Have a video that you want your website viewers to watch? Watching a video would typically restrict the viewer from viewing the rest of the webpage. Shrinking video solves that problem by shrinking the video to the upper right corner of the screen once the user scrolls past the video. Once the user scrolls back up to the page the video unshrinks and returns to its normal position.

= Features =
* Shortcode [shrinkingvideo] to specify which video to shrink
* Control over where the video is shrunk. ( top right, top left, bottom left, bottom right )
* Supports any video supported by wordpresses embed system

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the shortcode [shrinkingvideo src='' height='' width=''] on a page that you wish to apply the new video to.

== Frequently Asked Questions ==

= What videos are supported? =

Any video that wordpress supports through their embed system is supported with Shrinking Video.

= How do I select the video that I want to shrink? =

Shrinking Video uses the shortcode [shrinkingvideo src=''] to specify which video to shrink. For more information on the shortcode goto other notes or view the readme.txt.

= How do I change the position of the shrunken video? =

To control where the video is shrunk to change the position attribute of the shortcode [shrinkingvideo]. For more information on the shortcode goto other notes or view the readme.txt.

== Screenshots ==

1. Shows the video before the user scrolls past.
2. Shows the video once the user scrolls past.

== Changelog == 

= Version 1.1.0 =

* Updated shortcode to accept a position attribute
* Updated shortcode to accept a class attribute for css styling

= Version 1.0.0 =

* Initial release of Shrinking Video

== Shortcode ==

Shrinking Video uses the shortcode [shrinkingvideo] in order to specify which video to apply the changes to.

The following shortcode accepts 5 attributes.
[shrinkingvideo src="" height="" width="" class="" position=""]

* The src attribute is required and should be the url to the video.
* The height attribute is optional and is used to define the height of the video. The default value is 394.
* The width attribute is optional and is used to define the width of the video. The default value is 700.
* The class attribute is optional and is used to apply a css class to the videos wrapper element.
* The position attribute is optional and is used to specify where to display the shrunked video. Accepts values "top right", "top left", "bottom left", "bottom right". The default value is "top right".