<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Laporan extends BaseController {
    public $modelSurvei;

    public function __construct() {
        $this->modelSurvei = new \App\Models\SurveiModel();
    }

    public function laporan_bast() {
        $data = [
            'title' => 'Laporan Bast',
            'data' => $this->modelSurvei->findAll(),
        ];
        return view( 'laporan/bast', $data );
    }
}
