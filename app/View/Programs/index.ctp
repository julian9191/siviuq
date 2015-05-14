<div class="programs index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Programas'); ?></h1>
			</div>
            
            
            <div class="col-md-12 text-right">
                <div class="col-md-3"></div>
                <?php
                    echo $this->Form->create('Program', array('url' => array_merge(array('action' => 'index'), $this->params['pass'])));
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
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Crear Programa'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
						<th><?php echo $this->Paginator->sort('created','Fecha de creación'); ?></th>
						<th><?php echo $this->Paginator->sort('modified', 'Fecha de modificación'); ?></th>
						<th><?php echo $this->Paginator->sort('faculty_id','Facultad'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($programs as $program): ?>
					<tr>
						<td><?php echo h($program['Program']['id']); ?>&nbsp;</td>
						<td><?php echo h($program['Program']['name']); ?>&nbsp;</td>
						<td><?php echo h($program['Program']['created']); ?>&nbsp;</td>
						<td><?php echo h($program['Program']['modified']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($program['Faculty']['name'], array('controller' => 'faculties', 'action' => 'view', $program['Faculty']['id'])); ?>
						</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $program['Program']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $program['Program']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $program['Program']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $program['Program']['id'])); ?>
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