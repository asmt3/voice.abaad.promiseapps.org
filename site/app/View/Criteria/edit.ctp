<div class="criteria form">
<?php echo $this->Form->create('Criterium'); ?>
	<fieldset>
		<legend><?php echo __('Edit Criterium'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Service');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Criterium.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Criterium.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Criteria'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
