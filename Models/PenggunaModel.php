<?php namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    /**
     * table name
     */
    protected $table = "pengguna";

    /**
     * allowed Field
     */
    protected $allowedField = [
        'id_pengguna',
        'email',
        'nama',
        'verivikasi'
    ];

    public function getPengguna()
    {
        return $this->findAll(); //= select * from Pengguna
    }
}