<?php
require_once('../../includes/utils.class.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>imglnx - BLOG</title>

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
						<li class="active"><a href="https://imglnx.com/p/blog">Blog</a></li>
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
						<div class="panel-heading">Moved servers</div>
						<div class="panel-body">
							<p>Posted by admin <span class="pull-right">June 5, 2017 5:21 PM</span></p>
							<p>
							So we've finally moved to a server out of the US. We're still going to use Cloudflare to help mask the server and to help distribute content worldwide. As usual we don't log or track you in any way. We still delete server logs every 10 mins. <br />
							We also started development of the new version of imglnx. It's being written in Python/Django and will have more features than the current version. We hope to have a usable version by July 2017, but it can easily get extended.
							</p>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">Update 1.3 Released</div>
						<div class="panel-body">
							<p>Posted by admin <span class="pull-right">January 12, 2017 3:00 AM</span></p>
							<p>
							We decided to put up a 'blogish' page for the site so we can share information regarding imglnx.com. <br />
							For 1.3 release we've moved to a new dedicated host so performance isn't going to be an issue (not that it was anyway). We've also rolled out a contact page (the contact form) with our own captcha. (We made our own captcha so we can keep away from Google or other alternatives.)<br />
							We're also now doing daily backups (<3 cron) incase something were to go wrong. We've also fully encrypted the system (CentOS lv) so that'll increase protection of data. 
							</p>
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
