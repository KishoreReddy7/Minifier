<body style="font-family: monospace;">
<?php
	include_once("minifier.php");
	
	$js = array(
		"../CSP/data/js/CoreShoppyJS.js" 			=> 	"../CSP/data/js/CoreShoppyJS.V1.min.js",
		"../CSP/data/js/style.js" 					=> 	"../CSP/data/js/style.V1.min.js",
	);
	
	$css = array(
		"../CSP/data/css/CoreShoppy.css"			=> 	"../CSP/data/css/CoreShoppy.V1.min.css",
		"../CSP/data/css/style.css"					=> 	"../CSP/data/css/style.V1.min.css"
	);
	
	minifyJS($js);
	minifyCSS($css);
?>
</body>
