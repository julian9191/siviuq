<div class="contenedor-pagina-botones">
    
    <br /><br /><br /><br />
    <?php echo $this->Html->link(__('Lineas de investigación'), array('controller' => 'investigationLines', 'action' => 'index'), array('class' => 'btn btn-lg btn-primary')); ?>
    <?php echo $this->Html->link(__('Estados de proyectos de investigación'), array('controller' => 'projectStates', 'action' => 'index'), array('class' => 'btn btn-lg btn-primary')); ?>
    <?php echo $this->Html->link(__('Plantillas de notificación de entregas de proyectos'), array('controller' => 'notificationsTemplates', 'action' => 'index'), array('class' => 'btn btn-lg btn-primary')); ?>
    <?php echo $this->Html->link(__('Tipos de archivos de proyectos'), array('controller' => 'projectFileTypes', 'action' => 'index'), array('class' => 'btn btn-lg btn-primary')); ?>
    
</div>