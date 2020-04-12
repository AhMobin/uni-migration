@extends('layouts.app')

@section('content')

    @php


    @endphp

    <div class="row">
        <div class="col-md-12">
            <div class="x_content">
                <form action="{{ route('admission.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="x_title">
                                <h3 class="text-center">University Choice</h3>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label for="firstChoice">First Choice</label>
                                    <select name="first_choice" class="form-control">
                                        @foreach($alluni as $uni)
                                            <option value="{{ $uni->university_name }}">{{ $uni->university_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="secondChoice">Second Choice</label>
                                    <select name="second_choice" class="form-control">
                                        @foreach($alluni as $uni)
                                            <option value="{{ $uni->university_name }}">{{ $uni->university_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="thirdChoice">Third Choice</label>
                                    <select name="third_choice" class="form-control">
                                        @foreach($alluni as $uni)
                                            <option value="{{ $uni->university_name }}">{{ $uni->university_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-2">
                            <div class="x_title">
                                <h3 class="text-center">Admission Fee (100TK)</h3>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label for="merchandiseNumber">bKash Merchandise Number</label>
                                    <input type="tel" value="{{ '01564589744' }}" class="form-control" disabled readonly>
                                </div>

                                <div class="form-group">
                                    <label for="paymentNumber">bKash Merchandise Number</label>
                                    <input type="tel" name="payment_number" class="form-control" required placeholder="Your Payment Sending Number">
                                </div>

                                <div class="form-group">
                                    <label for="trasactionID">bKash Transaction ID</label>
                                    <input type="text" name="payment_trx_id" class="form-control" placeholder="Payment TrxID">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
