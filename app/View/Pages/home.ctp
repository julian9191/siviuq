




<div class="jumbotron">
	<h1>SIVIUQ</h1>
	
    <div class="col-md-9">
        <?php echo $this->Form->create('Pages', array('role' => 'form')); ?>
    
        <div class="form-group">
            <?php 
                echo $this->Form->input('Usuarios_id', array('class' => 'form-control', 'placeholder' => 'Researche Id', 'options' => $users)); 
            ?>
        </div>
        <div class="form-group">
		  <?php echo $this->Form->submit(__('ENTRAR'), array('class' => 'btn btn-default')); ?>
		</div>
        <?php echo $this->Form->end() ?>
    </div><!-- end col md 12 -->

    
	<div class="col-md-3">
		<?php echo $this->Html->image('logo.png', array('alt' => 'logo uniquindio','class'=>'logo-img img-resp')); ?>
	</div><!-- end col md 12 -->
	<div style='clear: both'></div>	
</div>