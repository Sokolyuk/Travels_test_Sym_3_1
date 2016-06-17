<?php

namespace Travels\ServiceBundle\Classes;

use Travels\ServiceBundle\Classes\XHRequesterInterface;


class XHRequesterImpl implements XHRequesterInterface
{

	/*
	 *	$url - URL
	 * 
	 *	result:
	 *		failure: false
	 *		success: json data
	 * 
	 */
    public function send($url)
    {
		try{
			$ch = curl_init();
			try{
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

				$result = curl_exec($ch);

				$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
				if ($code != 200 || empty($result))
					$result = false;

			}finally{
				curl_close($ch);
			}

			return $result;

		}catch(\Exception $e){
			error_log($e->getMessage());
			return false;
		}
    }
	
}
