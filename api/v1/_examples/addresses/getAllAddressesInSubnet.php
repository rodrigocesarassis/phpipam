<?php

/**
 * Sample API php client application
 *
 * In this example we will fetch all IPs in subnet
 *
 *	http://phpipam/api/client/getSubnetById.php?id=3
 */

# config
include_once('../apiConfig.php');

# API caller class
include_once('../apiClient.php');

# commands
$req['controller'] 	= "addresses";
$req['action']		= "read";
$req['format']		= "ip";
$req['subnetId']	= 1;

# wrap in try to catch exceptions
try {
	# initialize API caller
	$apicaller = new ApiCaller($app['id'], $app['enc'], $url, $format);
	# send request
	$response = $apicaller->sendRequest($req);

	print "<pre>";
	print_r($response);
}
catch( Exception $e ) {
	//catch any exceptions and report the problem
	print "Error: ".$e->getMessage();
}

?>