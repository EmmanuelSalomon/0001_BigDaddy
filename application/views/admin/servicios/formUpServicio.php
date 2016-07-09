

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
               
                 
           <!--<form action="servicio/addServicio" method="post">-->
<?php echo form_open('servicio/upServicio');?>
<?php foreach ($servicio as $ser){?>
<input type="hidden" name="id_servicio" value="<?php echo $ser->id_servicio;?>"><br>
    Producto:<input type="text" name="servicio" value="<?php echo $ser->servicio;?>"><br>
    Costo:<input type="text" name="costo" value="<?php echo $ser->costo;?>"><br>
    <input type="submit" value="enviar">
<?php } ?>
</form>
                
        
              </div><!-- /.box -->


            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->