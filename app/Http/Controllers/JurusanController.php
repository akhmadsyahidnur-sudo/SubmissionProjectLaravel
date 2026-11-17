<?php

// namespace App\Http\Controllers;
// use App\Models\Jurusan;

// use Illuminate\Http\Request;

// class JurusanController extends Controller
// {
//     public function index()
// {
//     $jurusans = Jurusan::orderBy('nama')->get();
//     return view('jurusan.index', compact('jurusans'));
// }

// public function show($id)
// {
//     $jurusan = Jurusan::findOrFail($id);
//     return view('jurusan.show', compact('jurusan'));
// }
//     //

    
// }
namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('jurusan.index', compact('jurusans'));
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:20|unique:jurusans,code',
            'nama' => 'required|string|max:100',
        ]);

        Jurusan::create([
            'code' => $request->code,
            'nama' => $request->nama,
        ]);

        return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan berhasil ditambahkan.');
    }
      public function show($id)
  {
      $jurusan = Jurusan::findOrFail($id);
      return view('jurusan.show', compact('jurusan'));
  }
}




