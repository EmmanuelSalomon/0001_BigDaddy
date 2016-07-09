

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
               
                 
           <!--<form action="usuario/addUsuario" method="post">-->
<?php $atribitos = array('class'=>'miFormulario', 'enctype'=>'multipart/form-data', 'name'=>'formulario');?>
<?php echo form_open('usuario/addUsuario');?>
    Codigo_Cliente:<input type="text" name="Codigo_Cliente"><br>
    Nombre:<input type="text" name="Nombre"><br>
    Apellidos:<input type="text" name="Apellidos"><br>    
    CodigoPostal:<input type="text" name="CodigoPostal"><br>
    Calle:<input type="text" name="Calle"><br>
    Colonia:<input type="text" name="Colonia"><br>  
    Localidad:<input type="text" name="Localidad"><br>
    Municipio:<input type="text" name="Municipio"><br>
    Estado:<input type="text" name="Estado"><br> 
    Pais:<input type="text" name="Pais"><br>    
    Email:<input type="text" name="Email"><br>
    RFC:<input type="text" name="RFC"><br>
    Telefono:<input type="text" name="Telefono"><br>  
    Fecha_Registro:<input type="text" name="Fecha_Registro"><br>
    Fecha_Edicion:<input type="text" name="Fecha_Edicion"><br>
    Password:<input type="text" name="Password"><br> 


    <input type="submit" value="enviar">
</form>
                
        
              </div><!-- /.box -->


            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
