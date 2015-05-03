<div class="projectFiles form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Crear archivo'); ?></h1>
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

							     <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar archivos'), array('action' => 'index', $idProject), array('escape' => false)); ?></li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ProjectFile', ['enctype' => 'multipart/form-data'], array('role' => 'form')); ?>

                <div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('file', array('class' => 'form-control', 'placeholder' => 'File'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('project_file_type_id', array('class' => 'form-control', 'placeholder' => 'Project File Type Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('project_id', array('class' => 'form-control', 'placeholder' => 'Project Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('CREAR'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
