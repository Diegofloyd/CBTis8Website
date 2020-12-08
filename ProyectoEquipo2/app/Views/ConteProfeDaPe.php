            <!-- Page Content  -->


            <div id="content" class="container p-5 my-3 rounded-lg  w-100 mt-xl-5">
                <h1>Datos Personales</h1>
                <br>
                <div class="container">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="<?php echo base_url();?>/assets/images/img_avatar1.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Profesor: </h4>
                            <form method="POST" action="/action_page.php" role="form" onsubmit="return seguridad();">
                                <div class="form-group">
                                    <label for="usr">Nombre:</label>
                                    <label for="usr" class="form-control" name="nombre">Alan</label>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Apellido Paterno:</label>
                                    <label for="usr" class="form-control" name="apellido_paterno">Canales</label>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Apellido Materno:</label>
                                    <label for="usr" class="form-control" name="apellido_materno">Barrera</label>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Correo:</label>
                                    <label for="usr" class="form-control" name="email">alan@micorreo.upp.edu.mx</label>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Estatus:</label>
                                    <label for="usr" class="form-control" name="estatus">True</label>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>