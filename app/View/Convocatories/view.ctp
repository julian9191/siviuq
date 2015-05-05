<div class="convocatories view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Convocatoria'); ?></h1>
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
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar convocatoria'), array('action' => 'edit', $convocatory['Convocatory']['id']), array('escape' => false)); ?> </li>
							<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar convocatoria'), array('action' => 'delete', $convocatory['Convocatory']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $convocatory['Convocatory']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar convocatorias'), array('action' => 'index'), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Crear convocatoria'), array('action' => 'add'), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar proyectos'), array('controller' => 'projects', 'action' => 'projectsConvocatory', $convocatory['Convocatory']['id']), array('escape' => false)); ?> </li>

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
							<?php echo h($convocatory['Convocatory']['id']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Nombre'); ?></th>
						<td>
							<?php echo h($convocatory['Convocatory']['name']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de apertura'); ?></th>
						<td>
							<?php echo h($convocatory['Convocatory']['opening_date']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de cierre'); ?></th>
						<td>
							<?php echo h($convocatory['Convocatory']['closing_date']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Descripción'); ?></th>
						<td>
							<?php echo h($convocatory['Convocatory']['description']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Archivo'); ?></th>
						<td>
							<?php echo $this->Html->link($convocatory['Convocatory']['file_name'], array('action'=>'download', $convocatory['Convocatory']['id']), array('target' => '_blank', 'download' => $convocatory['Convocatory']['file_name'])); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de creación'); ?></th>
						<td>
							<?php echo h($convocatory['Convocatory']['created']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de modificación'); ?></th>
						<td>
							<?php echo h($convocatory['Convocatory']['modified']); ?>
							&nbsp;
						</td>
					</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>
