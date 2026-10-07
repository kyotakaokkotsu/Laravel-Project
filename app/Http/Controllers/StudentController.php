<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = [
            [
                'nama' => 'Yusuf Morla Lagamani',
                'kelas' => 'XI PPLG 3',
                'nis' => '2221',
                'status' => 'Active',
            ],
            [
                'nama' => 'Hsin',
                'kelas' => 'XI PPLG 3',
                'nis' => '2222',
                'status' => 'Active',
            ],
            [
                'nama' => 'Yelan',
                'kelas' => 'XI PPLG 3',
                'nis' => '2223',
                'status' => 'Active',
            ],
            [
                'nama' => 'Anasthasia',
                'kelas' => 'XI PPLG 3',
                'nis' => '2224',
                'status' => 'Active',
            ],
            [
                'nama' => 'Feodrovna',
                'kelas' => 'XI PPLG 3',
                'nis' => '2225',
                'status' => 'Active',
            ],
            [
                'nama' => 'Snezhaya',
                'kelas' => 'XI PPLG 3',
                'nis' => '2226',
                'status' => 'Active',
            ],
            [
                'nama' => 'Kiana',
                'kelas' => 'XI PPLG 3',
                'nis' => '2227',
                'status' => 'Active',
            ],
            [
                'nama' => 'Remie',
                'kelas' => 'XI PPLG 3',
                'nis' => '2228',
                'status' => 'Active',
            ],
            [
                'nama' => 'Hyacine',
                'kelas' => 'XI PPLG 3',
                'nis' => '2229',
                'status' => 'Active',
            ],
            [
                'nama' => 'Changli',
                'kelas' => 'XI PPLG 3',
                'nis' => '2230',
                'status' => 'Active',
            ],
        ];

        return view('admin.student', [
            'title' => 'Students',
            'description' => 'Daftar data student',
            'students' => $students,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
