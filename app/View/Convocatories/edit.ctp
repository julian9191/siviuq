<div class="convocatories form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar convocatoria'); ?></h1>
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

							<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('Convocatory.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Convocatory.id'))); ?></li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar convocatorias'), array('action' => 'index'), array('escape' => false)); ?></li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar proyectos'), array('controller' => 'projects', 'action' => 'projectsConvocatory', $convocatory['Convocatory']['id']), array('escape' => false)); ?> </li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Convocatory', ['enctype' => 'multipart/form-data'], array('role' => 'form')); ?>

			<div class="form-group">
				<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Nombre',, 'label' => 'Nombre'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('opening_date', array('class' => 'form-control', 'placeholder' => 'Fecha de apertura',, 'label' => 'Fecha de apertura'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('closing_date', array('class' => 'form-control', 'placeholder' => 'Fecha de cierre',, 'label' => 'Fecha de cierre'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Descripción',, 'label' => 'Descripción'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('file', array('class' => 'form-control', 'placeholder' => 'Archivo',, 'label' => 'Archivo'), ['type' => 'file']);?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->submit(__('EDITAR'), array('class' => 'btn btn-default')); ?>
			</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
