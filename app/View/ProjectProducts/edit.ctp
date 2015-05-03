<div class="projectProducts form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar producto del proyecto'); ?></h1>
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
                                <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('ProjectProduct.id'), $idProject), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('ProjectProduct.id'))); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar productos'), array('action' => 'index', $idProject), array('escape' => false)); ?></li>
                                <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar adjuntos'), array('controller' =>'productAttachments' ,'action' => 'index'), array('escape' => false)); ?></li>
									
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ProjectProduct', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Description'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('project_id', array('class' => 'form-control', 'placeholder' => 'Project Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('EDITAR'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
