<div class="researchGroups view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Grupo de investigación'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar grupo'), array('action' => 'edit', $researchGroup['ResearchGroup']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar grupo'), array('action' => 'delete', $researchGroup['ResearchGroup']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $researchGroup['ResearchGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar grupos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Crear grupo'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Investigadores del grupo'), array('controller' => 'researchGroupsResearches', 'action' => 'index', $researchGroup['ResearchGroup']['id']), array('escape' => false)); ?> </li>
		
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
			<?php echo h($researchGroup['ResearchGroup']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($researchGroup['ResearchGroup']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Colciencias Code'); ?></th>
		<td>
			<?php echo h($researchGroup['ResearchGroup']['colciencias_code']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($researchGroup['ResearchGroup']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($researchGroup['ResearchGroup']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($researchGroup['ResearchGroup']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Program'); ?></th>
		<td>
			<?php echo $this->Html->link($researchGroup['Program']['name'], array('controller' => 'programs', 'action' => 'view', $researchGroup['Program']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Research Groups Category'); ?></th>
		<td>
			<?php echo $this->Html->link($researchGroup['ResearchGroupsCategory']['name'], array('controller' => 'research_groups_categories', 'action' => 'view', $researchGroup['ResearchGroupsCategory']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Research Groups Type'); ?></th>
		<td>
			<?php echo $this->Html->link($researchGroup['ResearchGroupsType']['name'], array('controller' => 'research_groups_types', 'action' => 'view', $researchGroup['ResearchGroupsType']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

