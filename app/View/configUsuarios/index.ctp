<div class="contenedor-pagina-botones">
    
    <br /><br /><br /><br />
    <?php echo $this->Html->link(__('Tipos de usuario'), array('controller' => 'userTypes', 'action' => 'index'), array('class' => 'btn btn-lg btn-primary')); ?>
    <?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-lg btn-primary')); ?>
    <?php echo $this->Html->link(__('Roles de investigadores'), array('controller' => 'researchRoles', 'action' => 'index'), array('class' => 'btn btn-lg btn-primary')); ?>
    
</div>