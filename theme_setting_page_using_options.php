<?php
/* For more information please refer to https://codex.wordpress.org/Creating_Options_Pages */

/*******************************

  THEME OPTIONS PAGE

********************************/


add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

function theme_options_init(){
	register_setting( 'mandyoptions', 'mandytheme_options');
}

function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'mandytheme' ), __( 'Theme Options', 'mandytheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
function theme_options_do_page() { global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
?>
    <div>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/admin/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/admin/css/animate.min.css " />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/admin/css/admin.css" />

        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/admin/js/easyResponsiveTabs.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/admin/js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/admin/js/tabs.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.custom_media_upload').click(function() {
                    var send_attachment_bkp = wp.media.editor.send.attachment;
                    var button = $(this);
                    wp.media.editor.send.attachment = function(props, attachment) {
                        $(button).prev().prev().attr('src', attachment.url);
                        $(button).prev().val(attachment.url);
                        wp.media.editor.send.attachment = send_attachment_bkp;
                    }
                    wp.media.editor.open(button);
                    return false;
                });
            });

        </script>
        <?php
			if(function_exists( 'wp_enqueue_media' )){
				wp_enqueue_media();
			}else{
				wp_enqueue_style('thickbox');
				wp_enqueue_script('media-upload');
				wp_enqueue_script('thickbox');
			}
		?>
            <?php screen_icon(); echo "<h1>". __( 'Theme Options', 'mandytheme' ) . "</h1>"; ?>
            <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div class="settings-updated">
                <p><strong><?php _e( 'Options saved', 'mandytheme' ); ?></strong></p>
            </div>
            <?php endif; ?>

            <form method="post" action="options.php">
                <?php settings_fields( 'mandyoptions' ); ?>
                <?php $options = get_option( 'mandytheme_options' ); ?>
                <div class="VerticalTab VerticalTab_hash_scroll VerticalTab_6 tabs_ver_6">
                    <ul class="resp-tabs-list hor_1">
                        <li class="tabs-1" data-tab-name="general-setting"><i class="fc_icons fa fa-tasks"></i> <span class="tabs-text">General Settings</span></li>
                        <li class="tabs-2" data-tab-name="contact-setting"><i class="fc_icons fa fa-envelope"></i> <span class="tabs-text">Contact Settings</span></li>
                        <li class="tabs-3" data-tab-name="social-links"><i class="fc_icons fa fa-briefcase"></i> <span class="tabs-text">Social Links</span></li>

                    </ul>
                    <div class="resp-tabs-container hor_1">
                        <div class="fc-tab-1">
                            <h2 class="title_contanier">General Settings</h2>

                            <table>
                                <tr>
                                    <th>
                                        <?php _e( 'Change logo', 'mandytheme' ); ?>
                                    </th>
                                    <td><input class="regular-text custom_media_url" id="mandytheme_options[logo_img]" type="text" name="mandytheme_options[logo_img]" value="<?php esc_attr_e( $options['logo_img'] ); ?>">
                                        <a href="#" class="button custom_media_upload">Upload Logo</a>
                                </tr>
                                <?php if(isset($options['logo_img'] ) && !empty($options['logo_img'])) { ?>
                                <tr>
                                    <th></th>
                                    <td align="left"><img src="<?php echo $options['logo_img'] ?>" style="background:#f2f2f2; padding:5px;" /></td>
                                </tr>
                                <?php } ?>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Logo ALT Text', 'mandytheme' ); ?>
                                    </th>
                                    <td><input name="mandytheme_options[logo_alt]" type="text" id="mandytheme_options[logo_alt]" value="<?php esc_attr_e( $options['logo_alt'] ); ?>" class="regular-text" /></td>
                                </tr>
                                <!--Footer Logo-->
                                <tr>
                                    <th>
                                        <?php _e( 'Footer logo', 'mandytheme' ); ?>
                                    </th>
                                    <td><input class="regular-text custom_media_url" id="mandytheme_options[footer_logo_img]" type="text" name="mandytheme_options[footer_logo_img]" value="<?php esc_attr_e( $options['footer_logo_img'] ); ?>">
                                        <a href="#" class="button custom_media_upload">Upload Logo</a>
                                </tr>
                                <?php if(isset($options['footer_logo_img'] ) && !empty($options['footer_logo_img'])) { ?>
                                <tr>
                                    <th></th>
                                    <td align="left"><img src="<?php echo $options['footer_logo_img'] ?>" style="background:#f2f2f2; padding:5px;" /></td>
                                </tr>
                                <?php } ?>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Footer Logo ALT Text', 'mandytheme' ); ?>
                                    </th>
                                    <td><input name="mandytheme_options[footer_logo_alt]" type="text" id="mandytheme_options[footer_logo_alt]" value="<?php esc_attr_e( $options['footer_logo_alt'] ); ?>" class="regular-text" /></td>
                                </tr>

                                <tr>
                                    <th>
                                        <?php _e( 'Mobile logo', 'mandytheme' ); ?>
                                    </th>
                                    <td><input class="regular-text custom_media_url" id="mandytheme_options[mobile_logo_img]" type="text" name="mandytheme_options[mobile_logo_img]" value="<?php esc_attr_e( $options['mobile_logo_img'] ); ?>">
                                        <a href="#" class="button custom_media_upload">Upload Logo</a>
                                </tr>
                                <?php if(isset($options['mobile_logo_img'] ) && !empty($options['mobile_logo_img'])) { ?>
                                <tr>
                                    <th></th>
                                    <td align="left"><img src="<?php echo $options['mobile_logo_img'] ?>" style="background:#f2f2f2; padding:5px;" /></td>
                                </tr>
                                <?php } ?>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Mobile Logo ALT Text', 'mandytheme' ); ?>
                                    </th>
                                    <td><input name="mandytheme_options[logo_alt]" type="text" id="mandytheme_options[mobile_logo_alt]" value="<?php esc_attr_e( $options['mobile_logo_alt'] ); ?>" class="regular-text" /></td>
                                </tr>
                            </table>
                            <p><input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'mandytheme' ); ?>" /></p>
                        </div>
                        <div class="fc-tab-1">
                            <h2 class="title_contanier">Contact Settings</h2>
                            <table>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Contact Number', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[contact_number]" type="text" name="mandytheme_options[contact_number]" value="<?php esc_attr_e( $options['contact_number'] ); ?>" class="regular-text" />
                                        <strong>Tel:</strong>
                                        <input id="mandytheme_options[contact_number_tel]" type="text" name="mandytheme_options[contact_number_tel]" value="<?php esc_attr_e( $options['contact_number_tel'] ); ?>" class="regular-text" />
                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Contact Number2', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[contact_number2]" type="text" name="mandytheme_options[contact_number2]" value="<?php esc_attr_e( $options['contact_number2'] ); ?>" class="regular-text" />
                                        <strong>Tel:</strong>
                                        <input id="mandytheme_options[contact_number_tel2]" type="text" name="mandytheme_options[contact_number_tel2]" value="<?php esc_attr_e( $options['contact_number_tel2'] ); ?>" class="regular-text" />
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Contact Email', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[contact_email]" type="text" name="mandytheme_options[contact_email]" value="<?php esc_attr_e( $options['contact_email'] ); ?>" class="regular-text" />
                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Open Hours', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[open_hours]" type="text" name="mandytheme_options[open_hours]" value="<?php esc_attr_e( $options['open_hours'] ); ?>" class="regular-text" />
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Contact Address', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[contact_address]" type="text" name="mandytheme_options[contact_address]" value="<?php esc_attr_e( $options['contact_address'] ); ?>" class="regular-text" />
                                    </td>
                                </tr>
                            </table>
                            <p><input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'mandytheme' ); ?>" /></p>
                        </div>
                        <div class="fc-tab-1">
                            <h2 class="title_contanier">Social Links</h2>
                            <table>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Facebook URL', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[facebook_link]" type="text" name="mandytheme_options[facebook_link]" value="<?php esc_attr_e($options['facebook_link']); ?>" class="regular-text" />
                                        <label for="mandytheme_options[sometext]"><?php _e( 'https://facebook.com/yourprofileurl', 'mandytheme' ); ?></label>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Twitter URL', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[twitter_link]" type="text" name="mandytheme_options[twitter_link]" value="<?php esc_attr_e( $options['twitter_link'] ); ?>" class="regular-text" />
                                        <label for="mandytheme_options[sometext]"><?php _e( 'https://twitter.com/yourprofileurl', 'mandytheme' ); ?></label>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Pinterest URL', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[pinterest_link]" type="text" name="mandytheme_options[pinterest_link]" value="<?php esc_attr_e( $options['vimeo_link'] ); ?>" class="regular-text" />
                                        <label for="mandytheme_options[sometext]"><?php _e( 'https://pinterest.com/yourprofileurl', 'mandytheme' ); ?></label>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Skype URL', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[skype_link]" type="text" name="mandytheme_options[skype_link]" value="<?php esc_attr_e( $options['skype_link'] ); ?>" class="regular-text" />
                                        <label for="mandytheme_options[sometext]"><?php _e( 'https://skype.com/yourprofileurl', 'mandytheme' ); ?></label>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Linkedin URL', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[linkedin_link]" type="text" name="mandytheme_options[linkedin_link]" value="<?php esc_attr_e( $options['linkedin_link'] ); ?>" class="regular-text" />
                                        <label for="mandytheme_options[sometext]"><?php _e( 'https://linkedin.com/yourprofileurl', 'mandytheme' ); ?></label>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'YouTube URL', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[youtube_link]" type="text" name="mandytheme_options[youtube_link]" value="<?php esc_attr_e( $options['youtube_link'] ); ?>" class="regular-text" />
                                        <label for="mandytheme_options[sometext]"><?php _e( 'https://youtube.com/yourprofileurl', 'mandytheme' ); ?></label>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Instagram URL', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[instagram_link]" type="text" name="mandytheme_options[instagram_link]" value="<?php esc_attr_e( $options['instagram_link'] ); ?>" class="regular-text" />
                                        <label for="mandytheme_options[sometext]"><?php _e( 'https://instagram.com/yourprofileurl', 'mandytheme' ); ?></label>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Google Plus URL', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[gplus_link]" type="text" name="mandytheme_options[gplus_link]" value="<?php esc_attr_e( $options['gplus_link'] ); ?>" class="regular-text" />
                                        <label for="mandytheme_options[sometext]"><?php _e( 'https://google.com/yourprofileurl', 'mandytheme' ); ?></label>
                                    </td>
                                </tr>
                            </table>
                            <p><input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'mandytheme' ); ?>" /></p>
                        </div>

                        <div class="fc-tab-1">
                            <h2 class="title_contanier">Time Slots</h2>
                            <table>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Sales Email', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[contact_email2]" type="text" name="mandytheme_options[contact_email2]" value="<?php esc_attr_e( $options['contact_email2'] ); ?>" class="regular-text" />
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Time Slot', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[time_slot1]" type="text" name="mandytheme_options[time_slot1]" value="<?php esc_attr_e( $options['time_slot1'] ); ?>" class="regular-text" />
                                    </td>
                                    <th scope="row">
                                        <?php _e( 'Date', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[date1]" type="text" name="mandytheme_options[date1]" value="<?php esc_attr_e( $options['date1'] ); ?>" class="regular-text" />
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Time Slot', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[time_slot2]" type="text" name="mandytheme_options[time_slot2]" value="<?php esc_attr_e( $options['time_slot2'] ); ?>" class="regular-text" />
                                    </td>
                                    <th scope="row">
                                        <?php _e( 'Date', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[date2]" type="text" name="mandytheme_options[date2]" value="<?php esc_attr_e( $options['date2'] ); ?>" class="regular-text" />
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Time Slot', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[time_slot3]" type="text" name="mandytheme_options[time_slot3]" value="<?php esc_attr_e( $options['time_slot3'] ); ?>" class="regular-text" />
                                    </td>
                                    <th scope="row">
                                        <?php _e( 'Date', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[date13]" type="text" name="mandytheme_options[date3]" value="<?php esc_attr_e( $options['date3'] ); ?>" class="regular-text" />
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Time Slot', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[time_slot4]" type="text" name="mandytheme_options[time_slot4]" value="<?php esc_attr_e( $options['time_slot4'] ); ?>" class="regular-text" />
                                    </td>
                                    <th scope="row">
                                        <?php _e( 'Date', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[date4]" type="text" name="mandytheme_options[date4]" value="<?php esc_attr_e( $options['date4'] ); ?>" class="regular-text" />
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th scope="row">
                                        <?php _e( 'Time Slot', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[time_slot5]" type="text" name="mandytheme_options[time_slot5]" value="<?php esc_attr_e( $options['time_slot5'] ); ?>" class="regular-text" />
                                    </td>
                                    <th scope="row">
                                        <?php _e( 'Date', 'mandytheme' ); ?>
                                    </th>
                                    <td>
                                        <input id="mandytheme_options[date5]" type="text" name="mandytheme_options[date5]" value="<?php esc_attr_e( $options['date5'] ); ?>" class="regular-text" />
                                    </td>
                                </tr>
                            </table>
                            <p><input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'mandytheme' ); ?>" /></p>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    <?php }

