@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="x_content">


                    <div class="row">
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            @php
                                $ssc = \App\Ssc::where('user_id',Auth::id())->first();
                                $hsc = \App\Hsc::where('user_id',Auth::id())->first();
                            @endphp

                            @if($ssc && $hsc == null)
                            <a href="{{ route('basic.infos') }}">
                            @else
                            <a href="{{ route('basicinfo.update') }}">
                            @endif
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-user"></i>
                                    </div>
                                    <div class="count">Basic</div>

                                    <h3>Infos</h3>
                                    <p>Student SSC HSC Information</p>
                                </div>
                            </a>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-comments-o"></i>
                                </div>
                                <div class="count">179</div>

                                <h3>New Sign ups</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                                </div>
                                <div class="count">179</div>

                                <h3>New Sign ups</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-check-square-o"></i>
                                </div>
                                <div class="count">179</div>

                                <h3>New Sign ups</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>


@endsection
