<div class="parameters view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Parameter'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Parameter'), array('action' => 'edit', $parameter['Parameter']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Parameter'), array('action' => 'delete', $parameter['Parameter']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $parameter['Parameter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Parameters'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Parameter'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($parameter['Parameter']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Logo'); ?></th>
		<td>
			<?php echo h($parameter['Parameter']['logo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nombre de la compañia'); ?></th>
		<td>
			<?php echo h($parameter['Parameter']['company_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Teléfono de la compañia'); ?></th>
		<td>
			<?php echo h($parameter['Parameter']['company_telephone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dirección de la compañia'); ?></th>
		<td>
			<?php echo h($parameter['Parameter']['company_addres']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email de la compañia'); ?></th>
		<td>
			<?php echo h($parameter['Parameter']['company_email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('NIT compañia'); ?></th>
		<td>
			<?php echo h($parameter['Parameter']['company_nit']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Página Web de la compañia'); ?></th>
		<td>
			<?php echo h($parameter['Parameter']['company_web_page']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nombre de la aplicación'); ?></th>
		<td>
			<?php echo h($parameter['Parameter']['application_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Autores'); ?></th>
		<td>
			<?php echo h($parameter['Parameter']['authors']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email de notificación'); ?></th>
		<td>
			<?php echo h($parameter['Parameter']['notifications_email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Contraseña Email de notificación'); ?></th>
		<td>
			<?php echo h($parameter['Parameter']['notifications_email_pass']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

