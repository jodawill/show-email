<?php
/**
* Plugin Name: Show Email
* Plugin URI: https://github.com/jodawill/show-email
* Description: Show email addresses in BBPress
* Version: 0.01
* Author: Josh Williams
* Author http://jodawill.com
* License: GPL2
*/

function se_display_email() {
 $user_id = bbp_get_reply_author_id(bbp_get_reply_id());
 $user_info = get_userdata($user_id);
 echo "<br/><a href='mailto:$user_info->user_email'>email</a>";
} add_filter('bbp_theme_after_reply_author_details', 'se_display_email');
?>
