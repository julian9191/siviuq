<div class="projects view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Proyecto'); ?></h1>
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
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Proyecto'), array('action' => 'edit', $project['Project']['id']), array('escape' => false)); ?> </li>
							<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar Proyecto'), array('action' => 'delete', $project['Project']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Proyectos'), array('action' => 'indexResearchProjects', $this->Session->read('User.id')), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Investigadores del proyecto'), array('controller' => 'projectsResearches', 'action' => 'index', $project['Project']['id']), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar archivos'), array('controller' => 'projectFiles', 'action' => 'index', $project['Project']['id']), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar productos del proyecto'), array('controller' => 'projectProducts', 'action' => 'index', 'action' => 'index', $project['Project']['id']), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar fechas de entrega'), array('controller' => 'deliveryDates', 'action' => 'index', $project['Project']['id']), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar evaluaciones'), array('controller' => 'projectEvaluations', 'action' => 'projectEvaluation', $project['Project']['id']), array('escape' => false)); ?> </li>
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
							<?php echo h($project['Project']['id']); ?>
							&nbsp;
						</td>
					</tr>
                    <tr>
						<th><?php echo __('Código'); ?></th>
						<td>
							<?php echo h($project['Project']['code']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Título'); ?></th>
						<td>
							<?php echo h($project['Project']['resume']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Resumen'); ?></th>
						<td>
							<?php echo h($project['Project']['summary']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de creación'); ?></th>
						<td>
							<?php echo h($project['Project']['created']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha modificación'); ?></th>
						<td>
							<?php echo h($project['Project']['modified']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Presupuesto'); ?></th>
						<td>
							<?php echo h($project['Project']['budget']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de inicio'); ?></th>
						<td>
							<?php echo h($project['Project']['start_date']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de fin'); ?></th>
						<td>
							<?php echo h($project['Project']['end_date']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Estado del proyecto'); ?></th>
						<td>
							<?php echo h($project['ProjectState']['name']); ?>
                            &nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Línea de investigación'); ?></th>
						<td>
							<?php echo h($project['InvestigationLine']['name']); ?>
                            &nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Convocatoria'); ?></th>
						<td>
							<?php echo $this->Html->link($project['Convocatory']['name'], array('controller' => 'convocatories', 'action' => 'viewCurrentConvocatory', $project['Convocatory']['id'])); ?>
							&nbsp;
						</td>
					</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

