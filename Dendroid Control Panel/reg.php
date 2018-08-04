<?php
$allowedDomains = array("www.ratciberseguridad.000webhostapp.com", "ratciberseguridad.000webhostapp.com");

if (in_array($_SERVER['HTTP_HOST'], $allowedDomains)) {
	$validDomain = "true";
} else {
	$validDomain = "false";
}
?>