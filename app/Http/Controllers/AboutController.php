<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about', [
            'title' => 'About',
            'description' => 'Youkoso watashi no About ʕ •ᴥ•ʔ',
            'nama' => 'Yusuf Morla Lagamani',
            'kelas' => 'XI PPLG 3',
            'repository' => 'https://github.com/kyotakaokkotsu',
        ]);
    }
}
