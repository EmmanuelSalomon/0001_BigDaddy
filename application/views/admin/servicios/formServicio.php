


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
               
                 
           <!--<form action="servicio/addServicio" method="post">-->
<?php $atribitos = array('class'=>'miFormulario', 'enctype'=>'multipart/form-data', 'name'=>'formulario');?>
<?php echo form_open('servicio/addServicio');?>
    Producto:<input type="text" name="producto"><br>
    Costo:<input type="text" name="costo"><br>
    <input type="submit" value="enviar">
</form>
                
        
              </div><!-- /.box -->


            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->