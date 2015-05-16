<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('SIVIUQ', array('controller'=>'Pages', 'action'=>'index'), array('class' => 'navbar-brand'));?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Configuración<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><?php echo $this->Html->link('Facultades', array('controller'=>'faculties', 'action'=>'index')); ?></li>
                    <li><?php echo $this->Html->link('Programas', array('controller'=>'programs', 'action'=>'index')); ?></li>
                    <li class="divider"></li>
                    <li><?php echo $this->Html->link('Tipos de usuario', array('controller' => 'userTypes', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link('Roles de investigadores', array('controller' => 'researchRoles', 'action' => 'index')); ?></li>
                    <li class="divider"></li>
                    <li><?php echo $this->Html->link('Tipos de grupos de investigación', array('controller' => 'researchGroupsTypes', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link('Categorías de grupos de investigación', array('controller' => 'researchGroupsCategories', 'action' => 'index')); ?></li>
                    <li class="divider"></li>
                    <li><?php echo $this->Html->link('Lineas de investigación', array('controller' => 'investigationLines', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link('Estados de proyectos de investigación', array('controller' => 'projectStates', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link('Plantillas de notificación de entregas de proyectos', array('controller' => 'notificationsTemplates', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link('Tipos de archivos de proyectos', array('controller' => 'projectFileTypes', 'action' => 'index')); ?></li>
                </ul>
            </li>
            <li><?php echo $this->Html->link('Investigadores', array('controller'=>'users', 'action'=>'indexResearch')); ?></li>
            <li><?php echo $this->Html->link('Grupos de investigación', array('controller'=>'ResearchGroups', 'action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('Convocatorias', array('controller'=>'convocatories', 'action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('Proyectos de investigación', array('controller'=>'projects', 'action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('Evaluaciones de proyectos', array('controller'=>'projectEvaluations', 'action'=>'index')); ?></li>
            <li><?php echo $this->Html->link('Salir', array('controller'=>'params', 'action'=>'logout')); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>