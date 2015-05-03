<div class="researchGroupsResearches form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar investigador del grupo de investigación'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
                                <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('ResearchGroupsResearch.id'), $idResearchGroup), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('ResearchGroupsResearch.id'))); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar'), array('action' => 'index', $idResearchGroup), array('escape' => false)); ?></li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ResearchGroupsResearch', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('researche_id', array('class' => 'form-control', 'placeholder' => 'Researche Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('research_group_id', array('class' => 'form-control', 'placeholder' => 'Research Group Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('EDITAR'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
