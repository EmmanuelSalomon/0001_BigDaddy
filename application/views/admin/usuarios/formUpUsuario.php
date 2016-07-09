

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
               
                 
           <!--<form action="usuario/addUsuario" method="post">-->
<?php echo form_open('usuario/upUsuario');?>
<?php foreach ($usuario as $usu){?>
<input type="hidden" name="id" value="<?php echo $usu->idCliente;?>"><br>
    Codigo_Cliente:<input type="text" name="Codigo_Cliente" value="<?php echo $usu->Codigo_Cliente;?>"><br>
    Nombre:<input type="text" name="Nombre" value="<?php echo $usu->Nombre;?>"><br>
    Apellidos:<input type="text" name="Apellidos" value="<?php echo $usu->Apellidos;?>"><br>
    CodigoPostal:<input type="text" name="CodigoPostal" value="<?php echo $usu->CodigoPostal;?>"><br>
    Calle:<input type="text" name="Calle" value="<?php echo $usu->Calle;?>"><br>
    Colonia:<input type="text" name="Colonia" value="<?php echo $usu->Colonia;?>"><br>
    Localidad:<input type="text" name="Localidad" value="<?php echo $usu->Localidad;?>"><br>
    Municipio:<input type="text" name="Municipio" value="<?php echo $usu->Municipio;?>"><br>
    Estado:<input type="text" name="Estado" value="<?php echo $usu->Estado;?>"><br>
    Pais:<input type="text" name="Pais" value="<?php echo $usu->Pais;?>"><br>
    Email:<input type="text" name="Email" value="<?php echo $usu->Email;?>"><br>
    RFC:<input type="text" name="email" value="<?php echo $usu->RFC;?>"><br>
    Telefono:<input type="text" name="Telefono" value="<?php echo $usu->Telefono;?>"><br>
    Fecha_Registro:<input type="text" name="Fecha_Registro" value="<?php echo $usu->Fecha_Registro;?>"><br>
    Fecha_Edicion:<input type="text" name="Fecha_Edicion" value="<?php echo $usu->Fecha_Edicion;?>"><br>
    Password:<input type="text" name="Password" value="<?php echo $usu->Password;?>"><br>	
    <input type="submit" value="enviar">
<?php } ?>
</form>
		
        
              </div><!-- /.box -->


            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->