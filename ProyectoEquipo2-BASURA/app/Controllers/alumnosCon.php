<?php namespace App\Controllers;

USE App\Models\alumnoModel;

class alumnosCon extends BaseController
{
	public function index()
	{
       
        return view('CabeceraAlumno').view('NavbarModAlumno').view('LNavAlumno').view('ConteAlDaPe').view('footer');
	}

	//--------------------------------------------------------------------

    public function object()
    {
    /*
        $request=\Config\Services::request();
        $firstName=$request->getPost('first_name');
        $lastName=$request->getPost('last_name');
        $lastName=$request->getPost('last_name');
        $email=$request->getPost('email');
        $estatus=$request->getPost('estatus');
        $grupo=$request->getPost('grupo');
*/

        $data = [
            'nombre' => 'Diego',
            'apellidoPaterno' => 'López',
            'apellidoMaterno' => 'Barrera',
            'correo'    => 'diego71@micorreo.upp.edu.mx',
            'estatus' => 'true',
            'grupo' =>  '4B'
        ];

        $variable = new alumnoModel($db);
        $variable->insert($data);
        $info['osito']=$variable->findAll();
        return view("tablaView", $info);
    }
}