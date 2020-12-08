
            <div id="content" class="container p-5 my-3 rounded-lg  w-100 mt-xl-5">
                <h1>Datos Personales</h1>
                <br>
                <div class="container">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="<?php echo base_url();?>/assets/images/alumno.jpeg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Alumno: </h4>
                            <form method="POST" action="/action_page.php" role="form" onsubmit="return seguridad();">
                                <div class="form-group">
                                    <label for="usr">Nombre:</label>
                                    <label for="usr" class="form-control" name="nombre">Diego</label>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Apellido Paterno:</label>
                                    <label for="usr" class="form-control" name="apellido_paterno">López</label>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Apellido Materno:</label>
                                    <label for="usr" class="form-control" name="apellido_materno">Barrera</label>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Correo:</label>
                                    <label for="usr" class="form-control" name="email">diego71@micorreo.upp.edu.mx</label>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Estatus:</label>
                                    <label for="usr" class="form-control" name="estatus">True</label>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Grupo:</label>
                                    <label for="usr" class="form-control" name="estatus">4B</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    