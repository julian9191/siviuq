<div class="deliveryDates view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Fecha de entrega'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar fecha de entrega'), array('action' => 'edit', $deliveryDate['DeliveryDate']['id'], $idProject), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar fecha de entrega'), array('action' => 'delete', $deliveryDate['DeliveryDate']['id'], $idProject), array('escape' => false), __('Are you sure you want to delete # %s?', $deliveryDate['DeliveryDate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar fechas de entrega'), array('action' => 'index', $idProject), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Crear fecha de entrega'), array('action' => 'add', $idProject), array('escape' => false)); ?> </li>
		
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
			<?php echo h($deliveryDate['DeliveryDate']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descripción'); ?></th>
		<td>
			<?php echo h($deliveryDate['DeliveryDate']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fecha'); ?></th>
		<td>
			<?php echo h($deliveryDate['DeliveryDate']['date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fecha de creación'); ?></th>
		<td>
			<?php echo h($deliveryDate['DeliveryDate']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fecha de modificación'); ?></th>
		<td>
			<?php echo h($deliveryDate['DeliveryDate']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Plantilla'); ?></th>
		<td>
			<?php echo $this->Html->link($deliveryDate['NotificationsTemplate']['id'], array('controller' => 'notifications_templates', 'action' => 'view', $deliveryDate['NotificationsTemplate']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Proyecto'); ?></th>
		<td>
			<?php echo $this->Html->link($deliveryDate['Project']['id'], array('controller' => 'projects', 'action' => 'view', $deliveryDate['Project']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

