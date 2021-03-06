<?php
require_once('../../includes/utils.class.php');
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>imglnx - CONTACT</title>

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
						<li class="active"><a href="https://imglnx.com/p/contact">Contact</a></li>
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
						<div class="panel-heading">Contact</div>
						<div class="panel-body">
							<p>
								<ol>
									<li>Twitter: <a href="https://twitter.com/imglnx">@imglnx</a></li>
									<li>Email: <a href="mailto:contact@imglnx.com">contact@imglnx.com</a></li>
								</ol>
								For security issues please email via your client and use PGP.
							</p>
							<?php
								
								if (isset($_POST['send'])) {
									$email = filter_var(@$_POST['email'], FILTER_VALIDATE_EMAIL);
									$reason = htmlspecialchars(@$_POST['contact-reason']);
									$message = htmlspecialchars(@$_POST['message']);
									$code = htmlspecialchars(@$_POST['cap-code']);

									if (!empty($email) && !empty($message) && !empty($code)) {
										if ($code == $_SESSION['rand_code']) {
											if (mail("contact@imglnx.com", "imglnx.com - ".$reason, $message)) {
												print '<div class="alert alert-success" role="alert">Email sent! We\'ll get back to you within 24-48 hours. If we don\'t contact you within 48 hours please sent another email.</div>';
											} else {
												print '<div class="alert alert-danger" role="alert">Email sending failed! Please send again! If you\'re unable to contact us from this page please email us @ the email above.</div>';
											}
										} else {
											print '<div class="alert alert-danger" role="alert">Invalid Captcha!</div>';
										}
									} else {
										print '<div class="alert alert-danger" role="alert">Some field(s) are empty! Please fill all of them out!</div>';
									}
								}

								?>
							<br /><br />
							<form id="contactus" method="POST">
								<div class="form-group">
									<label for="email">Email Address</label> 
									<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
									<p class="help-block">Provide an email address that we can contact you with.</p>
								</div>

								<div class="form-group">
									<label for="contact-reason">Reason for Contact</label> 
									<select class="form-control" id="contact-reason" name="contact-reason" required>
										<option>Image Removal / DCMA</option>
										<option>Image Removal / Private Information Exposed</option>
										<option>Image Removal / Against ToS/US Law</option>
										<option>Image Removal / Other</option>
										<option>Feature Request</option>
										<option>Other</option>
									</select>
									<p class="help-block">Why are you contacting us?</p>
								</div>

								<div class="form-group">
									<label for="message">Message</label> 
									<textarea class="form-control" id="message" name="message" rows="3" required></textarea>
									<p class="help-block">Provide some information regarding why you're contacting us.</p>
								</div>

								<div class="form-group">
									<img src="https://imglnx.com/includes/captcha.php" /> <br /><br />
									<input class="form-control" id="cap-code" name="cap-code" placeholder="Captcha Code" type="text" required>
								</div>

								<button class="btn btn-success" type="submit" id="send" name="send">Submit</button>
							</form>
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
