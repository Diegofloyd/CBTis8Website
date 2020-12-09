
            <div id="content" class="container p-5 my-3 rounded-lg  w-100 mt-xl-5">
                <h1>Datos Personales</h1>
                <br>
                <div class="container">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="<?php echo base_url();?>/assets/images/alumno.jpeg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Alumno: </h4>
                            
                            <table border="1">
                            <tr>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Correo</th>
                            <th>Grupo</th>
                            </tr>
                        <?php foreach($osito as $alumno){
                            echo "<tr>";
                            echo "<td>".$alumno['matricula'];
                            echo "<td>".$alumno['nombre'];
                            echo "<td>".$alumno['apellidoPaterno'];
                            echo "<td>".$alumno['apellidoMaterno'];
                            echo "<td>".$alumno['correo'];
                            echo "<td>".$alumno['grupo'];
                            echo "</tr>";
                        }
                        ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    