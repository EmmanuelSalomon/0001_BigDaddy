

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
               
                 
           <!--<form action="servicio/addServicio" method="post">-->
<?php $atribitos = array('class'=>'miFormulario', 'enctype'=>'multipart/form-data', 'name'=>'formulario');?>
<?php echo form_open('comentario/addComentario');?>
    Nombre:<input type="text" name="nombre"><br>
    Comentario:<input type="text" name="comentario"><br>
    <input type="submit" value="enviar">
</form>
                
        
              </div><!-- /.box -->


            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->