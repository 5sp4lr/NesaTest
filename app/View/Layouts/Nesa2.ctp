<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com--><!-- Last Published: Mon Jul 06 2015 13:05:19 GMT+0000 (UTC) -->
<html data-wf-site="5594b5e575e6d6d8119692ba" data-wf-page="5594b5e575e6d6d8119692bb" data-wf-status='1'>
	<head>
		<meta charset="utf-8">
		<title>Nesa</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Webflow">
		<?php
		echo $this->Html->css('Nesa');
		echo $this->Html->script('webfont');
		echo $this->Html->script('modernizr-2.7.1');
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('webflow.0ab');
		echo $this->Html->script('bootstrap.min');
		?>
		<script>WebFont.load({
	  	google: {
	    	families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
	  	}
		});
		</script>
		<!--<link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico">
		<link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">-->
	</head>

	<body>
	<div class="w-container maincon"> 
	<div class="wrapper"> 
		<?php echo $this->element('Header');?>
		<div class="w-section latter"> 
			<?php echo $this->element('Nav');?>
			<div class="content">
				<div class="w-row mainseperator">
					<div class="w-col w-col-8 w-col-stack left-column">
						<?php echo $this->element('Heading');?>
						<div class="pagecont" id="Content">
							<?php echo $this->Session->flash(); ?>

							<?php echo $this->fetch('content'); ?>
						</div>
					</div>
					<div class="w-col w-col-4 w-col-stack" id="Sidebar">
						<?php echo $this->element('RHeading'); ?>
						<?php echo $this->element('Right2'); ?>
						<?php echo $this->element('Right3'); ?>
					</div>
				</div>
			</div>
			<?php echo $this->element('Footer'); ?>
		</div>
	</div>
</div>
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>
