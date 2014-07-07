<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GalleryView - Default Demo</title>

<!-- First, add jQuery (and jQuery UI if using custom easing or animation -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>

<!-- Second, add the Timer and Easing plugins -->
<script type="text/javascript" src="../dist/js/jquery.timers.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Third, add the GalleryView Javascript and CSS files -->
<link type="text/css" rel="stylesheet" href="../dist/css/galleryview.min.css" />
<script type="text/javascript" src="../dist/js/jquery.galleryview.min.js"></script>

<!-- Lastly, call the galleryView() function on your unordered list(s) -->
<script type="text/javascript">
	jQuery(function(){
		jQuery('#myGallery').galleryView({

		panel_width: 696, 				//INT - width of gallery panel (in pixels)
		panel_height: 471, 				//INT - height of gallery panel (in pixels)
		panel_scale: 'fit', 			//STRING - cropping option for panel images (crop = scale image and fit to aspect ratio determined by panel_width and panel_height, fit = scale image and preserve original aspect ratio)
		overlay_opacity: 0.5
		});
	});
</script>
</head>
<body>
 

  <?php
$folder = 'images/';
$filetype = '*.*';
$files = glob($folder.$filetype);
$count = count($files);
echo '<ul id="myGallery">';
for ($i = 0; $i < $count; $i++) {
    echo '<li><img src="'.$files[$i].'" /></li>';
    echo substr($files[$i],strlen($folder),strpos($files[$i], '.')-strlen($folder));
    }
echo '</ul>';
?>
</body>