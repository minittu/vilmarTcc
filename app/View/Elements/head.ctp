<head>
	<?php echo $this->Html->charset(); ?>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>

		<?php echo $title_for_layout; ?>
	</title>
	<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('bootstrap');
	echo $this->Html->css('sb-admin');
	echo $this->Html->css('morris');
	echo $this->Html->css('font-awesome.min');
	echo $this->Html->css('jquery-ui.min');
	echo $this->Html->css('historico-add');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->Html->script('jquery-2.1.1.min');
	echo $this->Html->script('jquery-ui.min');  
	echo $this->Html->script('bootstrap'); 
	echo $this->Html->script('base'); 
	echo $this->Html->script('ajaxSalvaPaciente');
	echo $this->Html->script('sketch');
	echo $this->fetch('script'); 

	?>
</head>