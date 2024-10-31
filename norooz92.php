<?php
/*
Plugin Name: شمارش معکوس تا سال 1392 شمسی    
Plugin URI: http://wordpress.org/extend/plugins/norooz92/
Description:نمایش لحظه شمار نوروز باستانی 1392 هجری شمسی در سایت  
Version: 1.0
Author: مهدی خاکسار
Author URI: http://www.progpars.com
License: progpars.com
*/
function norooz92()
{	
	echo'
	<div class="countdown" style="font:11px tahoma; direction:rtl">
	تا آغاز سال 1392 هجری شمسی
	<span style="font-weight:bold;" class="days">00</span>
	روز و
	 <span style="font-weight:bold;" class="hours">00</span>
	ساعت و 
	<span style="font-weight:bold;" class="minutes">00</span>
	دقیقه و <span class="seconds">00</span> ثانیه زمان مانده است
	</div>
	';
}

function jCounter()
{
	wp_enqueue_script('jquery');
	wp_register_script('jCounter',plugins_url('/jquery.jCounter.js', __FILE__));
	wp_enqueue_script('jCounter');
}
add_action('wp_enqueue_scripts','jCounter');

function JSnorooz92()
{
	wp_enqueue_script('jquery');
	wp_register_script('JSnorooz92',plugins_url('/norooz92.js', __FILE__));
	wp_enqueue_script('JSnorooz92');
}
add_action('wp_enqueue_scripts','JSnorooz92');

?>
