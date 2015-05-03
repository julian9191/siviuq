<div class="projectsResearches view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Investigador del proyecto'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Acciones</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar'), array('action' => 'edit', $projectsResearch['ProjectsResearch']['id'], $idProject), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $projectsResearch['ProjectsResearch']['id'], $idProject), array('escape' => false), __('Are you sure you want to delete # %s?', $projectsResearch['ProjectsResearch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar'), array('action' => 'index', $idProject), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Crear'), array('action' => 'add', $idProject), array('escape' => false)); ?> </li>
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
			<?php echo h($projectsResearch['ProjectsResearch']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Researche'); ?></th>
		<td>
			<?php echo $this->Html->link($projectsResearch['Researche']['id'], array('controller' => 'researches', 'action' => 'view', $projectsResearch['Researche']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Project'); ?></th>
		<td>
			<?php echo $this->Html->link($projectsResearch['Project']['id'], array('controller' => 'projects', 'action' => 'view', $projectsResearch['Project']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Research Role'); ?></th>
		<td>
			<?php echo $this->Html->link($projectsResearch['ResearchRole']['name'], array('controller' => 'research_roles', 'action' => 'view', $projectsResearch['ResearchRole']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($projectsResearch['ProjectsResearch']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($projectsResearch['ProjectsResearch']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

