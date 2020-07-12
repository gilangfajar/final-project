@extends('template.master')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ url('/pertanyaan/' .$id)}}" method="POST">
                                    {{ method_field('put') }}
                                    @csrf
                                    <div class="form-group">
                                        <input hidden name="id" value="{{ $id}}">
                                        <label>Judul</label>
                                        <input type="text" class="form-control" id="judul" value="{{ $pertanyaan->judul}}" name="judul">
                                        {{--  <p class="help-block">Example block-level help text here.</p>  --}}
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Isi</label>
                                        <input type="text" class="form-control" id="isi" value="{{ $pertanyaan->isi}}" name="isi">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal dibuat</label>
                                        <input type="text" hidden value="{{ \Carbon\Carbon::now() }}" class="form-control" name="tanggal_dibuat">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal diperbarui</label>
                                        <input hidden type="text" value="{{ \Carbon\Carbon::now() }}" class="form-control" name="tanggal_diperbarui">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    <!-- /.container-fluid -->

    
@endsection
