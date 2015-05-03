<div class="projectEvaluations form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Crear evaluación de proyecto'); ?></h1>
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

							     <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar evaluaciones de proyecto'), array('action' => 'index'), array('escape' => false)); ?></li>
									
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ProjectEvaluation', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('date', array('class' => 'form-control', 'placeholder' => 'Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('titulo', array('class' => 'form-control', 'placeholder' => 'Titulo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('evaluator_documento', array('class' => 'form-control', 'placeholder' => 'Evaluator Documento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('evaluator_name', array('class' => 'form-control', 'placeholder' => 'Evaluator Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('result', array('class' => 'form-control', 'placeholder' => 'Result'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('projects_id', array('class' => 'form-control', 'placeholder' => 'Projects Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('CREAR'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
