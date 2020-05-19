
@extends('admin.admin_layouts')
@section('content')

    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Upload Result</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <form action="{{ route('import.result') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <lable for="uploadResultForm">Upload Result Sheet</lable>
                            <input type="file" name="result_sheet" class="form-control">
                        </div>
                        <button class="btn btn-success" type="submit">Upload</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @endsection
