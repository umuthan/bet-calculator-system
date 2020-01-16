<?php
// create bet calculator system plugin settings menu
add_action('admin_menu', 'bet_calculator_system_create_menu');

function bet_calculator_system_create_menu() {

	//add setting page to plugins menu
	add_options_page(
		__( 'Bet Calculator System Settings', 'bet-calculator-system' ),
		__( 'Bet Calculator System Settings', 'bet-calculator-system' ),
		'manage_options',
		'bet-calculator-system',
		'bet_calculator_system_settings_page'
	);

	//call register settings function
	add_action( 'admin_init', 'bet_calculator_system_register_settings' );
}


function bet_calculator_system_register_settings() {
	//register Bet Calculator System settings
	register_setting( 'bet-calculator-system-settings-group', 'bet_calculator_system_x_rapidapi_host' );
	register_setting( 'bet-calculator-system-settings-group', 'bet_calculator_system_x_rapidapi_key' );
}

function bet_calculator_system_settings_page() {
?>
<div class="wrap">
<h1><?php echo __('Bet Calculator System', 'bet-calculator-system'); ?></h1>

<form method="post" action="options.php">
	<ul>
		<li><?php echo __('Go to https://rapidapi.com/theoddsapi/api/live-sports-odds', 'bet-calculator-system'); ?></li>
		<li><?php echo __('Get your X-RapidAPI-Host and X-RapidAPI-Key', 'bet-calculator-system'); ?></li>
		<li><?php echo __('Paste your credits to this page.', 'bet-calculator-system'); ?></li>
	</ul>
	<?php settings_fields( 'bet-calculator-system-settings-group' ); ?>
	<?php do_settings_sections( 'bet-calculator-system-settings-group' ); ?>
	<table class="form-table">
	    <tr valign="top">
	    <th scope="row"><?php echo __('X-RapidAPI-Host', 'bet-calculator-system'); ?></th>
	    <td><input type="text" name="bet_calculator_system_x_rapidapi_host" value="<?php echo esc_attr( get_option('bet_calculator_system_x_rapidapi_host') ); ?>" /></td>
	    </tr>
			<tr valign="top">
	    <th scope="row"><?php echo __('X-RapidAPI-Key', 'bet-calculator-system'); ?></th>
	    <td><input type="text" name="bet_calculator_system_x_rapidapi_key" value="<?php echo esc_attr( get_option('bet_calculator_system_x_rapidapi_key') ); ?>" /></td>
	    </tr>
	</table>

	<?php submit_button(); ?>

</form>
</div>
<?php } ?>
