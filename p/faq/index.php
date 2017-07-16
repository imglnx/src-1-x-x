<?php
require_once('../../includes/utils.class.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>imglnx - FAQ</title>

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
						<li class="active"><a href="https://imglnx.com/p/faq">FAQ</a></li>
						<li><a href="https://imglnx.com/p/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="content-container">
				<?php print file_get_contents('../../notify.txt'); ?>
				<img src="https://imglnx.com/assets/img/large.png" alt="imglnx" /><br />free, fast, secure, simple, image hosting
				<p style="padding-top: 10px;">
					<div class="panel panel-default">
						<div class="panel-heading">FAQ</div>
						<div class="panel-body">
							<h3>What is imglnx?</h3>
							<p>imglnx (pronounced as image lynx or image links) is a free image hosting service.</p>
							<h3>Can I use a VPN/Proxy/Tor?</h3>
							<p>Yes, we recommend that you do. Make sure to choose a VPN that's listed on <a href="https://torrentfreak.com/vpn-anonymous-review-160220/">TorrentFreak</a>, for the best VPN providers.</p>
							<h3>What information do you store?</h3>
							<p>Please check our <a href="/p/legal">Legal</a> page for more information.</p>
							<h3>What size and type of images can I upload?</h3>
							<p>Currently we support .jpeg/.jpg, .png, .tiff, .bmp, .ico, and .gif at a maximum file size of 100MB. We do not compress or alter your image when it's uploaded and stored.</p>
							<h3>API?</h3>
							<p>An API will be introduced in the future. Please check the <a href="/p/changelog.txt">roadmap</a> to see future features that we plan on implementing.</p>
							<h3>Do you delete images after x time?</h3>
							<p>Currently we do not delete any images unless they violate the <a href="/p/legal/">ToS</a>. However, in the future we plan on adding a feature to allow users to delete the images after x time.</p>
							<h3>Are you going to raise the file size from 100MB?</h3>
							<p>If everything goes well with the service, we'll eventually change the max size up to 200MB</p>
							<br /><br />
							<p>If you have any other questions, please <a href="/p/contact/">contact</a> us.</p>
						</div>
					</div>
				</p>
			</div>
		</div>

		<footer>
	        <p>
	        	imglnx v<a href="https://imglnx.com/p/changelog.txt"><?php print file_get_contents('../../ver.txt'); ?></a>
	        	<span class="pull-right">
	        		We're hosting <a href="/rand"><?php print ImglnxUtils::getFileCount('../../i/'); ?></a> images totaling at <?php print ImglnxUtils::humanFileSize(ImglnxUtils::getDirectorySize('../../i/')); ?>.
        		</span>	
	        </p>
		</footer>
	</body>
</html>
