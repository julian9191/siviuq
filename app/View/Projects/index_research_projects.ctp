<div class="projects index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Proyectos'); ?></h1>
			</div>
            
            
            <div class="col-md-12 text-right">
                <div class="col-md-3"></div>
                <?php
                    echo $this->Form->create('Project', array('url' => array_merge(array('action' => 'indexResearchProjects'), $this->params['pass'])));
                 ?> 
                <div class="col-md-4">
                    <?php  
                        echo $this->Form->input('cod', array('div' => false, 'empty' => true, 'class' => 'form-control', 'placeholder' => 'Filtrar por ID...', 'label' => ''));
                    ?>
                 </div>
                 <div class="col-md-4">
                     <?php  
                        echo $this->Form->input('nombre', array('div' => false, 'empty' => true, 'class' => 'form-control', 'placeholder' => 'Filtrar por nombre...', 'label' => ''));
                        //echo $this->Html->link(__('Todos'), array('action' => 'add'), array('class' => 'btn btn-primary'));
                    ?>
                </div>
                <div class="col-md-1">
                     <?php  
                        echo $this->Form->submit(__('Filtrar', true), array('class' => 'btn btn-default'));
                        echo $this->Html->link(__('Listar'), array('action' => 'indexResearchProjects', $idResearch), array('class' => 'btn btn-default'));
                        //echo $this->Html->link(__('Todos'), array('action' => 'add'), array('class' => 'btn btn-primary'));
                    ?>
                </div>
                <?php  echo $this->Form->end();  ?>
            </div>
            
            
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('resume','Título'); ?></th>
						<th><?php echo $this->Paginator->sort('summary','Resumen'); ?></th>
						<th><?php echo $this->Paginator->sort('created','Fecha de creación'); ?></th>
						<th><?php echo $this->Paginator->sort('modified','Fecha de modificación'); ?></th>
						<th><?php echo $this->Paginator->sort('budget','Presupuesto'); ?></th>
						<th><?php echo $this->Paginator->sort('start_date','Fecha de inicio'); ?></th>
						<th><?php echo $this->Paginator->sort('end_date','Fecha de finalización'); ?></th>
						<th><?php echo $this->Paginator->sort('project_state_id','Estado del proyecto'); ?></th>
						<th><?php echo $this->Paginator->sort('investigation_line_id','Línea de investigación'); ?></th>
						<th><?php echo $this->Paginator->sort('convocatory_id','Convocatoria'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($projects as $project): ?>
					<tr>
						<td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
						<td><?php echo h($project['Project']['resume']); ?>&nbsp;</td>
						<td><?php echo h($project['Project']['summary']); ?>&nbsp;</td>
						<td><?php echo h($project['Project']['created']); ?>&nbsp;</td>
						<td><?php echo h($project['Project']['modified']); ?>&nbsp;</td>
						<td><?php echo h($project['Project']['budget']); ?>&nbsp;</td>
						<td><?php echo h($project['Project']['start_date']); ?>&nbsp;</td>
						<td><?php echo h($project['Project']['end_date']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($project['ProjectState']['name'], array('controller' => 'project_states', 'action' => 'view', $project['ProjectState']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link($project['InvestigationLine']['name'], array('controller' => 'investigation_lines', 'action' => 'view', $project['InvestigationLine']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link($project['Convocatory']['name'], array('controller' => 'convocatories', 'action' => 'view', $project['Convocatory']['id'])); ?>
						</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'viewResearchProject', $project['Project']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $project['Project']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $project['Project']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?>
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