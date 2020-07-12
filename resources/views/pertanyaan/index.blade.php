@extends('template.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forum</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        List Data Pertanyaan
                        <a href="{{ url('/pertanyaan/create')}}" class="btn btn-primary float-right">
                            Create New Item
                        </a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Pertanyaan</th>
                                        <th>Actions</th>
                                        <th>Actions</>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pertanyaan as $key => $pertanyaan)
                                    <tr class="odd gradeX">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $pertanyaan->judul }} </td>
                                        <td>{!! $pertanyaan->isi !!} <br> 
                                            <form action="{{ url('/jawaban/'.$pertanyaan->id)}}" method="POST" class="mb-2">
                                            @csrf
                                            <div class="form-group">
                                              <textarea class="form-control" id="isi" name="isi" placeholder="Enter Isi" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input hidden value="{{$pertanyaan->id}}" type="hidden" class="form-control" name="pertanyaan_id">
                                            </div>
                                            <div class="form-group">
                                                <input value="{{\Carbon\Carbon::now()}}" type="hidden" class="form-control" name="tanggal_dibuat">
                                            </div>
                                            <div class="form-group">
                                                <input value="{{\Carbon\Carbon::now()}}" type="hidden" class="form-control" name="tanggal_diperbarui">
                                            </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form></td>
                                        <td class="center"><a href="{{ url('/pertanyaan/'. $pertanyaan->id)}}" class="btn btn-sm btn-info" type="button">show</a>||<a href="{{ url('/jawaban/'. $pertanyaan->id)}}"><button type="button" class="btn btn-default btn-sm"> Detail Answer</button></a></td>
                    
                                        <td class="center"><a href="{{ url('/pertanyaan/'.$pertanyaan->id. '/edit')}}"><button type="button" class="btn btn-warning"> Update</button></a>
                                            <form action="{{ url('/pertanyaan/'. $pertanyaan->id)}}" method="POST"> 
                                                @csrf {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger">
                                                Delete</button></form></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    
@endsection



