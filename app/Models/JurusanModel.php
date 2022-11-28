<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table      = 'jurusan';
    protected $primaryKey = 'id_jurusan';
    // protected $allowedFields = ['nama_jurusan', 'nama_fakultas', 'deskripsi_jurusan', 'gambar_jurusan'];

    protected $useTimestamps = false;
}

?>
