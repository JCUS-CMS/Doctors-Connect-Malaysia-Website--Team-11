# PHP Code for the Github Webhook
<?php
$output=shell_exec('sh test_script.sh'); # Runs the bash script
echo $output;
?>
