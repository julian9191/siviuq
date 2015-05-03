<div class="projectEvaluations view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Evaluación de proyecto'); ?></h1>
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
		                          <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar evaluaciones'), array('action' => 'projectEvaluation', $idProject), array('escape' => false)); ?> </li>
	
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
			<?php echo h($projectEvaluation['ProjectEvaluation']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date'); ?></th>
		<td>
			<?php echo h($projectEvaluation['ProjectEvaluation']['date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Titulo'); ?></th>
		<td>
			<?php echo h($projectEvaluation['ProjectEvaluation']['titulo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Evaluator Documento'); ?></th>
		<td>
			<?php echo h($projectEvaluation['ProjectEvaluation']['evaluator_documento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Evaluator Name'); ?></th>
		<td>
			<?php echo h($projectEvaluation['ProjectEvaluation']['evaluator_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Result'); ?></th>
		<td>
			<?php echo h($projectEvaluation['ProjectEvaluation']['result']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($projectEvaluation['ProjectEvaluation']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($projectEvaluation['ProjectEvaluation']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Projects'); ?></th>
		<td>
			<?php echo $this->Html->link($projectEvaluation['Projects']['id'], array('controller' => 'projects', 'action' => 'view', $projectEvaluation['Projects']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

