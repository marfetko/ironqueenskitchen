=== Penscratch ===
Contributors: automattic
Donate link:
Tags: blog, education, journal, school, light, simple, gray, white, custom-background, custom-colors, custom-header, custom-menu, flexible-header, editor-style, post-formats, clean, minimal, one-column, two-columns, right-sidebar, full-width-template, rtl-language-support, translation-ready, infinite-scroll, fixed-layout, responsive-layout, site-logo
Tested up to: 4.0
Stable tag: 3.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Penscratch is based on Underscores http://underscores.me/, (C) 2012-2014 Automattic, Inc.

== Description ==

A clean, responsive writing theme with support for site logos, featured images, fancy pull quotes, and more.

== Licenses ==

* Genericons from genericons.com, SIL Open Font license
* Image in screenshot.png from unsplash.com, licensed CC0

== Installation ==

1. In your admin panel, go to Appearance -> Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

== Where can I add widgets? ==

Penscratch includes a widget area in the site's sidebar, configured by going to Appearance -> Widgets in your Dashboard. If no widgets are active, the theme automatically uses a narrower content column.

== Does Penscratch use Featured Images? ==

If a Featured Image at least 656px wide is set for a post, it will display below the post title on the blog and archives.

== How can I add a site logo? ==

Brand your site and make it yours with Jetpack (http://jetpack.me) by including your business' logo; navigate to Customize → Site Title and upload a logo image in the space provided. The logo will appear above your site title in the header at a maximum height of 150px.

== How can I add links to my social networks? ==

You can add links to a multitude of social services in the footer, using the following steps:

1. Create a new Custom Menu, and assign it to the Social Links menu location.
2. Add links to each of your social services using the Links panel.
3. Icons for your social links will appear in the footer.

= Quick Specs (all measurements in pixels) =

* The main column width is 656, except in the full-width layout, where it's 937.
* The sidebar width is 234.
* Featured Images for single posts are 656 by 300
* Custom header image should be at least 937 in width.

== Changelog ==

= 17 November 2015 =
* Add css classes that .org now requires.

= 12 November 2015 =
* Flip blockquote icon for stylistic purposes

= 10 August 2015 =
* Make widget lists consistent. Fix #3318

= 31 July 2015 =
* Remove .`screen-reader-text:hover` and `.screen-reader-text:active` style rules.

= 15 July 2015 =
* Always use https when loading Google Fonts.

= 31 May 2015 =
* use html entities instead of <  and >

= 8 May 2015 =
* remove `.screen-reader-text:hover` and `.screen-reader-text:active` style rules.

= 6 May 2015 =
* Fully remove example.html from Genericons folders.
* Remove index.html file from Genericions.

= 3 March 2015 =
* Style captions to look more like the theme in the editor styles;

= 13 November 2014 =
* Second path at fixing dropdown on touch devices.

= 12 November 2014 =
* First pass at fixing dropdown on touch devices. Props @ehgy.

= 2 November 2014 =
* Correct size definition for Site Logo.
* Add Jetpack prefixing to Site Logo template tags.

= 24 October 2014 =
* Add support for Dropbox social icon
* Add more social networks
* Add support for more social networks

= 16 October 2014 =
* Fix for appearance of reblogs on WP.com.

= 15 October 2014 =
* Improvements to fix old-school gallery styles; use inline-block instead of floating
* Add new hover color to links
* Styles for slideshows, add bottom margin to responsive videos
* Consistent styling and hover effects for Older Posts button.
* Add hover styles for post navigation
* Ensure grandchild menus can be accessed by reducing space between parent and child ul

= 14 October 2014 =
* Add POT file
* Add RTL styles
* Change text-bottom vertical align to bottom for menu icon, as text-bottom didn't
* Have menu toggle appear at a narrower break point
* Add tags and update theme author in style.css; update featured images and Custom Headers to match column widths; update readme.txt

= 13 October 2014 =
* Use tilde instead of bullet between comment entry meta
* Adjustments to page and widget titles to work better with Custom Fonts
* Better description for style.css; adjust font size on site title to work with Custom Fonts
* Fix for blockquote citations
* Add pullquotes to right and left aligned blockquotes; ensure PRE tag is the same font size as surrounding text
* Add screenshot.png; add editor styles
* Remove unnecessary registered thumbnail sizes; update content_width for full-width page template; style fixes for blockquotes, full-width page template, and respond header
* Add comments link to posts in blog index/archive views
* Replace missing border and padding between posts when infinite scroll is active
* Increase site-info width such that our extra-long footer credit text can fit on one line
* Updates to padding, content_width
* Adjustments to content padding, content_width, default Custom Header crop size
* Replace bullet separator with tilde; minor tweak to blockquote styles
* More padding for single-column layout; fix infinite scrolling when social links menu is active; fancier single post navigation; minor style cleanup; adjust content_width
* Minor adjustments to spacing/styles; correct colors in inc/wpcom.php
* Initial commit
