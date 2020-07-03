
@extends('admin.admin_layouts')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>New Applicants</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Full Name</th>
                            <th>Registration Number</th>
                            <th>HSC Roll</th>
                            <th>HSC Group</th>
                            <th>HSC Board</th>
                            <th>HSC Year</th>
                            <th>HSC-SSC Point</th>
                            <th>1st Choice</th>
                            <th>2nd Choice</th>
                            <th>3rd Choice</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($confirm as $app)
                            <tr>
                                <th>{{ $app->id }}</th>
                                <th>{{ $app->full_name }}</th>
                                <th>{{ $app->hsc_registration }}</th>
                                <th>{{ $app->hsc_roll }}</th>
                                <th>{{ $app->hsc_group }}</th>
                                <th>{{ $app->hsc_board }}</th>
                                <th>{{ $app->hsc_year }}</th>
                                <th>{{ ($app->hsc_result + $app->ssc_result) }}</th>
                                <th>{{ $app->first_choice }}</th>
                                <th>{{ $app->second_choice }}</th>
                                <th>{{ $app->third_choice }}</th>
                                <td>
                                    <a href="#" class="btn btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back</a>

            </div>

        </div>

    </div>

@endsection
