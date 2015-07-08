<div class="w-nav nav" data-collapse="small" data-animation="default" data-duration="400" data-contain="1">
	<div class="w-container navcont">
		<nav class="w-nav-menu navmen" role="navigation">

		<?php echo $this->Html->link('Home',array('controller' => 'Nesaflow', 'action' => 'index'),array('class' => 'w-nav-link -wfp-hover navlinks')); ?>
		<?php echo $this->Html->link('Company profile',array('controller' => 'Nesaflow', 'action' => 'companyprofile'),array('class' => 'w-nav-link navlinks')); ?>
		<?php echo $this->Html->link('Products',array('controller' => 'Nesaflow', 'action' => 'products'),array('class' => 'w-nav-link navlinks')); ?>
		<?php echo $this->Html->link('Products Photo Gallery',array('controller' => 'Nesaflow', 'action' => 'photogal'),array('class' => 'w-nav-link navlinks')); ?>
		<?php echo $this->Html->link('Request a quote',array('controller' => 'Nesaflow', 'action' => 'quote'),array('class' => 'w-nav-link navlinks')); ?>
		<?php echo $this->Html->link('Contact Us',array('controller' => 'Nesaflow', 'action' => 'contact'),array('class' => 'w-nav-link navlinks')); ?>
		</nav>

		<div class="w-nav-button menu">
		<div class="w-icon-nav-menu icon-nav">
			
		</div>
		</div>
	</div>
</div>

