<div class="projectStates view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Estado de los proyectos de investigación'); ?></h1>
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
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar estado'), array('action' => 'edit', $projectState['ProjectState']['id']), array('escape' => false)); ?> </li>
							<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar estado'), array('action' => 'delete', $projectState['ProjectState']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $projectState['ProjectState']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar estados'), array('action' => 'index'), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Crear estado'), array('action' => 'add'), array('escape' => false)); ?> </li>

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
							<?php echo h($projectState['ProjectState']['id']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Nombre'); ?></th>
						<td>
							<?php echo h($projectState['ProjectState']['name']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de creación'); ?></th>
						<td>
							<?php echo h($projectState['ProjectState']['created']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de modificación'); ?></th>
						<td>
							<?php echo h($projectState['ProjectState']['modified']); ?>
							&nbsp;
						</td>
					</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>


