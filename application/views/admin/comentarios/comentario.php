

                   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           <div>
 <ol class="breadcrumb">
  <li><a href="#">Bienvenido</a></li>
  <li class="active">Comentario</li>
</ol>
 </div>
		  <h1>
            Tabla de Comentarios
            <small></small>
                    
          </h1>
          <!--
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
            -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <div class='col-lg-8'>
                      <div class='col-lg-4'>
                    <a href="formComentario">Agregar Comentario</a>
                  </div>
                  <div class='col-lg-4'>
                    <a href="logueado">Regresar</a>
                  </div>
                  </div>
                    <thead>
                      <tr>

                        <th>Nombre</th>
                        <th>Comentario</th>
                        <th>Acciones</th>
                        <th>Bajas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                if (isset($comentario)) {
                    foreach ($comentario as $c) {
                        echo "<tr>";
                        echo "<td>" . $c->nombre . "</td>";
                        echo "<td>" . $c->comentario . "</td>";
                        

//                        echo "<td class='hidden-xs'><a href='formUpUsuario/$u->idUsuario'>Modificar</a></td>";
//                        echo "<td class='visible-xs'><a href='formUpUsuario/$u->idUsuario'><spam class='glyphicon glyphicon-ok-sign'></spam</a></td>";
//                        
                        echo "<td><a href='formUpComentario/$c->id_comentario'>"
                            ."<spam class='hidden-xs'>Modificar</spam>"
                            ."<spam class='visible-xs glyphicon glyphicon-pencil'></spam>"    
                            . "</a></td>";
                        echo "<td><a href='delComentario/$c->id_comentario'>Borrar</a></td>";
                    }
                } else {
                    echo 'Sin registro a mostrar';
                }
                ?>
                  </table>
                </div><!-- /.box-body -->
                
        
              </div><!-- /.box -->


            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->