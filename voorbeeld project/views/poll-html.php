<?php
	$dataGevonden = isset( $pollData );
	if( $dataGevonden === false )
	{
		trigger_error( 'views/poll-html.php noodzaakt een $pollData object' );
	}
	return "
	<div id='poll'>
		<h1>Poll resultaten</h1>
		<ul>
			<li>$pollData->ja mensen hebben ja gezegt</li>
			<li>$pollData->nee mensen hebben nee gezegt</li>
		</ul>
		<form method='post' action='index.php'>
			<h1>Poll vraag</h1>
			<p>$pollData->poll_vraag</p>
			<select name='user-input'>
				<option value='ja'>Ja, het is moeilijk!</option>
				<option value='nee'>Nee, niet echt!</option>
			</select>
			<input type='submit' value='post' />
		</form>
	</div> "; 
?>