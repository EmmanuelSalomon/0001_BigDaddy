


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
               
 <div>
 <ol class="breadcrumb">
  <li class="active">Bienvenido</li>
</ol>
 </div>               
           <h1>Bienvenido: <?php echo $nombre;?></h1>

<ul>
    <li>
        <a href="<?php echo base_url();?>index.php/Usuario/getUsuario">Usuarios</a>
    </li>
    <li>
        <a href="<?php echo base_url();?>index.php/Servicio/getServicio">Productos</a>
    </li>
    <li>
        <a href="<?php echo base_url();?>index.php/Comentario/getComentario">Comentarios</a>
    </li>
	<div class="panel-body">
          <?php echo $cal;?>
    </div>

</ul>
<a href="cerrarSesion">Cerrar Sesión</a>
                
        
              </div><!-- /.box -->


            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->