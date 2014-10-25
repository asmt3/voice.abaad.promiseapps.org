<div class="districts view">
<h2><?php echo __('District'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($district['District']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Governate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($district['Governate']['name'], array('controller' => 'governates', 'action' => 'view', $district['Governate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($district['District']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit District'), array('action' => 'edit', $district['District']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete District'), array('action' => 'delete', $district['District']['id']), array(), __('Are you sure you want to delete # %s?', $district['District']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Governates'), array('controller' => 'governates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Governate'), array('controller' => 'governates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Villages'), array('controller' => 'villages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Village'), array('controller' => 'villages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Services'); ?></h3>
	<?php if (!empty($district['Service'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sector Id'); ?></th>
		<th><?php echo __('Governate Id'); ?></th>
		<th><?php echo __('District Id'); ?></th>
		<th><?php echo __('Village Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description Short'); ?></th>
		<th><?php echo __('Description Long'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Opening Hours'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($district['Service'] as $service): ?>
		<tr>
			<td><?php echo $service['id']; ?></td>
			<td><?php echo $service['sector_id']; ?></td>
			<td><?php echo $service['governate_id']; ?></td>
			<td><?php echo $service['district_id']; ?></td>
			<td><?php echo $service['village_id']; ?></td>
			<td><?php echo $service['name']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Villages'); ?></h3>
	<?php if (!empty($district['Village'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('District Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($district['Village'] as $village): ?>
		<tr>
			<td><?php echo $village['id']; ?></td>
			<td><?php echo $village['district_id']; ?></td>
			<td><?php echo $village['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'villages', 'action' => 'view', $village['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'villages', 'action' => 'edit', $village['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'villages', 'action' => 'delete', $village['id']), array(), __('Are you sure you want to delete # %s?', $village['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Village'), array('controller' => 'villages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
