<?php namespace App\Controllers;

USE App/Models/usuarioModel;

class alumnosCon extends BaseController
{
	public function index()
	{
        //return view('cabeceraForm').view('cuerpoForm').view('finForm');
        return view('CabeceraAlumno').view('NavbarModAlumno').view('LNavAlumno').view('ConteAlDaPe').view('footer');
	}

	//--------------------------------------------------------------------

    public function object()
    {
    
        $request=\Config\Services::request();
        $firstName=$request->getPost('nombre');
        $lastName=$request->getPost('apellido_paterno');
        $lastName=$request->getPost('apellido_materno');
        $email=$request->getPost('email');
        $estatus=$request->getPost('estatus');


        $data = [
            'nombre' => 'Alan',
            'apellidoPaterno' => 'Canales',
            'apellidoMaterno' => 'Barrera',
            'correo'    => 'alan@micorreo.upp.edu.mx',
            'estatus' => 'true'
        ];

        $variable = new alumnoModel($db);
        $variable->insert($data);

        //return view('cabeceraForm').view('cuerpoForm').view('finForm');
        $info["osito"]=$variable->findAll();
        return view("tablaView", $info);
    }
}