<div class="projectEvaluations index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Evaluaciones de projectos'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Acciones</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;volver al proyecto'), array('controller' => 'projects', 'action' => 'view', $idProject), array('escape' => false)); ?></li>
								
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('date'); ?></th>
						<th><?php echo $this->Paginator->sort('titulo'); ?></th>
						<th><?php echo $this->Paginator->sort('evaluator_documento'); ?></th>
						<th><?php echo $this->Paginator->sort('evaluator_name'); ?></th>
						<th><?php echo $this->Paginator->sort('result'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th><?php echo $this->Paginator->sort('projects_id'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($projectEvaluations as $projectEvaluation): ?>
					<tr>
						<td><?php echo h($projectEvaluation['ProjectEvaluation']['id']); ?>&nbsp;</td>
						<td><?php echo h($projectEvaluation['ProjectEvaluation']['date']); ?>&nbsp;</td>
						<td><?php echo h($projectEvaluation['ProjectEvaluation']['titulo']); ?>&nbsp;</td>
						<td><?php echo h($projectEvaluation['ProjectEvaluation']['evaluator_documento']); ?>&nbsp;</td>
						<td><?php echo h($projectEvaluation['ProjectEvaluation']['evaluator_name']); ?>&nbsp;</td>
						<td><?php echo h($projectEvaluation['ProjectEvaluation']['result']); ?>&nbsp;</td>
						<td><?php echo h($projectEvaluation['ProjectEvaluation']['created']); ?>&nbsp;</td>
						<td><?php echo h($projectEvaluation['ProjectEvaluation']['modified']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($projectEvaluation['Projects']['id'], array('controller' => 'projects', 'action' => 'view', $projectEvaluation['Projects']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'viewProjectEvaluation', $projectEvaluation['ProjectEvaluation']['id'], $idProject), array('escape' => false)); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->