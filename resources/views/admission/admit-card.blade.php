@extends('layouts.app')

@section('content')
{{--    <table class="table">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th scope="col">#ID</th>--}}
{{--            <th scope="col">Name</th>--}}
{{--            <th scope="col">Email</th>--}}
{{--            <th scope="col">PDF</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($data as $user)--}}
{{--            <tr>--}}
{{--                <th>{{ $user->id }}</th>--}}
{{--                <td>{{ $user->full_name }}</td>--}}
{{--                <td>{{ $user->email_address }}</td>--}}
{{--                <td> <a href="{{ url('show/pdf/'.$user->id) }}" class="btn btn-info">SHOW</a> </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Student Admit Card <small>Public University Admission Exam</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <section class="content invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12 invoice-header">
                                <h1>
                                    <i class="fa fa-university"></i> Admit Card.
                                    <small class="pull-right">Date:
                                        <script> document.write(new Date().getDate() + '/' + new Date().getMonth() + '/' + new Date().getFullYear() ) </script>
                                    </small>
                                </h1>
                            </div>
                            <!-- /.col -->
                        </div>

                        <br><br>

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-6">
                                <table class="table table-responsive table-stripped">
                                    <tr>
                                        <th>Student Name</th>
                                        <td>{{ $data->full_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Registration Number</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>HSC Roll</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>SSC Roll</th>
                                        <td>Monsters DVD</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Grown Ups Blue Ray</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-xs-4 col-xs-offset-2">
                                <img src="" alt="">
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <br><br>

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-xs-6">
                                <p class="lead">University Choices</p>
                                <p>First Choice :</p>
                                <p>Second Choice :</p>
                                <p>Third Choice :</p>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-6">
                                <p class="lead">Amount Due 2/22/2014</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>$250.30</td>
                                        </tr>
                                        <tr>
                                            <th>Tax (9.3%)</th>
                                            <td>$10.34</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping:</th>
                                            <td>$5.80</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>$265.24</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <a class="btn btn-primary pull-right" style="margin-right: 5px;" href="{{ url('show/pdf/'.$data->id) }}"><i class="fa fa-download"></i> Download AdmitCard</a>
{{--                                <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>--}}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection
