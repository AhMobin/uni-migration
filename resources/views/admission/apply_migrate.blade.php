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

                        @if(!$migrate)
                            <tr>
                                <td><h5>To Migrate</h5></td>
                                <td>
                                    <select name="migration_uni" class="form-control">
                                        @if($allUni)

                                            @foreach($allUni as $uni)
                                                <option value="{{ $uni->id }}">{{ $uni->university_name }}</option>
                                            @endforeach

                                        @elseif($GenSpeAgr)
                                            @foreach($GenSpeAgr as $uni)
                                                <option value="{{ $uni->id }}">{{ $uni->university_name }}</option>
                                            @endforeach

                                        @elseif($onlyGen)
                                            @foreach($onlyGen as $uni)
                                                <option value="{{ $uni->id }}">{{ $uni->university_name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><h5>Apply</h5></td>
                                <td>
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-thumbs-up"></i> </button>
                                </td>
                            </tr>

                        @else

                            <tr>
                                <td><h5>Migrating University (applied)</h5></td>
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
