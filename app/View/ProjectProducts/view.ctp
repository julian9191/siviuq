<div class="projectProducts view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Producto del proyecto'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar producto'), array('action' => 'edit', $projectProduct['ProjectProduct']['id'], $idProject), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar producto'), array('action' => 'delete', $projectProduct['ProjectProduct']['id'], $idProject), array('escape' => false), __('Are you sure you want to delete # %s?', $projectProduct['ProjectProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar productos'), array('action' => 'index', $idProject), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Crear producto'), array('action' => 'add', $idProject), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar adjuntos'), array('controller' =>'productAttachments' ,'action' => 'index', $projectProduct['ProjectProduct']['id']), array('escape' => false)); ?></li>					
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
			<?php echo h($projectProduct['ProjectProduct']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($projectProduct['ProjectProduct']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Description'); ?></th>
		<td>
			<?php echo h($projectProduct['ProjectProduct']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($projectProduct['ProjectProduct']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($projectProduct['ProjectProduct']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Project'); ?></th>
		<td>
			<?php echo $this->Html->link($projectProduct['Project']['id'], array('controller' => 'projects', 'action' => 'view', $projectProduct['Project']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>
