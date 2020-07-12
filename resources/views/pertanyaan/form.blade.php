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
                                <form action="{{ url("/pertanyaan")}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input class="form-control" name="judul" type="text" placeholder="Enter Judul" required>
                                        {{--  <p class="help-block">Example block-level help text here.</p>  --}}
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Isi Pertanyaan</label>
                                        <textarea class="form-control" rows="3" id="isi" name="isi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Tags</label>
                                        <input class="form-control" id="tags" name="tags" type="text" placeholder="Enter Tags" required>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input value="{{\Carbon\Carbon::now()}}" type="hidden" class="form-control" name="tanggal_dibuat">
                                    </div>
                                    <div class="form-group">
                                        
                                        <input value="{{\Carbon\Carbon::now()}}" type="hidden" class="form-control" name="tanggal_diperbarui">
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
@push('scripts')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'isi' );
</script> 
@endpush