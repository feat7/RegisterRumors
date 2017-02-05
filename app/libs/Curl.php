<?php

namespace app\libs;

/**
* @Package simple curl wrapper
* @Author Vinay Khobragade
*/
if(!extension_loaded("curl")) {
    die("cURL extension not loaded! Quit Now.");
}
class Curl
{
	public static function get($url)
	{
		// $curl is the handle of the resource
		$curl = curl_init();
		// set the URL and other options
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		// execute and pass the result to browser
		$ret = curl_exec($curl);
		// close the cURL resource
		curl_close($curl);
		return $ret;
	}
	public static function post($url, $postData)
	{
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
		$ret = curl_exec($curl);
		curl_close($curl);
		return $ret;
	}
}