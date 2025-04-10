<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class ProductsModels extends Model{

        protected $table      = 'productos'; // Nombre de la tabla
        protected $primaryKey = 'id';
    
        protected $useAutoIncrement = true;
    
        protected $returnType     = 'array'; //object
        //Aqui es para no eliminar el registro por completo,
        //Cambiandole el estatus o algo asi
        // Hay que configurarlo
        protected $useSoftDeletes = true; 
    
        // Sive para insert y update
        protected $allowedFields = ['id', 'codigo','nombre','stock','id_almacen',
                                    'estatus'];
    
        protected bool $allowEmptyInserts = false;
        protected bool $updateOnlyChanged = true;
    
        // Dates
        protected $useTimestamps = true;
        protected $dateFormat    = 'datetime';
        protected $createdField  = 'fecha_alta';
        protected $updatedField  = 'fecha_modificada';
        protected $deletedField  = 'fecha_elimina';
    }
