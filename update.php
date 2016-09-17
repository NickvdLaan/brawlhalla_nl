<?php
	$commands = array(
		'git pull',
		'git status'
	);
	// Run the commands for output
	$output = '';
	foreach($commands AS $command){
		// Run it
		$tmp = shell_exec($command);
		// Output
		$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
		$output .= htmlentities(trim($tmp)) . "\n";
	}
	// Make it pretty for manual user access (and why not?)
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GIT Harry Acker SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
	<?php if ($_SERVER['REQUEST_METHOD'] === 'GET'):
		include('autodeploy_hacker.php');
	else: ?>
		<pre>
		 <?=$output?>
		</pre>
	<?php endif; ?>
</body>
</html>
