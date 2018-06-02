<?php
	function Send($url,$postData = null)
	{
		global $XsrfToken;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		
		
		if(isset($postData))
		{
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
		}

		$html = curl_exec ($ch);
				
		curl_close($ch);
		return $html;
	}
    echo Send('{\n"image": "http://thecatapi.com/api/images/get?format=src&type=gif"\n}');
?>
