<?php
define( ‘CF7_COUNTER’, ‘cf7-counter’ );
function cf7dtx_counter(){
$val = get_option( CF7_COUNTER, 0) + 1; //Increment the current count
return $val;
}
add_shortcode(‘CF7_counter’, ‘cf7dtx_counter’);
//Action performed when the mail is actually sent by CF7
function cf7dtx_increment_mail_counter(){
$val = get_option( CF7_COUNTER, 0) + 1; //Increment the current count
update_option(CF7_COUNTER, $val); //Update the settings with the new count

}
add_action(‘wpcf7_mail_sent’, ‘cf7dtx_increment_mail_counter’);
?>
