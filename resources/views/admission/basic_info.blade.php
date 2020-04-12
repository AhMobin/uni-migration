@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="x_content">
                <form action="{{ route('student.basic.info') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="x_title">
                                <h3 class="text-center">
                                    SSC Information
                                </h3>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label for="sscRoll">SSC Roll Number</label>
                                    <input type="number" name="ssc_roll" placeholder="Your SSC Roll Number" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="sscBoard">SSC Board</label>
                                    <select name="ssc_board" class="form-control">
                                        <option value="dhaka">Dhaka</option>
                                        <option value="chittagang">Chittagang</option>
                                        <option value="comilla">Comilla</option>
                                        <option value="rajshahi">Rajshahi</option>
                                        <option value="rangpur">Rangpur</option>
                                        <option value="khulna">Khulna</option>
                                        <option value="barishal">Barishal</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sscGroup">SSC Group</label>
                                    <select name="ssc_group" class="form-control">
                                        <option value="science">Science</option>
                                        <option value="commerce">Commerce</option>
                                        <option value="arts">Arts</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sscResult">SSC Result</label>
                                    <input type="text" name="ssc_result" placeholder="Your SSC GPA Result" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="sscYear">SSC Passing Year</label>
                                    <input type="text" name="ssc_year" placeholder="Your SSC Passing Year" class="form-control">
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="x_title">
                                <h3 class="text-center">
                                    HSC Information
                                </h3>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label for="hscRoll">HSC Roll Number</label>
                                    <input type="number" name="hsc_roll" placeholder="Your HSC Roll Number" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="hscRoll">HSC Roll Number</label>
                                    <input type="number" name="hsc_registration" placeholder="Your HSC Roll Number" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="hscBoard">HSC Board</label>
                                    <select name="hsc_board" class="form-control">
                                        <option value="dhaka">Dhaka</option>
                                        <option value="chittagang">Chittagang</option>
                                        <option value="comilla">Comilla</option>
                                        <option value="rajshahi">Rajshahi</option>
                                        <option value="rangpur">Rangpur</option>
                                        <option value="khulna">Khulna</option>
                                        <option value="barishal">Barishal</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="hscGroup">HSC Group</label>
                                    <select name="hsc_group" class="form-control">
                                        <option value="science">Science</option>
                                        <option value="commerce">Commerce</option>
                                        <option value="arts">Arts</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="hscResult">HSC Result</label>
                                    <input type="text" name="hsc_result" placeholder="Your HSC GPA Result" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="hscYear">HSC Passing Year</label>
                                    <input type="text" name="hsc_year" placeholder="Your HSC Passing Year" class="form-control">
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
