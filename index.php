<?php 


error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require 'vendor/autoload.php';
require 'src/php/functions.inc.php'

$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {
	return 'XSQ Homepage';
});

$klein->respond('GET', '/[:address]', function ($request) {
	if (is_ip($request->address)) {
		return "Yes is IP: " . $request->address;
	} else {
		return "Not ip";
	}
});


$klein->dispatch();