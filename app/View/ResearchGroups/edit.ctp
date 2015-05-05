<div class="researchGroups form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar grupo de investigación'); ?></h1>
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

							<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('ResearchGroup.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('ResearchGroup.id'))); ?></li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar grupos de investigación'), array('action' => 'index'), array('escape' => false)); ?></li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Investigadores del grupo'), array('controller' => 'researchGroupsResearches', 'action' => 'index', $researchGroup['ResearchGroup']['id']), array('escape' => false)); ?> </li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ResearchGroup', array('role' => 'form')); ?>

			<div class="form-group">
				<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Nombre','label' => 'Nombre'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('colciencias_code', array('class' => 'form-control', 'placeholder' => 'Código Colciencias','label' => 'Código Colciencias'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email','label' => 'Email'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('program_id', array('class' => 'form-control', 'placeholder' => 'Program Id','label'=>'Programa'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('research_groups_category_id', array('class' => 'form-control', 'placeholder' => 'Research Groups Category Id','label' =>'Categoria del grupo de investigación'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('research_groups_type_id', array('class' => 'form-control', 'placeholder' => 'Research Groups Type Id','label' => 'Tipo de grupo de investigación'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->submit(__('EDITAR'), array('class' => 'btn btn-default')); ?>
			</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
