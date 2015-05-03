<div class="parameters form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Parameter'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Parameter.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Parameter.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Parameters'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Parameter', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('logo', array('class' => 'form-control', 'placeholder' => 'Logo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('company_name', array('class' => 'form-control', 'placeholder' => 'Company Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('company_telephone', array('class' => 'form-control', 'placeholder' => 'Company Telephone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('company_addres', array('class' => 'form-control', 'placeholder' => 'Company Addres'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('company_email', array('class' => 'form-control', 'placeholder' => 'Company Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('company_nit', array('class' => 'form-control', 'placeholder' => 'Company Nit'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('company_web_page', array('class' => 'form-control', 'placeholder' => 'Company Web Page'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('application_name', array('class' => 'form-control', 'placeholder' => 'Application Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('authors', array('class' => 'form-control', 'placeholder' => 'Authors'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('notifications_email', array('class' => 'form-control', 'placeholder' => 'Notifications Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('notifications_email_pass', array('class' => 'form-control', 'placeholder' => 'Notifications Email Pass'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
