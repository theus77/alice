<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __('Petite Alice');
?>	
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site web de la petite Alice">
    <meta name="author" content="Mathieu De Keyzer">
    
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	
	
	
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('styles');

		echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
	
	<?php 
		echo $this->Html->script('bower/jquery/dist/jquery');
	    echo $this->Html->script('bower/bootstrap-sass/assets/javascripts/bootstrap');
	?>
	
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <?php echo $this->Html->link($cakeDescription, '/', array('class'=>'navbar-brand')); ?>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-picture"></span> <?php echo __('Galeries photos'); ?> <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><?php echo $this->Html->link(__('Alice 4 ans/jaar'), array('controller'=>'aperture', 'action'=> 'galerie', '5V6iUOGfTKuKGGsxbEAvFQ')); ?></li>
   	            <li><?php echo $this->Html->link(__('Alice 4 jaar op school'), array('controller'=>'aperture', 'action'=> 'galerie', 'UsJx+J2MQ56gXRzMTCI1Hw')); ?></li>
      	      </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


	<div id="container">
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	

</body>
</html>
