<?php namespace App\Controllers;
USE App/Models/alumnoModel;
class Home extends BaseController
{
	public function index()
	{
		return view('CabeceraPrincipal').view('NavbarPrincipal').view('MenuLPrincipal').view('ContenidoPrincipal').view('footer');
	}
    
    public function Administracion()
	{
		return view('CabeceraAdmin').view('NavbarModAdmin').view('ContenidoPAdmin').view('footer');
	}
    /*Inicios de sesión*/
    public function LoginAdministrador()
	{
		return view('LogInAdmin').view('footer');
	}
    
    public function LoginAlumno()
	{
		return view('LogInAlumno').view('footer');
	}
    
    public function LoginProfesor()
	{
		return view('LogInProfe').view('footer');
	}
    /*MODULO ADMINISTRADOR*/
    /*Usuarios*/
    public function Usuarios()
	{
		return view('CabeceraAdmin').view('NavbarModAdmin').view('ConteAdUsu').view('footer');
	}
    
    /*Dentro de usuarios*/
    public function Usuarios_Alta()
	{
		return view('CabecAdUs').view('NavbarModAdmin').view('LNavAdminUs').view('ConteAlUsu').view('footer');
	}
    
    public function Usuarios_Baja()
	{
		return view('CabecAdUs').view('NavbarModAdmin').view('LNavAdminUs').view('ConteBaUsu').view('footer');
	}
    
    public function Usuarios_Modificacion()
	{
		return view('CabecAdUs').view('NavbarModAdmin').view('LNavAdminUs').view('ConteModUsu').view('footer');
	}
    
    /*Asignaturas*/
    public function Asignaturas()
	{
		return view('CabeceraAdmin').view('NavbarModAdmin').view('ConteAdAsi').view('footer');
	}
    public function Asignaturas_Alta()
	{
		return view('CabecAdAsi').view('NavbarModAdmin').view('LNavAdminAs').view('ConteAlAsi').view('footer');
	}
    
    public function Asignaturas_Baja()
	{
		return view('CabecAdAsi').view('NavbarModAdmin').view('LNavAdminAs').view('ConteBaAsi').view('footer');
	}
    
    public function Asignaturas_Modificacion()
	{
		return view('CabecAdAsi').view('NavbarModAdmin').view('LNavAdminAs').view('ConteModAsi').view('footer');
	}
    
    /*MODULO ALUMNO*/
    /**/
    public function Alumno()/*Pendiente**/
	{
		return view('CabeceraAlumno').view('NavbarModAlumno').view('LNavAlumno').view('ConteAlumno').view('footer');
	}
    public function Alumno_Horario()/*Pendiente**/
	{
		return view('CabeceraAlumno').view('NavbarModAlumno').view('LNavAlumno').view('ConteAlHor').view('footer');
	}
    public function Alumno_DaPe()/*Pendiente**/
	{
		$data = [
			'nombre' -> 'Alan',
			'apellidoPaterno' -> 'Canales',
			'apellidoMaterno' -> 'Barrera',
			'correo'    -> 'alan@micorreo.upp.edu.mx',
			'grupo' ->  '4B'
		];

		$variable = new alumnoModel($db);
		$variable->insert($data);

		return view('CabeceraAlumno').view('NavbarModAlumno').view('LNavAlumno').view('ConteAlDaPe').view('footer');

	}
    public function Alumno_Calificacion()/*Pendiente**/
	{
		return view('CabeceraAlumno').view('NavbarModAlumno').view('LNavAlumno').view('ConteAlCal').view('footer');
	}
    
    /*MODULO PROFESOR*/
    /*Principal*/
    public function Profesor()
	{
		return view('CabeceraProfe').view('NavbarModProfe').view('LNavProfe').view('ContePProfe').view('footer');
	}
    public function Profesor_Alumnos()
	{
		return view('CabeceraProfe').view('NavbarModProfe').view('LNavProfe').view('ConteProfeAl').view('footer');
	}
	public function Profesor_DatosP()
	{
		return view('CabeceraProfe').view('NavbarModProfe').view('LNavProfe').view('ConteProfeDaPe').view('footer');
	}
	public function Profesor_Calificaciones()
	{
		return view('CabeceraProfe').view('NavbarModProfe').view('LNavProfe').view('ConteProfeCal').view('footer');
	}
	public function Profesor_Pagos()
	{
		return view('CabeceraProfe').view('NavbarModProfe').view('LNavProfe').view('ConteProfePag').view('footer');
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
    //--------------------------------------------------------------------

}
