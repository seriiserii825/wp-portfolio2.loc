<?php /**
 * Plugin Name: Опции страницы
 * Description: Плагин добавляет опцию на страницу настроек
 */

add_action( 'admin_menu', 'wfm_admin_menu_cb');
add_action('admin_init', 'wfm_admin_settings');

function wfm_admin_settings(){
    register_setting( 'wfm_options_group', 'wfm_options_page' );

    add_settings_section( 'wfm_options_section_id', 'Опции секции', '', 'wfm_options_page' );

    add_settings_field( 'wfm_options_admin_img', 'Изображение админа(url картинки)', 'wfm_options_admin_img_cb', 'wfm_options_page', 'wfm_options_section_id', ['label_for' => 'wfm_options_admin_img'] );
}

function wfm_options_admin_img_cb(){
    $options = get_option('wfm_options_page');

    ?>
        <input type="text" name="wfm_options_page[wfm_options_admin_img]" id="wfm_options_admin_img" class="regular-text" value="<?php echo $options['wfm_options_admin_img']; ?>">
    <?php
} 

function wfm_admin_menu_cb(){
    //add_options_page( 'Опции страницы', 'Опции темы', 'manage_options', 'wfm_options_page', 'wfm_options_page_cb' );
    add_menu_page( 'Опции меню', 'Опции темы', 'manage_options', 'wfm_options_page', 'wfm_options_page_cb');
}

function wfm_options_page_cb(){
    ?>
        <div class="wrap">
            <h2>Опции страницы</h2>
            <form action="options.php" method="post">
                <?php settings_fields( 'wfm_options_group' ); ?>
                <?php do_settings_sections( 'wfm_options_page' ); ?>

                <?php submit_button(); ?>
            </form>
        </div>
    <?php
}
