

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
               
                 
           <!--<form action="servicio/addServicio" method="post">-->
<?php echo form_open('comentario/upComentario');?>
<?php foreach ($comentario as $com){?>
<input type="hidden" name="id_comentario" value="<?php echo $com->id_comentario;?>"><br>
    Nombre:<input type="text" name="nombre" value="<?php echo $com->nombre;?>"><br>
    Comentario:<input type="text" name="comentario" value="<?php echo $com->comentario;?>"><br>
    <input type="submit" value="enviar">
<?php } ?>
</form>
                
        
              </div><!-- /.box -->


            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->