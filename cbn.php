<html>
	<head>
		<?php 
			$time = date('Ymd',time()); 
			$hour = str_pad( (isset($_GET['h']) ? intval($_GET['h']) : intval(date('H',time())) - 1), 2, '0');
			$url = "http://download.sgr.globo.com/sgr-mp3/audiolog/CBN-SP/CBN-SP_$time-$hour.mp3";
		?>
		<title>CBN</title>
	</head>
	<body>
		<p>Playing <b><?php echo $url; ?></b></p>
		<iframe src="<?php echo $url ?>"></iframe>
	</body>
</html>