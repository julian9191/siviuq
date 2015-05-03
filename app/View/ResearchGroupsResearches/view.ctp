<div class="researchGroupsResearches view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Investigadores del grupo de investigación'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar'), array('action' => 'edit', $researchGroupsResearch['ResearchGroupsResearch']['id'], $idResearchGroup), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $researchGroupsResearch['ResearchGroupsResearch']['id'], $idResearchGroup), array('escape' => false), __('Are you sure you want to delete # %s?', $researchGroupsResearch['ResearchGroupsResearch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar'), array('action' => 'index', $idResearchGroup), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Crear'), array('action' => 'add', $idResearchGroup), array('escape' => false)); ?> </li>
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
			<?php echo h($researchGroupsResearch['ResearchGroupsResearch']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Researche'); ?></th>
		<td>
			<?php echo $this->Html->link($researchGroupsResearch['Research']['id'], array('controller' => 'researches', 'action' => 'view', $researchGroupsResearch['Research']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Research Group'); ?></th>
		<td>
			<?php echo $this->Html->link($researchGroupsResearch['ResearchGroup']['name'], array('controller' => 'research_groups', 'action' => 'view', $researchGroupsResearch['ResearchGroup']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($researchGroupsResearch['ResearchGroupsResearch']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($researchGroupsResearch['ResearchGroupsResearch']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

