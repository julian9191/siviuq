<!DOCTYPE html>
<html lang="es">
<head>
 <title>
  <?php echo "siviuq"; ?>
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">


<?php
echo $this->Html->meta('icon');
echo $this->Html->css('bootstrap.min');
echo $this->Html->css('style');
echo $this->Html->css('uploadfile');
echo $this->Html->css('facebox');
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');

?>

<style>

.navbar{
    background: #025A28;
}

.glyphicon, a, a:hover{
    color: #025A28;
}

.navbar-inverse .navbar-brand, .navbar-inverse .navbar-nav>li>a{
    color: #fff;
}

</style>

</head>

<body>
    
    <?php 
        $role = $this->Session->read('User.role');
        if($role == ""){
            //No muestra menú
        }
        elseif($role == "1"){
            echo $this->element('menu_investigador');
        }
        else
        {
            echo $this->element('menu_admin');
        }
    ?>
  <div class="container-main">

    <div id="content">
      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>
    </div>
  </div>

  <!-- Latest compiled and minified JavaScript -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <?php echo $this->Html->script('jquery.uploadfile.min'); ?>
  <?php echo $this->Html->script('uploadfile-run-admin'); ?>
  <?php echo $this->Html->script('uploadfile-run-advertiser'); ?>
  <?php echo $this->Html->script('facebox'); ?>
  <?php echo $this->Html->script('facebox-run'); ?>
  <?php echo $this->Html->script('ckeditor/ckeditor');?>  

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      
      
      <?php 
        /*Traza de la consulta sql*/
        //echo $this->element('sql_dump'); 
      ?>
      
      
    </body>
    </html>





