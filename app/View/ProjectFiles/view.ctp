<div class="projectFiles view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Archivo del proyecto'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar archivo'), array('action' => 'edit', $projectFile['ProjectFile']['id'], $idProject), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar archivo'), array('action' => 'delete', $projectFile['ProjectFile']['id'], $idProject), array('escape' => false), __('Are you sure you want to delete # %s?', $projectFile['ProjectFile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar archivos'), array('action' => 'index', $idProject), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Crear archivo'), array('action' => 'add', $idProject), array('escape' => false)); ?> </li>
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
			<?php echo h($projectFile['ProjectFile']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($projectFile['ProjectFile']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('File'); ?></th>
		<td>
			<?php echo $this->Html->link($projectFile['ProjectFile']['file_name'], array('action'=>'download', $projectFile['ProjectFile']['id']), array('target' => '_blank', 'download' => $projectFile['ProjectFile']['file_name'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($projectFile['ProjectFile']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($projectFile['ProjectFile']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Project File Type'); ?></th>
		<td>
			<?php echo $this->Html->link($projectFile['ProjectFileType']['name'], array('controller' => 'project_file_types', 'action' => 'view', $projectFile['ProjectFileType']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Project'); ?></th>
		<td>
			<?php echo $this->Html->link($projectFile['Project']['id'], array('controller' => 'projects', 'action' => 'view', $projectFile['Project']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

