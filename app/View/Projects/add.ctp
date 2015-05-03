<div class="projects form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Crear Proyecto'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Proyectos'), array('action' => 'index'), array('escape' => false)); ?></li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Project', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('resume', array('class' => 'form-control', 'placeholder' => 'Resume'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('summary', array('class' => 'form-control', 'placeholder' => 'Summary'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('budget', array('class' => 'form-control', 'placeholder' => 'Budget'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('start_date', array('class' => 'form-control', 'placeholder' => 'Start Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('end_date', array('class' => 'form-control', 'placeholder' => 'End Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('project_state_id', array('class' => 'form-control', 'placeholder' => 'Project State Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('investigation_line_id', array('class' => 'form-control', 'placeholder' => 'Investigation Line Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('convocatory_id', array('class' => 'form-control', 'placeholder' => 'Convocatory Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('CREAR'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
