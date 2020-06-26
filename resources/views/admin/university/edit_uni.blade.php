
@extends('admin.admin_layouts')
@section('content')

    <div class="row" style="margin-left: 20%">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit  University Details</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <form action="{{ url('update/uni/'.$edit->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="uniName">University Name</label>
                            <input type="text" class="form-control" name="university_name" value="{{ $edit->university_name }}">
                        </div>

                        <div class="form-group">
                            <label for="uniCategory">University Category</label>
                            <select class="form-control" name="unicategory_id">
                                <option value="{{ $edit->unicategory->id }}">{{ $edit->unicategory->category_name }}</option>
                                <option>--------------</option>
                                @foreach($allCat as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="uniContact">University Contact</label>
                            <input type="text" name="university_contact" class="form-control" placeholder="University Contact Info..." value="{{ $edit->university_contact }}">
                        </div>

                        <div class="form-group">
                            <label for="uniName">University Max Seat</label>
                            <input type="text" name="uni_seat" class="form-control" value="{{ $edit->uni_seat }}">
                        </div>

                        <div class="form-group">
                            <label for="uniCategory">University Status</label>
                            <select class="form-control" name="status">
                                <option value="{{ $edit->status }}">@if($edit->status==1)Active @else Inactive @endif</option>
                                <option>--------</option>
                                @if($edit->status==1)
                                    <option value="0">Inactive</option>
                                @else
                                    <option value="1">Active</option>
                                @endif

                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                    </form>

                </div>
            </div>

            <a href="{{ route('all.universities') }}" class="btn btn-primary" style="float: right">Back</a>

        </div>

    </div>

@endsection
