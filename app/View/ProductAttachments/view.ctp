<div class="productAttachments view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Adjunto del producto'); ?></h1>
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
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar adjunto'), array('action' => 'edit', $productAttachment['ProductAttachment']['id'], $idProducto), array('escape' => false)); ?> </li>
							<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar adjunto'), array('action' => 'delete', $productAttachment['ProductAttachment']['id'], $idProducto), array('escape' => false), __('Are you sure you want to delete # %s?', $productAttachment['ProductAttachment']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar adjunto'), array('action' => 'index', $idProducto), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Crear adjunto'), array('action' => 'add', $idProducto), array('escape' => false)); ?> </li>
						</ul>
					</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
					<tr>
						<th><?php echo __('Id'); ?></th>
						<td>
							<?php echo h($productAttachment['ProductAttachment']['id']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Title'); ?></th>
						<td>
							<?php echo h($productAttachment['ProductAttachment']['Título']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Archivo'); ?></th>
						<td>
							<?php echo $this->Html->link($productAttachment['ProductAttachment']['file_name'], array('action'=>'download', $productAttachment['ProductAttachment']['id']), array('target' => '_blank', 'download' => $productAttachment['ProductAttachment']['file_name'])); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de creación'); ?></th>
						<td>
							<?php echo h($productAttachment['ProductAttachment']['created']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de modificación'); ?></th>
						<td>
							<?php echo h($productAttachment['ProductAttachment']['modified']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Producto'); ?></th>
						<td>
							<?php echo $this->Html->link($productAttachment['ProjectProduct']['title'], array('controller' => 'project_products', 'action' => 'view', $productAttachment['ProjectProduct']['id'])); ?>
							&nbsp;
						</td>
					</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

