<?php $this->Html->script('services/search', array('inline' => false)); ?>
<script>
var governate_tree = <?php echo json_encode($governate_tree, true); ?>
</script>


<div class="filter">
	<h3><?php echo __('Filter Services'); ?></h3>
	<?php echo $this->Form->create('Service', array('type' => 'get')); ?>
	<fieldset>
	<?php
		echo $this->Form->input('action', array('type' => 'hidden', 'value' => 'search'));
		echo $this->Form->input('name', array('placeholder' => 'Search by name'));
		echo $this->Form->input('sector_id', array('empty' => '(choose)', 'value' => $sector_id));
		echo $this->Form->input('governate_id', array('empty' => '(choose)', 'value' => $governate_id));
		echo $this->Form->input('district_id', array('empty' => '(choose)', 'value' => $district_id));
		echo $this->Form->input('village_id', array('empty' => '(choose)', 'value' => $village_id));
		echo $this->Form->input('criterium_id', array('empty' => '(choose)', 'value' => $criterium_id));
	?>
	</fieldset>
<?php echo $this->Form->end(array(
	'label' => 'Filter',
	'class' => 'btn btn-default'
)); ?>
</div>


<div class="services results">
	


<? if (isset($services)): ?>
<h2><?php echo __('Services Found'); ?></h2>
<? if (count($services)): ?>

	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>
		<th>Name</th>
		<th>Sector</th>
		<th>Governate</th>
		<th>District</th>
		<th>Village</th>
		
		<th>Phone</th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($services as $service): ?>
	<tr>

		<td>
			
			<?php echo $this->Html->link($service['Service']['name'], array('controller' => 'services', 'action' => 'view', $service['Service']['id'])); ?>
		</td>
		<td><?php echo h($service['Sector']['name']); ?>&nbsp;</td>
		<td><?php echo h($service['Governate']['name']); ?>&nbsp;</td>
		<td><?php echo h($service['District']['name']); ?>&nbsp;</td>
		<td><?php echo h($service['Village']['name']); ?>&nbsp;</td>

		<td><?php echo h($service['Service']['phone']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $service['Service']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>


<? else: // (count($services)): ?>
<p>No services found</p>

<? endif; // (count($services)): ?>


<? endif; // (isset($services)): ?>


</div>

