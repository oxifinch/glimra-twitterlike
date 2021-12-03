<?php

namespace App\Models;

use CodeIgniter\Model;

class PostStatus extends Model
{

    {
        protected $db;
    
        public function __construct()
        {
            $this->db = db_connect();
        }
    
        public function insert_status() {
            $this->db->insert('user_contacts', array(
                "name" => $name,
                "address" => $address,
                "email" => $email,
            ));  
        }
    }

    // protected $table      = 'post';
    // protected $primaryKey = 'post_id';
    // protected $useAutoIncrement = true;
    // protected $allowedFields = ["text_content"];

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
?>
  