<div class="research view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Research'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Research'), array('action' => 'edit', $research['Research']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Research'), array('action' => 'delete', $research['Research']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $research['Research']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Research'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Research'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Projects'), array('controller' => 'projects', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Project'), array('controller' => 'projects', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Research Groups'), array('controller' => 'research_groups', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Research Group'), array('controller' => 'research_groups', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($research['Research']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo $this->Html->link($research['User']['id'], array('controller' => 'users', 'action' => 'view', $research['User']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($research['Research']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($research['Research']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($research['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Resume'); ?></th>
		<th><?php echo __('Summary'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Budget'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Project State Id'); ?></th>
		<th><?php echo __('Investigation Line Id'); ?></th>
		<th><?php echo __('Convocatory Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($research['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['resume']; ?></td>
			<td><?php echo $project['summary']; ?></td>
			<td><?php echo $project['created']; ?></td>
			<td><?php echo $project['modified']; ?></td>
			<td><?php echo $project['budget']; ?></td>
			<td><?php echo $project['start_date']; ?></td>
			<td><?php echo $project['end_date']; ?></td>
			<td><?php echo $project['project_state_id']; ?></td>
			<td><?php echo $project['investigation_line_id']; ?></td>
			<td><?php echo $project['convocatory_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'projects', 'action' => 'view', $project['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'projects', 'action' => 'edit', $project['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'projects', 'action' => 'delete', $project['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Project'), array('controller' => 'projects', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Research Groups'); ?></h3>
	<?php if (!empty($research['ResearchGroup'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Colciencias Code'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Program Id'); ?></th>
		<th><?php echo __('Research Groups Category Id'); ?></th>
		<th><?php echo __('Research Groups Type Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($research['ResearchGroup'] as $researchGroup): ?>
		<tr>
			<td><?php echo $researchGroup['id']; ?></td>
			<td><?php echo $researchGroup['name']; ?></td>
			<td><?php echo $researchGroup['colciencias_code']; ?></td>
			<td><?php echo $researchGroup['email']; ?></td>
			<td><?php echo $researchGroup['created']; ?></td>
			<td><?php echo $researchGroup['modified']; ?></td>
			<td><?php echo $researchGroup['program_id']; ?></td>
			<td><?php echo $researchGroup['research_groups_category_id']; ?></td>
			<td><?php echo $researchGroup['research_groups_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'research_groups', 'action' => 'view', $researchGroup['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'research_groups', 'action' => 'edit', $researchGroup['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'research_groups', 'action' => 'delete', $researchGroup['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $researchGroup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Research Group'), array('controller' => 'research_groups', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
