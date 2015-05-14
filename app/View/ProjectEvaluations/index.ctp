<div class="projectEvaluations index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Evaluaciones de proyectos'); ?></h1>
			</div>
            
            
            <div class="col-md-12 text-right">
                <div class="col-md-3"></div>
                <?php
                    echo $this->Form->create('ProjectEvaluation', array('url' => array_merge(array('action' => 'index'), $this->params['pass'])));
                 ?> 
                <div class="col-md-4">
                    <?php  
                        echo $this->Form->input('cod', array('div' => false, 'empty' => true, 'class' => 'form-control', 'placeholder' => 'Filtrar por ID de proyecto...', 'label' => ''));
                    ?>
                 </div>
                 <div class="col-md-4">
                     <?php  
                        echo $this->Form->input('nombre', array('div' => false, 'empty' => true, 'class' => 'form-control', 'placeholder' => 'Filtrar por nombre de evaluador...', 'label' => ''));
                        //echo $this->Html->link(__('Todos'), array('action' => 'add'), array('class' => 'btn btn-primary'));
                    ?>
                </div>
                <div class="col-md-1">
                     <?php  
                        echo $this->Form->submit(__('Filtrar', true), array('class' => 'btn btn-default'));
                        echo $this->Html->link(__('Listar'), array('action' => 'index'), array('class' => 'btn btn-default'));
                        //echo $this->Html->link(__('Todos'), array('action' => 'add'), array('class' => 'btn btn-primary'));
                    ?>
                </div>
                <?php  echo $this->Form->end();  ?>
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
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Crear evaluación de proyecto'), array('action' => 'add'), array('escape' => false)); ?></li>

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
						<th><?php echo $this->Paginator->sort('date','Fecha'); ?></th>
						<th><?php echo $this->Paginator->sort('titulo','Titulo'); ?></th>
						<th><?php echo $this->Paginator->sort('evaluator_documento','Documento del evaluador'); ?></th>
						<th><?php echo $this->Paginator->sort('evaluator_name','Nombre del evaluador'); ?></th>
						<th><?php echo $this->Paginator->sort('result','Resultado'); ?></th>
						<th><?php echo $this->Paginator->sort('created','Fecha de creación'); ?></th>
						<th><?php echo $this->Paginator->sort('modified','Fecha de modificación'); ?></th>
						<th><?php echo $this->Paginator->sort('projects_id','Proyecto'); ?></th>
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
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $projectEvaluation['ProjectEvaluation']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $projectEvaluation['ProjectEvaluation']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $projectEvaluation['ProjectEvaluation']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $projectEvaluation['ProjectEvaluation']['id'])); ?>
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