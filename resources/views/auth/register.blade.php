@extends('layouts.master')

@section('content')

    <div class="x_title">
        <h2 class="text-center">Student Sign Up</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="studentName">Student Full Name</label>
                        <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" required autocomplete="full_name" autofocus>
                        @error('full_name')
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="studentPhone">Student Phone Number</label>
                        <input type="tel" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" required autocomplete="phone_number" autofocus>
                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="studentEmail">Student Email Address</label>
                        <input type="email" name="email_address" class="form-control @error('email_address') is-invalid @enderror" required autocomplete="email_address" autofocus>
                        @error('email_address')
                        <span class="invalid-feedback" role="alert">
                                <strong style="color: red">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="retypePassword">Re-type Password</label>
                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Sign Up</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection
