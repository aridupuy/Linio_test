<?php
include_once "loader.php";
$application = new Application();
$lista=$application->run();
echo $lista->to_string();
?>
