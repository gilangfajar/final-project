<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

use App\Pertanyaan;
use App\Models\Tag;


class PertanyaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['']);
    }
    public function index()
    {
        $pertanyaan = PertanyaanModel::get_all(); //custom model
        return view('pertanyaan.index', compact('pertanyaan'));
    }
    public function create()
    {
        return view('pertanyaan.form');
    }
    public function store(Request $request)
    {
        $pertanyaan = Pertanyaan::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);

        $tagArr = explode(',', $request->tags);
        $tagsMulti  = [];
        foreach ($tagArr as $strTag) {
            $tagArrAssc["tag_name"] = $strTag;
            $tagsMulti[] = $tagArrAssc;
        }
        // dd($tagsMulti);
        // Create Tags baru
        foreach ($tagsMulti as $tagCheck) {
            $tag = Tag::firstOrCreate($tagCheck);
            $pertanyaan->tags()->attach($tag->id);
        }
        return redirect('/pertanyaan');
    }

    public function show($id)
    {
        // $item = ItemModel::find_by_id($id);

        $pertanyaan = Pertanyaan::find($id);
        // dd($item->tags);
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id)
    {

        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaan', 'id'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);

        PertanyaanModel::update($data);
        return redirect('/pertanyaan');
    }
    public function delete($id)
    {

        PertanyaanModel::delete($id);
        return redirect('/pertanyaan');
    }
}
