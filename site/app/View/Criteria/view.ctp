<div class="criteria view">
<h2><?php echo __('Criterium'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($criterium['Criterium']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($criterium['Criterium']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Criterium'), array('action' => 'edit', $criterium['Criterium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Criterium'), array('action' => 'delete', $criterium['Criterium']['id']), array(), __('Are you sure you want to delete # %s?', $criterium['Criterium']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Criteria'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterium'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Services'); ?></h3>
	<?php if (!empty($criterium['Service'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sector Id'); ?></th>
		<th><?php echo __('Governate Id'); ?></th>
		<th><?php echo __('District Id'); ?></th>
		<th><?php echo __('Village Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description Short'); ?></th>
		<th><?php echo __('Description Long'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Opening Hours'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($criterium['Service'] as $service): ?>
		<tr>
			<td><?php echo $service['id']; ?></td>
			<td><?php echo $service['sector_id']; ?></td>
			<td><?php echo $service['governate_id']; ?></td>
			<td><?php echo $service['district_id']; ?></td>
			<td><?php echo $service['village_id']; ?></td>
			<td><?php echo $service['title']; ?></td>
			<td><?php echo $service['description_short']; ?></td>
			<td><?php echo $service['description_long']; ?></td>
			<td><?php echo $service['phone']; ?></td>
			<td><?php echo $service['email']; ?></td>
			<td><?php echo $service['address']; ?></td>
			<td><?php echo $service['opening_hours']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'services', 'action' => 'view', $service['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'services', 'action' => 'edit', $service['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'services', 'action' => 'delete', $service['id']), array(), __('Are you sure you want to delete # %s?', $service['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
