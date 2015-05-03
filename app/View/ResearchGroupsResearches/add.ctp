<div class="researchGroupsResearches form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Crear investigador al grupo de investigación'); ?></h1>
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
                            
							     <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar investigadores del grupo'), array('action' => 'index', $idResearchGroup), array('escape' => false)); ?></li>
							
                            </ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ResearchGroupsResearch', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('researche_id', array('class' => 'form-control', 'placeholder' => 'Research Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('research_group_id', array('class' => 'form-control', 'placeholder' => 'Research Group Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('CREAR'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
