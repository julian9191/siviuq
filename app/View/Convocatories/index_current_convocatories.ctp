<div class="convocatories index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Convocatorias'); ?></h1>
			</div>
            
            
            <div class="col-md-12 text-right">
                <div class="col-md-3"></div>
                <?php
                    echo $this->Form->create('Convocatory', array('url' => array_merge(array('action' => 'index'), $this->params['pass'])));
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


		<div class="col-md-12">
        
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
						<th><?php echo $this->Paginator->sort('opening_date','Fecha de apertura'); ?></th>
						<th><?php echo $this->Paginator->sort('closing_date','Fecha de cierre'); ?></th>
						<th><?php echo $this->Paginator->sort('description','Descripción'); ?></th>
						<th><?php echo $this->Paginator->sort('file','Archivos'); ?></th>
						<th><?php echo $this->Paginator->sort('created','Fecha de creación'); ?></th>
						<th><?php echo $this->Paginator->sort('modified','Fecha de modificación'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($convocatories as $convocatory): ?>
					<tr>
						<td><?php echo h($convocatory['Convocatory']['id']); ?>&nbsp;</td>
						<td><?php echo h($convocatory['Convocatory']['name']); ?>&nbsp;</td>
						<td><?php echo h($convocatory['Convocatory']['opening_date']); ?>&nbsp;</td>
						<td><?php echo h($convocatory['Convocatory']['closing_date']); ?>&nbsp;</td>
						<td><?php echo h($convocatory['Convocatory']['description']); ?>&nbsp;</td>
						<td><?php echo $this->Html->link($convocatory['Convocatory']['file_name'], array('action'=>'download', $convocatory['Convocatory']['id']), array('target' => '_blank', 'download' => $convocatory['Convocatory']['file_name'])); ?>&nbsp;</td>
						<td><?php echo h($convocatory['Convocatory']['created']); ?>&nbsp;</td>
						<td><?php echo h($convocatory['Convocatory']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'viewCurrentConvocatory', $convocatory['Convocatory']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-up"></span>', array('controller'=>'projects', 'action' => 'addProjectConvocatory', $convocatory['Convocatory']['id']), array('escape' => false)); ?>
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