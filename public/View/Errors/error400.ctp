<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>
<h2><?php echo __('Adresse indisponible'); ?></h2>
<p class="error">
	<strong><?php echo __d('cake', 'Erreur'); ?>: </strong>
	<?php printf(
		__d('cake', 'L\'url demandée n\'a pas pu être traitée: %s. Retour à la %s.'),
		"<strong>'{$url}'</strong>",
		$this->Html->link('page d\'accueil', '/')
	); 
		e	
	?>
</p>
<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>
