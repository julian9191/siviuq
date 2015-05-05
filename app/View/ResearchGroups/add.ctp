<div class="researchGroups form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Crear grupo de investigación'); ?></h1>
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

							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar grupos de investigación'), array('action' => 'index'), array('escape' => false)); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ResearchGroup', array('role' => 'form')); ?>

			<div class="form-group">
				<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Nombre','label' => 'Nombre'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('colciencias_code', array('class' => 'form-control', 'placeholder' => 'Código de Colciencias','label' => 'Código de Colciencias'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email','label' => 'Email'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('program_id', array('class' => 'form-control', 'placeholder' => 'Programa','label' => 'Programa'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('research_groups_category_id', array('class' => 'form-control', 'placeholder' => 'Categoría del grupo de investigación'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('research_groups_type_id', array('class' => 'form-control', 'placeholder' => 'Tipo de grupo de investigación'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->submit(__('CREAR'), array('class' => 'btn btn-default')); ?>
			</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
