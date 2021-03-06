<div class="deliveryDates index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Fechas de entrega'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Acciones</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Crear fecha de entrega'), array('action' => 'add', $idProject), array('escape' => false)); ?></li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('description','Descripción'); ?></th>
						<th><?php echo $this->Paginator->sort('date','Fecha'); ?></th>
						<th><?php echo $this->Paginator->sort('created','Fecha de creación'); ?></th>
						<th><?php echo $this->Paginator->sort('modified','Fecha de modificación'); ?></th>
						<th><?php echo $this->Paginator->sort('notifications_template_id','Plantilla'); ?></th>
						<th><?php echo $this->Paginator->sort('project_id','Proyecto'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($deliveryDates as $deliveryDate): ?>
					<tr>
						<td><?php echo h($deliveryDate['DeliveryDate']['id']); ?>&nbsp;</td>
						<td><?php echo h($deliveryDate['DeliveryDate']['description']); ?>&nbsp;</td>
						<td><?php echo h($deliveryDate['DeliveryDate']['date']); ?>&nbsp;</td>
						<td><?php echo h($deliveryDate['DeliveryDate']['created']); ?>&nbsp;</td>
						<td><?php echo h($deliveryDate['DeliveryDate']['modified']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($deliveryDate['NotificationsTemplate']['id'], array('controller' => 'notifications_templates', 'action' => 'view', $deliveryDate['NotificationsTemplate']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($deliveryDate['Project']['id'], array('controller' => 'projects', 'action' => 'view', $deliveryDate['Project']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $deliveryDate['DeliveryDate']['id'], $idProject), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $deliveryDate['DeliveryDate']['id'], $idProject), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $deliveryDate['DeliveryDate']['id'], $idProject), array('escape' => false), __('Are you sure you want to delete # %s?', $deliveryDate['DeliveryDate']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->