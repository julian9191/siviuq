<div class="users view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Investigador'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar investigador'), array('action' => 'editResearch', $user['User']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Eliminar investigador'), array('action' => 'deleteResearch', $user['User']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar investigadores'), array('action' => 'indexResearch'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Crear investigador'), array('action' => 'addResearch'), array('escape' => false)); ?> </li>
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
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Document'); ?></th>
		<td>
			<?php echo h($user['User']['document']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Full Name'); ?></th>
		<td>
			<?php echo h($user['User']['full_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Name'); ?></th>
		<td>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telephone'); ?></th>
		<td>
			<?php echo h($user['User']['telephone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bithday'); ?></th>
		<td>
			<?php echo h($user['User']['bithday']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo $this->Html->link($user['City']['name'], array('controller' => 'cities', 'action' => 'view', $user['City']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Departament'); ?></th>
		<td>
			<?php echo $this->Html->link($user['Departament']['name'], array('controller' => 'departaments', 'action' => 'view', $user['Departament']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User Type'); ?></th>
		<td>
			<?php echo $this->Html->link($user['UserType']['name'], array('controller' => 'user_types', 'action' => 'view', $user['UserType']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>
