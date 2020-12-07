<?php namespace App\Models;

use CodeIgniter\Model;

class usuarioModel extends Model
{
    protected $table      = 'alumno';
    protected $primaryKey = 'matricula';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'apellidoPaterno', 'apellidoMaterno', 'correo', 'estatus', 'grupo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}