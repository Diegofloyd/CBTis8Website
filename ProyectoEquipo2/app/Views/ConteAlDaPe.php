 <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Mi Perfil</h2>
            <div id="Menu">
                <div class="card" style="width:50%">
                    <img class="card-img-top" src="<?php echo base_url();?>/assets/images/alumno.jpeg" alt="Card image">
                    <div class="card-body">
                        
                  <tr>

                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>email</th>
                    <th>Estatus</th>
                    <th>Grupo</th>


                </tr>

                <?php foreach($osito as $persona){
                echo "<tr>";
                echo "<td>".$persona['matricula'];
                echo "<td>".$persona['nombre'];
                echo "<td>".$persona['apellidoPaterno'];
                echo "<td>".$persona['apellidoMaterno'];
                echo "<td>".$persona['correo'];
                echo "<td>".$persona['Estatus'];
                echo "<td>".$persona['Grupo'];
                echo "</tr>";
                }?>
                    </div>

                </div>

            </div>

        </div>
    </div>


