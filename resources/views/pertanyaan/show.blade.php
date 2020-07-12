@extends('template.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Detail Pertanyaan</h1>
    </div>
    <!-- /.col-lg-12 -->
</div><div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail Pertanyaan
            </div>
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt>Pertanyaan's Judul :</dt>
                    <dd>{{ $pertanyaan->judul }}</dd>
                    <dt>Isi :</dt>
                    <dd>{!! $pertanyaan->isi !!}</dd>
                    {{--  <dt>Tanggal dibuat :</dt>
                    <dd>{{ $pertanyaan->tanggal_dibuat }}</dd>
                    <dt>Tanggal diperbarui :</dt>
                    <dd>{{ $pertanyaan->tanggal_diperbarui }}</dd>  --}}
                </dl>
                <div class="form-group">
                @foreach($pertanyaan->tags as $tag) 
                    <button class="btn btn-default btn-sm"> {{$tag->tag_name}} </button>
                @endforeach
            </div>
                <form action="#" method="post">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="form-group">
                      <textarea class="form-control" id="isi" name="komentar" placeholder="Enter Komentar" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-7">Submit</button>
                </form>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-4 -->
</div>
    
@endsection
