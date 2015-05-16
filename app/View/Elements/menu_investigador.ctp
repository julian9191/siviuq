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
            <li><?php echo $this->Html->link('Perfil', array('controller'=>'users', 'action'=>'viewProfile', $this->Session->read('User.id'))); ?></li>
            <li><?php echo $this->Html->link('Convocatorias Actuales', array('controller'=>'convocatories', 'action'=>'indexCurrentConvocatories')); ?></li>
            <li><?php echo $this->Html->link('Mis proyectos de investigación', array('controller'=>'projects', 'action'=>'indexResearchProjects', $this->Session->read('User.id'))); ?></li>
            <li><?php echo $this->Html->link('Salir', array('controller'=>'params', 'action'=>'logout')); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>