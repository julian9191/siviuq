<div class="users index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Investigadores'); ?></h1>
			</div>
            
            
            <div class="col-md-12 text-right">
                <div class="col-md-3"></div>
                <?php
                    echo $this->Form->create('User', array('url' => array_merge(array('action' => 'indexResearch'), $this->params['pass'])));
                 ?> 
                <div class="col-md-4">
                    <?php  
                        echo $this->Form->input('cod', array('div' => false, 'empty' => true, 'class' => 'form-control', 'placeholder' => 'Filtrar por documento...', 'label' => ''));
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
                        echo $this->Html->link(__('Listar'), array('action' => 'indexResearch'), array('class' => 'btn btn-default'));
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
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Crear investigador'), array('action' => 'addResearch'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('document','Documento'); ?></th>
						<th><?php echo $this->Paginator->sort('full_name','Nombres'); ?></th>
						<th><?php echo $this->Paginator->sort('last_name','Apellidos'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('telephone','Teléfono'); ?></th>
						<th><?php echo $this->Paginator->sort('bithday','Fecha de nacimiento'); ?></th>
						<th><?php echo $this->Paginator->sort('city_id','Ciudad'); ?></th>
						<th><?php echo $this->Paginator->sort('departament_id','Departamento'); ?></th>
						<th><?php echo $this->Paginator->sort('user_type_id','Tipo de usuario'); ?></th>
						<th><?php echo $this->Paginator->sort('created','Fecha de creación'); ?></th>
						<th><?php echo $this->Paginator->sort('modified','Fecha de modificación'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user): ?>
					<tr>
						<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['document']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['full_name']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['telephone']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['bithday']); ?>&nbsp;</td>
						<td>
							<?php echo h($user['City']['name']); ?>							
						</td>
						<td>
							<?php echo h($user['Departament']['name']); ?>							
						</td>
						<td>
							<?php echo $this->Html->link($user['UserType']['name'], array('controller' => 'user_types', 'action' => 'view', $user['UserType']['id'])); ?>
						</td>
						<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'viewResearch', $user['User']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'editResearch', $user['User']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'deleteResearch', $user['User']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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