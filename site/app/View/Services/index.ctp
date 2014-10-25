<div class="services index">
	<h2><?php echo __('Services'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sector_id'); ?></th>
			<th><?php echo $this->Paginator->sort('governate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('district_id'); ?></th>
			<th><?php echo $this->Paginator->sort('village_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description_short'); ?></th>
			<th><?php echo $this->Paginator->sort('description_long'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('opening_hours'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($services as $service): ?>
	<tr>
		<td><?php echo h($service['Service']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($service['Sector']['name'], array('controller' => 'sectors', 'action' => 'view', $service['Sector']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($service['Governate']['name'], array('controller' => 'governates', 'action' => 'view', $service['Governate']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($service['District']['name'], array('controller' => 'districts', 'action' => 'view', $service['District']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($service['Village']['name'], array('controller' => 'villages', 'action' => 'view', $service['Village']['id'])); ?>
		</td>
		<td><?php echo h($service['Service']['name']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['description_short']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['description_long']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['phone']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['email']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['address']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['opening_hours']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $service['Service']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $service['Service']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $service['Service']['id']), array(), __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Governates'), array('controller' => 'governates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Governate'), array('controller' => 'governates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Villages'), array('controller' => 'villages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Village'), array('controller' => 'villages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Criteria'), array('controller' => 'criteria', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterium'), array('controller' => 'criteria', 'action' => 'add')); ?> </li>
	</ul>
</div>
