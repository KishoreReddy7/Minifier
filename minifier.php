<?php
	
	function minifyJS($arr){
		minify($arr, 'https://javascript-minifier.com/raw');
	}
	
	function minifyCSS($arr){
		minify($arr, 'https://cssminifier.com/raw');
	}
	
	function minify($arr, $url) {
		foreach ($arr as $key => $value) {
			$handler = fopen($value, 'w') or die("File <a href='" . $value . "'>" . $value . "</a> error!<br />");
			fwrite($handler, getMinified($url, file_get_contents($key)));
			fclose($handler);
			echo "File <a href='" . $value . "'>" . $value . "</a> done!<br />";
		}
	}
	
	function getMinified($url, $content) {
		$postdata = array('http' => array(
	        'method'  => 'POST',
	        'header'  => 'Content-type: application/x-www-form-urlencoded',
	        'content' => http_build_query( array('input' => $content) ) ) );
		return file_get_contents($url, false, stream_context_create($postdata));
	}
	
?>
