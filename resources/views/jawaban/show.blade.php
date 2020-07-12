@extends('template.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Detail Jawaban</h1>
    </div>
    <!-- /.col-lg-12 -->
</div><div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail Jawaban
            </div>
            <div class="panel-body">
                @foreach($jawaban as $key => $jawaban)
                <dl class="dl-horizontal">
                    <dt>Isi Jawaban :</dt>
                    <dd>{{ $jawaban->isi }}</dd>
                    <dt>Tanggal dibuat :</dt>
                    <dd>{{ $jawaban->tanggal_diperbarui }}</dd>
                    <dt>Tanggal diperbarui :</dt>
                    <dd>{{ $jawaban->tanggal_diperbarui }}</dd>
                </dl>
                @endforeach
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
