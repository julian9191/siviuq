<div class="notificationsTemplates view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Plantilla de notificación'); ?></h1>
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
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar plantilla'), array('action' => 'edit', $notificationsTemplate['NotificationsTemplate']['id']), array('escape' => false)); ?> </li>
							<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar plantilla'), array('action' => 'delete', $notificationsTemplate['NotificationsTemplate']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $notificationsTemplate['NotificationsTemplate']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar plantillas'), array('action' => 'index'), array('escape' => false)); ?> </li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Crear plantilla'), array('action' => 'add'), array('escape' => false)); ?> </li>

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
							<?php echo h($notificationsTemplate['NotificationsTemplate']['id']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Nombre'); ?></th>
						<td>
							<?php echo h($notificationsTemplate['NotificationsTemplate']['name']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Texto'); ?></th>
						<td>
							<?php echo h($notificationsTemplate['NotificationsTemplate']['text']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de creación'); ?></th>
						<td>
							<?php echo h($notificationsTemplate['NotificationsTemplate']['created']); ?>
							&nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Fecha de modificación'); ?></th>
						<td>
							<?php echo h($notificationsTemplate['NotificationsTemplate']['modified']); ?>
							&nbsp;
						</td>
					</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

