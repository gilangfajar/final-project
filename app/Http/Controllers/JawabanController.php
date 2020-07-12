<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

use App\Pertanyaan;

class JawabanController extends Controller
{
    // public function create($pertanyaan_id)
    // {
    //     return view('jawaban.form', compact('jawaban'));
    // }
    public function store($pertanyaan_id, Request $request)
    {
        $data = $request->all();
        // dd($data);
        unset($data["_token"]); //tidak mebutuhkan token harus unset
        $jawaban = JawabanModel::save($data);
        // dd($pertanyaan);
        if ($jawaban) {
            return redirect('/pertanyaan');
        }
    }

    public function index($pertanyaan_id)
    {
        // dd('jawaban');
        $jawaban = JawabanModel::find_by_pertanyaan_id($pertanyaan_id);
        // dd($jawaban);
        return view('jawaban.show', compact('jawaban'));
    }
}
