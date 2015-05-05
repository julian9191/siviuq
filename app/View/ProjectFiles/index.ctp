<div class="projectFiles index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Archivos del proyecto'); ?></h1>
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
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Crear archivo'), array('action' => 'add', $idProject), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
						<th><?php echo $this->Paginator->sort('file','Archivo'); ?></th>
						<th><?php echo $this->Paginator->sort('created','Fecha de creación'); ?></th>
						<th><?php echo $this->Paginator->sort('modified','Fecha de modificación'); ?></th>
						<th><?php echo $this->Paginator->sort('project_file_type_id','Tipo de archivo de proyecto'); ?></th>
						<th><?php echo $this->Paginator->sort('project_id','Proyecto'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($projectFiles as $projectFile): ?>
					<tr>
						<td><?php echo h($projectFile['ProjectFile']['id']); ?>&nbsp;</td>
						<td><?php echo h($projectFile['ProjectFile']['name']); ?>&nbsp;</td>
						<td><?php echo $this->Html->link($projectFile['ProjectFile']['file_name'], array('action'=>'download', $projectFile['ProjectFile']['id']), array('target' => '_blank', 'download' => $projectFile['ProjectFile']['file_name'])); ?>&nbsp;</td>
						<td><?php echo h($projectFile['ProjectFile']['created']); ?>&nbsp;</td>
						<td><?php echo h($projectFile['ProjectFile']['modified']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($projectFile['ProjectFileType']['name'], array('controller' => 'project_file_types', 'action' => 'view', $projectFile['ProjectFileType']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link($projectFile['Project']['id'], array('controller' => 'projects', 'action' => 'view', $projectFile['Project']['id'])); ?>
						</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $projectFile['ProjectFile']['id'], $idProject), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $projectFile['ProjectFile']['id'], $idProject), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $projectFile['ProjectFile']['id'], $idProject), array('escape' => false), __('Are you sure you want to delete # %s?', $projectFile['ProjectFile']['id'])); ?>
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