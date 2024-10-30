=== Metabase - Post & User Meta Editor ===
Contributors: davexpression,pluginette,helizabethan
Donate link: https://github.com/davidtowoju
Tags: meta, user meta, post meta, show post meta, show user meta
Requires at least: 5.0
Tested up to: 6.5
Stable tag: 0.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Manage post meta, custom post type meta and user meta of your WordPress site.

== Description ==

This plugin shows the post meta and user meta of your website. Post meta of custom post types can also be viewed. Only admins can view this meta data.

[youtube https://www.youtube.com/watch?v=T0EXphFEcqo]

## Post Meta

All user meta data can be viewed with this plugin (Metabase) - including custom post types. Both public and private meta keys can be viewed. Private meta keys start with the underscore prefix and are not meant to be seen in the admin.

In short, any data that can be viewed with `get_post_meta()` can be viewed with this plugin.

To view your post meta, please go to the open the post in the WP Admin and scroll down to end of the page, you will see a table titled "Meta".

## User Meta

All user meta data can be viewed/managed with this plugin (Metabase). Also, private and public meta keys can be viewed. Any data that can be viewed with `get_user_meta()` can be viewed with this plugin.

To view your plugin, please got to the Users page and click to view a user. Scroll down and you will see the

## Features

- Free
- Stand-alone, no need to install any other plugin for this to work
- Delete meta data
- View private meta data
- Edit and change the values of your meta data


### Getting Started

After installing this plugin, a metabox will be added to your posts and users.

You can filter the post types you want the metabox to appear in.


== Installation ==



This section describes how to install the plugin and get it working.



e.g.



1. Upload `metabase.php` to the `/wp-content/plugins/` directory

1. Activate the plugin through the 'Plugins' menu in WordPress

1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates



== Frequently Asked Questions ==



== Screenshots ==
1. Post Meta
2. User Meta


== Changelog ==



= 0.2.1 =

Fix bug from 0.2.0

= 0.2.0 =

Edit user and post meta.

= 0.1.0 =

Initial release.