@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="x_content">
                <h3>Student Admission Result Info</h3>
                <br>
                <table class="table table-striped table-bordered">
                    <form action="{{ url('migration/applied/') }}" method="POST">
                        @csrf
                        <tr>
                            <td width="25%"><h5>Student Roll</h5></td>
                            <td>
                                {{ $result->hsc_roll }}
                                <input type="hidden" name="st_roll" value="{{ $result->hsc_roll }}">
                                <input type="hidden" name="result_id" value="{{ $result->id }}">
                                <input type="hidden" name="current_uni_id" value="{{ $result->university_id }}">
                            </td>
                        </tr>
                        <tr>
                            <td><h5>Student Name</h5></td>
                            <td>
                                {{ $result->full_name }}
                            </td>
                        </tr>

                        <tr>
                            <td><h5>University Name</h5></td>
                            <td>
                                {{ $result->university_name }}
                            </td>
                        </tr>
                        @if($migrate->status==0)
                            <tr>
                                <td><h5>Migrate To (Applied)</h5></td>
                                <td>
                                    {{ $migrate->university_name }}
                                </td>
                            </tr>
                        @elseif($migrate->status==2)
                            <tr>
                                <td><h5>University Name<br><span style="color:red">(Migration Denied)</span></h5></td>
                                <td>
                                    {{ $migrate->university_name }}
                                </td>
                            </tr>

                        @elseif($migrate->status==1)
                            <tr>
                                <td><h5>Migration (Granted)</h5></td>
                                <td>
                                    {{ $migrate->university_name }}
                                </td>
                            </tr>

                        @endif

                    </form>

                </table>

                <a href="{{ route('home') }}" class="btn btn-sm btn-warning">Back</a>
            </div>
        </div>
    </div>

@endsection
