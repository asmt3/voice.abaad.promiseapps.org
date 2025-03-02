<div class="districts index">
	<h2><?php echo __('Districts'); ?></h2>
	<table class="table table-striped" cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('governate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($districts as $district): ?>
	<tr>
		<td><?php echo h($district['District']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($district['Governate']['name'], array('controller' => 'governates', 'action' => 'view', $district['Governate']['id'])); ?>
		</td>
		<td><?php echo h($district['District']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $district['District']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $district['District']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $district['District']['id']), array(), __('Are you sure you want to delete # %s?', $district['District']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New District'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Governates'), array('controller' => 'governates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Governate'), array('controller' => 'governates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Villages'), array('controller' => 'villages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Village'), array('controller' => 'villages', 'action' => 'add')); ?> </li>
	</ul>
</div>
