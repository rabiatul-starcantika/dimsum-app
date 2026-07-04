<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DimsumController extends Controller
{
    // Data statis (tanpa database)
    private $dimsums = [
        [
            'id' => 1,
            'nama' => 'Dimsum Ayam',
            'harga' => 18000,
            'deskripsi' => 'Dimsum isi ayam yang lembut dan gurih.'
        ],
        [
            'id' => 2,
            'nama' => 'Dimsum Udang',
            'harga' => 20000,
            'deskripsi' => 'Dimsum dengan isian udang segar.'
        ],
        [
            'id' => 3,
            'nama' => 'Dimsum Keju',
            'harga' => 22000,
            'deskripsi' => 'Dimsum dengan tambahan keju yang lumer.'
        ],
    ];

    public function home()
    {
        return view('home');
    }

    public function list()
    {
        return view('list', [
            'dimsums' => $this->dimsums
        ]);
    }

    public function detail($id)
    {
        foreach ($this->dimsums as $dimsum) {
            if ($dimsum['id'] == $id) {
                return view('detail', [
                    'dimsum' => $dimsum
                ]);
            }
        }

        abort(404);
    }
}