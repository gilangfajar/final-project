<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";
    protected $guarded = [];

    public static function simpan($request)
    {
        $pertanyaan = new Pertanyaan;
        $pertanyaan->judul = $request->judul;


        $pertanyaan->save();
        return $pertanyaan;
    }
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'pertanyaan_tag', 'pertanyaan_id', 'tag_id');
    }
}
