<div class="services view">
<h2><?php echo h($service['Service']['name']); ?></h2>
<div class="edit-btn">
	<?php if(AuthComponent::user()): ?>
<?php echo $this->Html->link(__('Edit Service'), array('action' => 'edit', $service['Service']['id']), array('class' => 'btn btn-default')); ?>
<?php endif; //(AuthComponent::user()): ?>

</div>
	<dl class="dl-horizontal">
		
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($service['Service']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description Short'); ?></dt>
		<dd>
			<?php echo h($service['Service']['description_short']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description Long'); ?></dt>
		<dd>
			<?php echo h($service['Service']['description_long']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo h($service['Sector']['name']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Governate'); ?></dt>
		<dd>
			<?php echo h($service['Governate']['name']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($service['District']['name']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Village'); ?></dt>
		<dd>
			<?php echo h($service['Village']['name']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($service['Service']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($service['Service']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($service['Service']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opening Hours'); ?></dt>
		<dd>
			<?php echo h($service['Service']['opening_hours']); ?>
			&nbsp;
		</dd>
	</dl>

	<h3>Give feedback on this service</h3>


<ul class="comments">
<?php foreach($service['Comment'] as $comment): ?>

	<li>
			<p><? echo h($comment['content']) ?></p> 
	</li>

<?php endforeach; //($service['Comment'] as $comment): ?>
</ul>



	<?php echo $this->Form->create('Comment', array(
		'action' => 'add',
		'class' => 'form-horizontal'
	)); ?>


	<?php echo $this->Form->input('service_id', array(
		'type' => 'hidden',
		'value' => $service['Service']['id']
	)); ?>
	<?php echo $this->Form->input('content', array('label' => false)); ?>

	<?php echo $this->Form->end(array(
		'label' => 'Post comment',
		'class' => 'btn btn-default'
	)); ?>

	

</div>
<div class="actions" style="display:none">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service'), array('action' => 'edit', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service'), array('action' => 'delete', $service['Service']['id']), array(), __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($service['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($service['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['service_id']; ?></td>
			<td><?php echo $comment['content']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array(), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Criteria'); ?></h3>
	<?php if (!empty($service['Criterium'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($service['Criterium'] as $criterium): ?>
		<tr>
			<td><?php echo $criterium['id']; ?></td>
			<td><?php echo $criterium['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'criteria', 'action' => 'view', $criterium['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'criteria', 'action' => 'edit', $criterium['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'criteria', 'action' => 'delete', $criterium['id']), array(), __('Are you sure you want to delete # %s?', $criterium['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Criterium'), array('controller' => 'criteria', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
