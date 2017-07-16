<?php
require_once('../../includes/utils.class.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>imglnx - ABOUT</title>

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
						<li class="active"><a href="https://imglnx.com/p/about">About</a></li>
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
				<?php print file_get_contents('../../notify.txt'); ?>
				<img src="https://imglnx.com/assets/img/large.png" alt="imglnx" /><br />free, fast, secure, simple, image hosting
				<p style="padding-top: 10px;">
					<div class="panel panel-default">
						<div class="panel-heading">About</div>
						<div class="panel-body">
							<p>imglnx is a free image hosting service originally created in August 2013 then quickly disbanded has reformed in December 2016. <br />
							imglnx is working to become a widely used image host as most have too many rules or ads, we will <u>never</u> put ads on imglnx. <br />
							The more imglnx grows the more we'll continue to update the site with new features and new servers.<br /><br />
							Remember, we're not designers we're programmers. :)</p>
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
