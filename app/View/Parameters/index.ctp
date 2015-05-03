<div class="parameters index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Parameters'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Parameter'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('logo'); ?></th>
						<th><?php echo $this->Paginator->sort('company_name'); ?></th>
						<th><?php echo $this->Paginator->sort('company_telephone'); ?></th>
						<th><?php echo $this->Paginator->sort('company_addres'); ?></th>
						<th><?php echo $this->Paginator->sort('company_email'); ?></th>
						<th><?php echo $this->Paginator->sort('company_nit'); ?></th>
						<th><?php echo $this->Paginator->sort('company_web_page'); ?></th>
						<th><?php echo $this->Paginator->sort('application_name'); ?></th>
						<th><?php echo $this->Paginator->sort('authors'); ?></th>
						<th><?php echo $this->Paginator->sort('notifications_email'); ?></th>
						<th><?php echo $this->Paginator->sort('notifications_email_pass'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($parameters as $parameter): ?>
					<tr>
						<td><?php echo h($parameter['Parameter']['id']); ?>&nbsp;</td>
						<td><?php echo h($parameter['Parameter']['logo']); ?>&nbsp;</td>
						<td><?php echo h($parameter['Parameter']['company_name']); ?>&nbsp;</td>
						<td><?php echo h($parameter['Parameter']['company_telephone']); ?>&nbsp;</td>
						<td><?php echo h($parameter['Parameter']['company_addres']); ?>&nbsp;</td>
						<td><?php echo h($parameter['Parameter']['company_email']); ?>&nbsp;</td>
						<td><?php echo h($parameter['Parameter']['company_nit']); ?>&nbsp;</td>
						<td><?php echo h($parameter['Parameter']['company_web_page']); ?>&nbsp;</td>
						<td><?php echo h($parameter['Parameter']['application_name']); ?>&nbsp;</td>
						<td><?php echo h($parameter['Parameter']['authors']); ?>&nbsp;</td>
						<td><?php echo h($parameter['Parameter']['notifications_email']); ?>&nbsp;</td>
						<td><?php echo h($parameter['Parameter']['notifications_email_pass']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $parameter['Parameter']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $parameter['Parameter']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $parameter['Parameter']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $parameter['Parameter']['id'])); ?>
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