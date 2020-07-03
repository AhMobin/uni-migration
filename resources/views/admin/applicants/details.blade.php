
@extends('admin.admin_layouts')
@section('content')

    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Details Of Applicant</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-responsive table-bordered">
                        <tr>
                            <th>Applicant ID</th>
                            <td>{{ $stdInfo->id }}</td>
                        </tr>
                        <tr>
                            <th>Applicant Name</th>
                            <td>{{ $stdInfo->full_name }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $stdInfo->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td>{{ $stdInfo->email_address }}</td>
                        </tr>
                        <tr>
                            <th>Registration Number</th>
                            <td>{{ $stdHSC->hsc_registration }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Selected Applicant University</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-responsive table-bordered">
                        <tr>
                            <th>First Choice</th>
                            <td>{{ $stdChoice->first_choice }}</td>
                        </tr>
                        <tr>
                            <th>Second Choice</th>
                            <td>{{ $stdChoice->second_choice }}</td>
                        </tr>
                        <tr>
                            <th>Third Choice</th>
                            <td>{{ $stdChoice->third_choice }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>HSC Information</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-responsive table-bordered">
                        <tr>
                            <th>HSC Roll Number</th>
                            <td>{{ $stdHSC->hsc_roll }}</td>
                        </tr>

                        <tr>
                            <th>HSC Group</th>
                            <td>{{ $stdHSC->hsc_group }}</td>
                        </tr>

                        <tr>
                            <th>HSC Board</th>
                            <td>{{ $stdHSC->hsc_board }}</td>
                        </tr>

                        <tr>
                            <th>HSC Passing Year</th>
                            <td>{{ $stdHSC->hsc_year }}</td>
                        </tr>

                        <tr>
                            <th>HSC Result</th>
                            <td>{{ $stdHSC->hsc_result }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>SSC Information</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-responsive table-bordered">
                        <tr>
                            <th>SSC Roll</th>
                            <td>{{ $stdSSC->ssc_roll }}</td>
                        </tr>

                        <tr>
                            <th>SSC Board</th>
                            <td>{{ $stdSSC->ssc_board }}</td>
                        </tr>

                        <tr>
                            <th>SSC Passing Year</th>
                            <td>{{ $stdSSC->ssc_year }}</td>
                        </tr>

                        <tr>
                            <th>SSC Result</th>
                            <td>{{ $stdSSC->ssc_result }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('new.applicant') }}" class="btn btn-primary">Back</a>

@endsection
