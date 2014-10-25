<div class="villages view">
<h2><?php echo __('Village'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($village['Village']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo $this->Html->link($village['District']['name'], array('controller' => 'districts', 'action' => 'view', $village['District']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($village['Village']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Village'), array('action' => 'edit', $village['Village']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Village'), array('action' => 'delete', $village['Village']['id']), array(), __('Are you sure you want to delete # %s?', $village['Village']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Villages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Village'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Services'); ?></h3>
	<?php if (!empty($village['Service'])): ?>
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
	<?php foreach ($village['Service'] as $service): ?>
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
