<?php

namespace App\Controllers;

use App\Models\PertanyaanjurusanModel;
use App\Models\JurusanModel;



class Api extends BaseController
{
    protected $pertanyaanjurusanModel;
    protected $jurusanModel;


    public function __construct()
    {
        $this->pertanyaanjurusanModel = new PertanyaanjurusanModel();
        $this->jurusanModel = new JurusanModel();
    }

    public function getJurusan()
    {

        $jurusan = $this->jurusanModel->findall();

        $daftarjurusan = [];

        foreach ($jurusan as $value) {
            $daftarjurusan[$value['id_jurusan']] = 0;
        };

        foreach ($this->request->getVar() as $key => $value) {
            $idpertanyaan = $this->pertanyaanjurusanModel->where('id_pertanyaan', str_replace('radio', '', $key))->get()->getResultArray();
            foreach ($idpertanyaan as $pertanyaan) {
                if ($value == "yes") {
                    $daftarjurusan[$pertanyaan['id_jurusan']] += $pertanyaan['nilai_pertanyaan'];
                }
            }
        };

        $maxjurusan = array_search(max($daftarjurusan), $daftarjurusan);

        $hasiljurusan = $this->jurusanModel->where('id_jurusan', $maxjurusan)->get()->getResultArray()[0];

        return "Kamu cocok di jurusan " . $hasiljurusan['nama_jurusan'];
    }
}
