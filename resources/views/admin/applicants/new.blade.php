
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
                            <th>Payment Number</th>
                            <th>Payment TrxID</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($new as $app)
                            <tr>
                                <th>{{ $app->id }}</th>
                                <th>{{ $app->payment_number }}</th>
                                <th>{{ $app->payment_trx_id }}</th>
                                <td>
                                    <a href="{{ url('details/pending/applicant/'.$app->user_id) }}" class="btn btn-primary" title="View Details"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('approve/pending/applicant/'.$app->user_id) }}" class="btn btn-success" title="Confirm For Exam"><i class="fa fa-thumbs-up"></i></a>
                                    <a href="#" class="btn btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
