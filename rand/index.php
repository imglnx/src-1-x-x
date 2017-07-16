<?php
require_once('../includes/utils.class.php');

$images = glob('../i/*.{jpeg,jpg,png,tiff,bmp,ico,gif}', GLOB_BRACE);
$img = $images[array_rand($images)];

?>
<!DOCTYPE html>
<html>
	<head>
		<title>imglnx - cats. memes. and everything else.</title>

		<!-- Meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="imglnx.com is an image service that allows users to upload images.">
		<meta name="keywords" content="imglnx, imglnx.com, imglnx com, image, images, video, videos, image hosting, img hosting, img, imgs, share, upload, uploading, uploader">

		<!-- Add the favicon to the page -->
		<link rel="shortcut icon" href="https://imglnx.com/assets/favicon.ico" type="image/x-icon">

		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		
		<!-- Custom CSS -->
		<link href="https://imglnx.com/assets/css/style.css" rel="stylesheet" />
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="https://imglnx.com/assets/img/small.png" alt="imglnx" /></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="https://imglnx.com/">Home</a></li>
						<li><a href="https://imglnx.com/p/about">About</a></li>
						<li><a href="https://imglnx.com/p/blog">Blog</a></li>
						<li><a href="https://imglnx.com/p/legal">Legal</a></li>
						<li><a href="https://imglnx.com/p/faq">FAQ</a></li>
						<li><a href="https://imglnx.com/p/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="content-container">
<div style="text-align: left;" class="alert alert-danger" role="alert">
<strong>Danger!</strong> Some of the images displayed here may be for 18+, please use caution!
</div>
				<img src="https://imglnx.com/assets/img/large.png" alt="imglnx" /><br />free, fast, secure, simple, image hosting
				<p style="padding-top: 10px;">
					<a href="https://imglnx.com/p/contact">Report</a> &nbsp; 
					<code><?php print substr($img, 5); ?></code> &nbsp;
					<a href="https://imglnx.com/i/<?php print substr($img, 5); ?>">Direct Link</a> &nbsp;
					Size <?php list($width, $height) = getimagesize($img); print $width.'x'.$height; ?>
				<?php 
					print '<div class="container"><img style="border: 1px solid #000;'.($width > 500 && $height > 500 ? 'width: 500px; height: 500px;' : '').'" src="'.$img.'" /></div>'; 
				?>
				</p>
			</div>
		</div>

		<footer>
	        <p>
	        	imglnx v<a href="https://imglnx.com/p/changelog.txt"><?php print file_get_contents('../ver.txt'); ?></a>
	        	<span class="pull-right">
	        		We're hosting <a href="/rand"><?php print ImglnxUtils::getFileCount('../i/'); ?></a> images totaling at <?php print ImglnxUtils::humanFileSize(ImglnxUtils::getDirectorySize('../i/')); ?>.
        		</span>	
	        </p>
		</footer>
	</body>
</html>
