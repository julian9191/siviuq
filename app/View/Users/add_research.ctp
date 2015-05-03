<div class="users form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Crear investigador'); ?></h1>
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

							     <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar investigadores'), array('action' => 'indexResearch'), array('escape' => false)); ?></li>
									
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('User', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('document', array('class' => 'form-control', 'placeholder' => 'Document'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('full_name', array('class' => 'form-control', 'placeholder' => 'Full Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('last_name', array('class' => 'form-control', 'placeholder' => 'Last Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('telephone', array('class' => 'form-control', 'placeholder' => 'Telephone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bithday', array('class' => 'form-control', 'placeholder' => 'Bithday'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('city_id', array('class' => 'form-control', 'placeholder' => 'City Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('departament_id', array('class' => 'form-control', 'placeholder' => 'Departament Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('user_type_id', array('class' => 'form-control', 'placeholder' => 'User Type Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('CREAR'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>