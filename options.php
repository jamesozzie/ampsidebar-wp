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
    <h1>AMP Sidebar</h1>
    This plugin places a simple back to top buttton on the footer of your site. It's a CSS only solution, no bloatware here! <br>
    <i>If you're using the <a href="https://wordpress.org/plugins/amp/">official AMP plugin</a> you can use the options below to display the button on your AMP URLs, your non AMP URLs or both. </i>
<form method="post" action="options.php">
    <?php
    settings_fields('jozz-ampsidebar-settings');
    settings_fields('jozz-ampsidebar-settings');
    ?>
     <table class="form-table">
          <tr> <th><label for="ampsidebar_color">Button Color</label></th>
        <td>
        <div class="pagebox">
                <input class="color_field" type="text" name="ampsidebar_color" data-default-color="<?= esc_attr(
                    get_option('ampsidebar_color')
                ) ?>" value="<?= esc_attr(get_option('ampsidebar_color')) ?>"/>
        </div>
        </td>
        </tr>
 




        <tr> <th><label for="jz_ampsidebar_mobiledisplay">Device display options</label></th>
        <td>
        <select name="jz_ampsidebar_mobiledisplay">
            <option value='<?= esc_attr(
                get_option('jz_ampsidebar_mobiledisplay')
            ) ?>' selected><?= esc_attr(get_option('jz_ampsidebar_mobiledisplay')) ?></option>
            <option value='Mobile only'>Mobile only</option>
            <option value='Mobile & Desktop'>Mobile & Desktop</option>
        </select>
        </td>
        </tr>




        <tr> <th><label for="jz_ampsidebar_viewoption">AMP display options</label></th>
        <td>
        <select name="jz_ampsidebar_viewoption">
            <option value='<?= esc_attr(
                get_option('jz_ampsidebar_viewoption')
            ) ?>' selected><?= esc_attr(get_option('jz_ampsidebar_viewoption')) ?></option>
            <option value='AMP only'>AMP only</option>
            <option value='Canonical only'>Canonical only</option>
            <option value='AMP & Canonical'>AMP & Canonical</option>
        </select>
        </td>
        </tr>



        <br>
    </table>
    <?php submit_button(); ?>
</form>
</div>
  <?php
}
