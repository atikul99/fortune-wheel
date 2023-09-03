
<h1>Welcome to Fortune Wheel</h1>
<p>Update or make change any settings of the plugin</p>

<div class="wrap">
	<?php settings_errors(); ?>

	<form method="post" action="options.php">
		<?php

		settings_fields("header_section");

		do_settings_sections("welcome-page");

		submit_button('Save Changes', 'primary', 'btnSubmit');

		?>

	</form>

</div>