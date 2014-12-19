<div class="services form">
<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<legend><?php echo __('Edit Service'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sector_id');
		echo $this->Form->input('governate_id');
		echo $this->Form->input('district_id');
		echo $this->Form->input('village_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description_short');
		echo $this->Form->input('description_long');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('address');
		echo $this->Form->input('opening_hours');
		echo $this->Form->input('Criterium', array('label' => 'Criteria', 'multiple' => 'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(array(
	'label' => 'Save Changes',
	'class' => 'btn btn-default'
)); ?>
</div>
<div class="actions" style="display:none">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Service.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Service.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Governates'), array('controller' => 'governates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Governate'), array('controller' => 'governates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Villages'), array('controller' => 'villages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Village'), array('controller' => 'villages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Criteria'), array('controller' => 'criteria', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterium'), array('controller' => 'criteria', 'action' => 'add')); ?> </li>
	</ul>
</div>
