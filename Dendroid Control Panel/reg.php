<?php
include("configtemp.php");
$allowedDomains = array("www.".$serverHost, $serverHost);

if (in_array($_SERVER['HTTP_HOST'], $allowedDomains)) {
	$validDomain = "true";
} else {
	$validDomain = "false";
}
?>