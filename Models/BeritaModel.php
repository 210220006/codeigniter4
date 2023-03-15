<?php namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    /**
     * table name
     */
    protected $table = "berita";

    /**
     * allowed Field
     */
    protected $allowedField = [
        'judul',
        'tanggal',
        'isi'
    ];

    public function getBerita()
    {
        return $this->findAll();
    }
}