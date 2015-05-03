<div class="productAttachments form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar adjunto del proyecto'); ?></h1>
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
                                <li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar'), array('action' => 'delete', $this->Form->value('ProductAttachment.id'), $idProducto), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('ProductAttachment.id'))); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar adjuntos'), array('action' => 'index', $idProducto), array('escape' => false)); ?></li>
									
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ProductAttachment', ['enctype' => 'multipart/form-data'], array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('file', array('class' => 'form-control', 'placeholder' => 'File'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('project_product_id', array('class' => 'form-control', 'placeholder' => 'Project Product Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('EDITAR'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
