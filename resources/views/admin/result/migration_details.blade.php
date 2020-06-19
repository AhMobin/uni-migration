
@extends('admin.admin_layouts')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Student Migration Details</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Student Name</th>
                            <td>{{ $viewStd->full_name }}</td>
                        </tr>
                        <tr>
                            <th>HSC Roll</th>
                            <td>{{ $viewStd->st_roll }}</td>
                        </tr>
                        <tr>
                            <th>Current University</th>
                            <td>{{ $viewOld->university_name }}</td>
                        </tr>
                        <tr>
                            <th>Request To University</th>
                            <td>{{ $newUni->university_name }}</td>
                        </tr>
                    </table>
                </div>

                <a href="{{ route('migrations') }}" class="btn btn-warning">Back</a>
            </div>
        </div>
    </div>

@endsection
