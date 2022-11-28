<?php

namespace App\Controllers;

use App\Models\JurusanModel;
use App\Models\TeamModel;
use App\Models\PertanyaanModel;
use App\Models\PertanyaanjurusanModel;


class Pages extends BaseController
{
    protected $jurusanModel;
    protected $teamModel;
    protected $pertanyaanModel;
    protected $pertanyaanjurusanModel;

    public function __construct()
    {
        $this->jurusanModel = new JurusanModel();
        $this->teamModel = new TeamModel();
        $this->pertanyaanModel = new PertanyaanModel();
        $this->pertanyaanjurusanModel = new PertanyaanjurusanModel();
    }

    public function index()
    {
        $jurusan = $this->jurusanModel->findall();
        $team = $this->teamModel->findall();
        
        $data = [
            'jurusan' => $jurusan,
            'team' => $team
        ];
        return view('Pages/index', $data);
    }

    public function main()
    {
        $jurusan = $this->jurusanModel->findall();
        $team = $this->teamModel->findall();
        $pertanyaan = $this->pertanyaanModel->findall();
        $pertanyaanjurusan = $this->pertanyaanjurusanModel->findall();
        
        $data = [
            'jurusan' => $jurusan,
            'team' => $team,
            'pertanyaan' => $pertanyaan,
            'pertanyaan_jurusan' => $pertanyaanjurusan
        ];
        
        return view('Pages/main', $data);
    }
}
