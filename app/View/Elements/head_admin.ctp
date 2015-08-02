<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('sb-admin');
		echo $this->Html->css('morris');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('login');
		echo $this->Html->css('jquery-ui.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');		 

	?>
</head>