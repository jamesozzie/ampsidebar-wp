<?php
//show this settings page
function jozz_ampsidebar_custom_settings_start()
{
    ?>

<script>
        jQuery(document).ready(function($){
            $('.color_field').each(function(){
                $(this).wpColorPicker();
                });
        });
</script>

<div class="wrap jozz_adminwrap">
    <h1><?php _e('AMP Sidebar', 'amp-wp-sidebar'); ?></h1>

    <?php _e('This plugin will allow you to acheive a working multi level dropdown using the amp-sidebar component.', 'amp-wp-sidebar'); ?>
    <?php _e('Use the below, or the plugins', 'amp-wp-sidebar'); ?>
    <a href="https://plugins.wordpress.org/amp-sidebar-hamburger-menu" alt='<?php _e('Go to FAQ page') ?>'>
        <?php _e('FAQ\'s page', 'amp-wp-sidebar'); ?>
    </a> 
    <?php _e('for instructions on how it works.', 'amp-wp-sidebar'); ?>


    <p>
        <h4>
            <?php _e('Option 1', 'amp-wp-sidebar') ?> - 
            <?php _e('Add to your content using a shortcode:', 'amp-wp-sidebar') ?>
        </h4> 
        <?php _e('Insert the shortcode below into a page, post or widget.', 'amp-wp-sidebar'); ?>
    </p>
    <code>[jz-sidebar]</code>
    
    <p>
        <h4>
            <?php _e('Option 2', 'amp-wp-sidebar'); ?> - 
            <?php _e('Inserting into your theme files (via shortcode):', 'amp-wp-sidebar'); ?>
        </h4>
        <?php _e('An alternative option is to insert the following into your child theme files (after performing a backup)', 'amp-wp-sidebar'); ?>
    </p>
    <code>
        <?php echo htmlspecialchars("<?php echo do_shortcode('[jz-sidebar]'); ?>");?>
    </code> 

    <p>
        <h4>
            <?php _e('Option 3', 'amp-wp-sidebar'); ?> -  
            <?php _e('Use your existing navigation button / hamburger menu:', 'amp-wp-sidebar'); ?>
        </h4>
        <?php _e('If you prefer to use your existing navigation menus button simply add the following to your navigation button, as a data attribute (Between your button tag).', 'amp-wp-sidebar'); ?>
    </p>
    <p>
        <?php _e('You\'ll need to check with your theme developer for the location of the navigation menu:', 'amp-wp-sidebar'); ?>
    </p>

    <code>
        <?php echo htmlspecialchars("<?php echo do_shortcode('[jz-navbarattribute]'); ?>"); ?>
    </code>


    <p>
        <i><?php _e('* Please use a child theme for making any theme changes. Please also create a backup before editing any theme files! This plugin works best with the', 'amp-wp-sidebar'); ?> 
            <a href="https://wordpress.org/plugins/amp/">
                <?php _e('official AMP plugin', 'amp-wp-sidebar'); ?>
            </a>
        </i>
    </p>
 
    <form method="post" action="options.php">
        <?php
            settings_fields('jozz-ampsidebar-settings');
            settings_fields('jozz-ampsidebar-settings');
        ?>
        <table class="form-table">
            <tr>
                <th>
                    <label for="ampsidebar_color">
                        <?php _e('Button Color', 'amp-wp-sidebar'); ?>
                    </label>
                </th>
                <td>
                    <div class="pagebox">
                        <input class="color_field" type="text" 
                            name="ampsidebar_color" 
                            data-default-color="<?= esc_attr(get_option('ampsidebar_color')) ?>" 
                            value="<?= esc_attr(get_option('ampsidebar_color')) ?>"/>
                    </div>
                </td>
            </tr>
    
            <tr> 
                <th>
                    <label for="jz_ampsidebar_mobiledisplay">
                        <?php _e('Device display options', 'amp-wp-sidebar'); ?>
                    </label>
                </th>
                <td>
                    <select name="jz_ampsidebar_mobiledisplay"
                        id="jz_ampsidebar_mobiledisplay">
                        <option  selected
                            value="<?= esc_attr(get_option('jz_ampsidebar_mobiledisplay')) ?>">
                            <?= esc_attr(get_option('jz_ampsidebar_mobiledisplay')) ?>
                        </option>
                        <option value='<?php _e('Mobile only', 'amp-wp-sidebar'); ?>'>
                            <?php _e('Mobile only', 'amp-wp-sidebar'); ?>
                        </option>
                        <option value='<?php _e('Mobile & Desktop', 'amp-wp-sidebar'); ?>'>
                            <?php _e('Mobile & Desktop', 'amp-wp-sidebar'); ?>
                        </option>
                    </select>
                </td>
            </tr>

            <tr>
                <th>
                    <label for="jz_ampsidebar_viewoption">
                        <?php _e('AMP display options', 'amp-wp-sidebar'); ?>
                    </label>
                </th>
                <td>
                    <select name="jz_ampsidebar_viewoption"
                        id="jz_ampsidebar_viewoption">
                        <option selected
                            value='<?= esc_attr( get_option('jz_ampsidebar_viewoption')) ?>'>
                                <?= esc_attr(get_option('jz_ampsidebar_viewoption')) ?>
                        </option>
                        <option value='<?php _e('AMP only', 'amp-wp-sidebar'); ?>'>
                            <?php _e('AMP only', 'amp-wp-sidebar'); ?>
                        </option>
                        <option value='<?php _e('Canonical only', 'amp-wp-sidebar'); ?>'>
                            <?php _e('Canonical only', 'amp-wp-sidebar'); ?>
                        </option>
                        <option value='<?php _e('AMP & Canonical', 'amp-wp-sidebar'); ?>'>
                            <?php _e('AMP & Canonical', 'amp-wp-sidebar'); ?>
                        </option>
                    </select>
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
    <?php
}
