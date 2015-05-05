<div class="projectEvaluations form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar evaluación de proyecto'); ?></h1>
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

							     <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('ProjectEvaluation.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('ProjectEvaluation.id'))); ?></li>
                                 <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar evaluación'), array('action' => 'index'), array('escape' => false)); ?></li>
									
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ProjectEvaluation', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('date', array('class' => 'form-control', 'placeholder' => 'Fecha','label'=>'Fecha'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('titulo', array('class' => 'form-control', 'placeholder' => 'Titulo','label'=>'Titulo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('evaluator_documento', array('class' => 'form-control', 'placeholder' => ' Documento Evaluador','label'=>'Documento Evaluador'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('evaluator_name', array('class' => 'form-control', 'placeholder' => 'Nombre del Evaluador','label'=>'Nombre del Evaluador'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('result', array('class' => 'form-control', 'placeholder' => 'Resultado','label'=>'Resultado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('projects_id', array('class' => 'form-control', 'placeholder' => 'Proyecto','label'=>'Proyecto'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('EDITAR'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
