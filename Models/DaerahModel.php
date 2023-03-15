<?php namespace App\Models;

use CodeIgniter\Model;

class DaerahModel extends Model
{
    /**
     * table name
     */
    protected $table = "Daerah";

    /**
     * allowed Field
     */
    protected $allowedField = [
        'id_daerah',
        'nama_daerah',
        'status'
    ];

    public function getDaerah()
    {
        return $this->findAll(); //= select * from daerah
    }
}