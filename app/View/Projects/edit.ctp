<div class="projects form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar Proyecto'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Accions</div>
					<div class="panel-body">
						<ul class="nav nav-pills nav-stacked">
							<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('Project.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Project.id'))); ?></li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Proyectos'), array('action' => 'index'), array('escape' => false)); ?></li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Investigadores del proyecto'), array('controller' => 'projectsResearches', 'action' => 'index', $this->Form->value('Project.id')), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar archivos'), array('controller' => 'projectFiles', 'action' => 'index', $this->Form->value('Project.id')), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar productos del proyecto'), array('controller' => 'projectProducts', 'action' => 'index', $this->Form->value('Project.id')), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar fechas de entrega'), array('controller' => 'deliveryDates', 'action' => 'index', $this->Form->value('Project.id')), array('escape' => false)); ?> </li> 
						</ul>
					</div>
				</div>
			</div>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Project', array('role' => 'form')); ?>

			<div class="form-group">
				<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
			</div>
            <div class="form-group">
				<?php echo $this->Form->input('code', array('class' => 'form-control', 'placeholder' => 'Código','label' => 'Código'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('resume', array('class' => 'form-control', 'placeholder' => 'Título','label' => 'Título'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('summary', array('class' => 'form-control', 'placeholder' => 'Resumen','label' => 'Resumen'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('budget', array('class' => 'form-control', 'placeholder' => 'Presupuesto','label' => 'Presupuesto'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('start_date', array('class' => 'form-control', 'placeholder' => 'Fecha de inicio','label' => 'Fecha de inicio'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('end_date', array('class' => 'form-control', 'placeholder' => 'Fecha de fin','label' => 'Fecha de fin'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('project_state_id', array('class' => 'form-control', 'placeholder' => 'Estado del proyecto','label' => 'Estado del proyecto'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('investigation_line_id', array('class' => 'form-control', 'placeholder' => 'Línea de investigación','label' => 'Línea de investigación'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('convocatory_id', array('class' => 'form-control', 'placeholder' => 'Convocatoria','label' => 'Convocatoria'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->submit(__('EDITAR'), array('class' => 'btn btn-default')); ?>
			</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
