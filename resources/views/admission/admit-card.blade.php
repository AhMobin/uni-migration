@extends('layouts.app')

@section('content')

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
                                    <i class="fa fa-university"></i> Admit Card For <span style="color:green">{{ $data->full_name }}</span>
{{--                                    <small class="pull-right">Date:--}}
{{--                                        <script> document.write(new Date().getDate() + '/' + new Date().getMonth() + '/' + new Date().getFullYear() ) </script>--}}
{{--                                    </small>--}}
                                </h1>
                            </div>
                            <!-- /.col -->
                        </div>

                        <br><br>

                        <br><br>

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
