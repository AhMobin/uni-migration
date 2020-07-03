
@extends('admin.admin_layouts')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Upload Result</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-5">
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
                    <br><br>
                </div>

                <div class="x_title">
                    <h2>All Results</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-10">
                            <table class="table table-bordered table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Student Name</th>
                                        <th>HSC Roll</th>
                                        <th>University</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($showResults as $result)
                                        <tr>
                                            <td>{{ $result->id }}</td>
                                            <td>{{ $result->full_name }}</td>
                                            <td>{{ $result->hsc_roll }}</td>
                                            <td>{{ $result->university_name }}</td>
                                            <td>
                                                <a href="#" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="x_title">
                    <h2>Result Publish</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-1">
                            @php
                            $pub = DB::table('result_publishes')->first();
                            @endphp

                            @if($pub->published==0)
                                <a class="btn btn-primary" href="{{ url('result/published') }}">Publish Result</a>
                            @else
                                <a class="btn btn-warning" href="{{ url('result/published/off') }}">Publish Off</a>
                            @endif
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>

    @endsection
