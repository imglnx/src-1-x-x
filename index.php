<?php
require_once(__DIR__.'/includes/utils.class.php');
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
				<?php print file_get_contents('notify.txt'); ?>
				<img src="https://imglnx.com/assets/img/large.png" alt="imglnx" /><br />free, fast, secure, simple, image hosting
				<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
					<div id="drop">
						Drop Here<br />
						<a>Browse</a>
						<input type="file" name="images" multiple />
					</div>
					by using imglnx.com you agree to the <a href="https://imglnx.com/p/legal">Terms of Service</a>
				</form>

				<div id="uploads">
					<ul></ul>
				</div>
			</div>
		</div>

		<footer>
	        <p>
	        	imglnx v<a href="https://imglnx.com/p/changelog.txt"><?php print file_get_contents('ver.txt'); ?></a>
	        	<span class="pull-right">
	        		We're hosting <a href="/rand"><?php print ImglnxUtils::getFileCount('i/'); ?></a> images totaling at <?php print ImglnxUtils::humanFileSize(ImglnxUtils::getDirectorySize('i/')); ?>.
        		</span>	
	        </p>
		</footer>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
		<script src="https://imglnx.com/assets/js/jquery.ui.widget.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.iframe-transport/1.0.1/jquery.iframe-transport.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.14.1/js/jquery.fileupload.min.js"></script>
		
		<!-- Our main JS file -->
		<script src="https://imglnx.com/assets/js/script.js"></script>
	</body>
</html>
