@extends('admin.admin_layouts')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>All Projects</h2>
                    <a href="#" class="btn btn-sm btn-danger my-2" style="float: right" data-toggle="modal" data-target="#modal">Add University</a>
                    <div class="clearfix"></div>
                </div>

                @error('university_name')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:red">{{ $message }}</strong>
                </span>
                @enderror

                <div class="x_content">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>University Name</th>
                            <th>University Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($universities as $uni)
                            <tr>
                                <th>{{ $uni->id }}</th>
                                <td>{{ $uni->university_name }}</td>
                                <td>{{ $uni->category_name }}</td>
                                <td>
                                    @if($uni->status == 1)
                                        <span class="badge badge-active">active</span>
                                    @else
                                        <span class="badge badge-danger">inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary" title="Edit"><i class="fa fa-edit"></i></a>
                                    @if($uni->status == 1)
                                        <a href="#" class="btn btn-warning" title="Inactive Now"><i class="fa fa-thumbs-down"></i></a>
                                    @else
                                        <a href="#" class="btn btn-success" title="Active Now"><i class="fa fa-thumbs-up"></i></a>
                                    @endif
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

    <!-- add-new button model -->
    <div id="modal" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-lg">
                <div class="modal-header pd-x-20">
                    <h2 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">University Add</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('store.university') }}" method="post">
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="universityName">University Name</label>
                            <input type="text" class="form-control @error('university_name') is-invalid @enderror" name="university_name">
                        </div>
                        <div class="form-group">
                            <label for="universityCategory">Select University Category</label>
                            <select name="unicategory_id" class="form-control">
                                <option value="null">--select a category</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat -> category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="universityContact">University Contact</label>
                            <input type="text" class="form-control" name="university_contact">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info pd-x-20">Add Now</button>
                    </div>
                </form>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->

@endsection
