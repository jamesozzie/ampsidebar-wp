=== AMP Sidebar Hamburger Menu ===
Contributors: jamesosborne
Tags: amp-sidebar, amp sidebar, navigation menu, navbar, amp navigation, hamburger dropdown, dropdown navigation menu
Requires at least: 4.0
Tested up to: 5.2.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

If you want to benefit from adopting AMP but you’re not ready to switch to an AMP compatible theme give this plugin a try.

It allows you to easily achieve a hamburger dropdown menu, which uses the amp-sidebar component for optimal performance. It works in both AMP and non AMP, using the jz-sidebar shortcode or a code snippet into your existing hamburger menu.

The dropdown menu works in both desktop and mobile, with easily configurable options via the settings screen. If you’re using a WordPress theme that doesn’t work well in AMP give this plugin a try, it might provide you with a solution, if you theme developer doesn’t! 

If you're using the <a href=”https://wordpress.org/plugins/amp/”>official AMP plugin</a> there are options to  display the button on AMP URLs only. 

<strong>Features: </strong>

<ul>
	<li>Easy to setup</li>
	<li>Works in AMP and non AMP</li>
	<li>Fast load, optimal performing</li>
	<li>Unlimited color options</li>
	<li>Options for rending in desktop and mobile</li>
	<li>Bloatware free and non intrusive</li>
<li>Completely free, the way AMP should be</li>
</ul>

== Installation ==
<strong>Using The WordPress Dashboard</strong>

1. Install as a typical WordPress plugin (from the WordPress repository or via a file upload)
2. Activate the plugin through the 'Plugins' menu in WordPress
3. After activating the plugin you'll see a "AMP sidebar" menu within the “Settings” tab
4. Insert the shortcode via a page builder using <code>[jz-sidebar]</code>, or insert into your theme files using <code><?php echo do_shortcode("[jz-sidebar]"); ?></code>

Note: If you prefer to use your existing navigation menus button simply add the following attributes to your navigation button:
<code><?php if (is_amp_endpoint()){ ?> on="tap:sidenav.open" role="button" tabindex="0" <?php } ?></code>

<br />

== Frequently Asked Questions ==

= How does it work? =
You can use a  shortcode to place the hamburger menu anywhere in your site. or insert the code snippet into your theme files. To insert the shortcode simply add [jz-sidebar] into your favourite code editor (or widgets as of WordPress 4.9). 

If you wish to place the shortcode into your theme templates you can do so by adding the below wherever you choose. For best results find the location of your existing hamburger menu, and apply the following to your theme template containing your existing menu:
<?php echo do_shortcode("[jz-sidebar]"); ?>

If you want to hide your existing hamburger menu for AMP URLs and use this plugin the below is suggested. Please backup your site before applying the below:
<code>
<?php if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) : ?>
     echo do_shortcode("[jz-sidebar]"); 
<?php else : ?>
    // Existing navigation menu markup
<?php endif; ?>
</code>

= Can I use my existing themes navigation button / hamburger menu? =
Sure, you'll need to add the code snippet in between your button markup. If you’re unable to locate your themes navigation menu button check with your theme developer. You simply need to add the below in as an attribute to your existing button. 
<code><?php if (is_amp_endpoint()){ ?> on="tap:sidenav.open" role="button" tabindex="0" <?php } ?></code>

<i>Please bear in mind this is a free plugin, while you can open a support topic don’t expect round the clock support or an instant replay! I will however respond to all questions as soon as possible.</i>

= I don't know where to place it in my theme files? =
If you’re unsure where to place the shortcode or attributes check with your theme developer. You’ll need to figure out the template containing the existing hamburger menu. 

Bear in mind this plugin may not be required at all if your theme supports AMP. So be sure to ask your theme developer if they have AMP support plans. 

= Should I use a child theme? =
Using a child theme is highly recommended. You never know when things go wrong. In addition to safeguarding against things going wrong theme updates won’t overwrite your additions.

= Should I perform a backup first? =
As with all plugins performing regular backups is best practice. I don't take any responsibility for site issues due to misconfiguration, or shortcode misplacement. 

= Can I use this plugin for my non AMP site? =
Good question - yes, you can. If you are looking to use this for your non AMP site you should select the “AMP & Canonical” option from the configuration settings. You’ll need to place the shortcode or navigation menu attributes into your theme files (preferably via a child theme)

= I'm using AMP in reader mode, where do I apply the code snippet or shortcode? = 
If using the AMP plugin in reader mode you are making use of the AMP plugins classic templates. The hard work is all done, simply install and activate the plugin before checking your reader mode AMP urls. 

<i>One thing to note when using reader mode, the amp-sidebar hamburger menu will not be added to your non AMP urls until you place the shortcode into your child themes templates. The “AMP & Canonical” option is redundant, unless of course you decide to add the shortcode to your theme. </i>

= Can I use it to replace my existing WordPress menu? =
Sure, but you’ll have to locate your existing navigation menu and replace it with this hamburger menu. Note that this plugin only offers a hamburger menu. There is no support for a horizontal dropdown menu. 

= I don’t like the styling, how do I change it? =
You can apply CSS as you would normally, to your active themes style.css file,your themes “custom CSS” field, or preferably  a custom plugin. 

If you’re using AMP in reader mode then you can make CSS changes using the below, added to your child themes functions.php file or a custom plugin. 

<code>add_action( 'amp_post_template_css', 'readermode_css' );
function 'readermode_css' ( $amp_template ) { ?>
   // CSS below
  #jozz_sidemenu #sidenav {
    background-color: #008282;
}
<?php
}</code>

= It's not working, what can I do? = 
Perform the following checks or considerations:
<ol>
<li><b>Are you viewing from mobile?</b> If you have the option set to display on mobile only then you’ll have to view from mobile. </li>
<li><b>Did you assign your menu to the AMP sidebar menu location?</b> You need to assign your menu to the newly created AMP sidebar menu location after activating the plugin. </li>
<li><b>Did you place the shortcode into a visible part of your site?</b> ie. If testing you may have placed your shortcode into a block within a post. Did you open that post to view the hamburger menu?</li>
<li><b>Did you tick the checkbox in your menus screen?</b> If you’ve set the option to display the hamburger menu in AMP URLs only make sure you're checking from an actual AMP url. You can use the <a href=”https://chrome.google.com/webstore/detail/ampinspect/igdigflifnjnhooafgglmeefikobalhk?hl=en”>AMPinspect Chrome extension</a> to view your AMP URLs, or the AMP plugins preview, admin bar link.</li> 
<li><b>Did you insert the shortcode/navigation snippet in the correct place?</b> If you added a shortcode to your content (ie. widgets) are you sure that widget appears on the URL you are checking? If you added a shortcode to your theme files directly you will need to ensure it’s correctly placed. Feel free to open a support topic if you have any problems. </li>
<li><b>Did you insert the AMP button code snippet into the correct theme button?</b> You may be using a complex theme, with different menus based on different devices.</li> 
<li><b>Are you using the correct theme?</b> When adding code snippets to your theme templates do you have that template active? If using a child theme you may need to add the code snippet to your parent theme, depending on how you setup your child theme.</li> 
<li><b>Check your defined menu colour!</b> By default the navigation/hamburger menu button is a light black colour. This might not suit your site/menu background if also black. A black menu on a black ground = invisible! </li>
</ol>

= I love it, do you have any other tips for my AMP site? =
If you’ve just got your navigation menu working in your non compatible theme (via this plugin) be sure to also check whether your search button is working, along with your back to top button. If your back to top isn’t working it may be JavaScript based, checkout <a href=”https://wordpress.org/plugins/css-only-back-to-top-button/#installation”>this solution</a>. We’ll have a search box plugin released soon. 

If you manage to get your incompatible site working it would be great to hear from you. Share a review with your site URL, or get your AMP site listed on the plugins website <a href=”https://amp-wp.org/showcases/”>showcase.</a> 

= Where can I download the AMP plugin? =
You can checkout the plugin on the <a href=”https://wordpress.org/plugins/amp/”>WordPress repository</a>. Alternatively visit the plugin website, <a href=”http://www.amp-wp.org”>www.amp-wp.org</a>. If you can’t configure as expected leave a support question for the team to assist. Don’t be one of those guys leaving a review without having raised a support topic. 

= Where can I find out more about AMP? 
The best place to find out more is amp.dev. Other useful resources below:
<ul>
<li><a href=”http://www.am-p.org”>www.amp.org</a>: The official plugin website. </li>
<li><a href=”https://www.youtube.com/channel/UCXPBsjgKKG2HqsKBhWA4uQw”>The AMP Channel</a> on YouTube</li>
<li><a href=”https://amphtml.slack.com”>AMP</a> on Slack</li>
<ul>


== Screenshots ==

1. Settings Screen
2. Example button

== Changelog ==

= 1.0 =
* Initial release


 

