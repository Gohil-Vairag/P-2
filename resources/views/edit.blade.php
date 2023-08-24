@extends('layouts.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Elements</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_content">
                            <br />

                            <form action="{{ url('/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" class="form-control" name="id" value="{{ $work->id }}"
                                    hidden>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name"
                                        value="{{ $work->name }}">Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="email"
                                        value="{{ $work->email }}">email
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="email" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="image"
                                        value="{{ $work->image }}">Image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="file" id="middle-name" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-secondary" data-toggle-class="btn-primary"
                                                data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="male" class="join-btn"
                                                    @if ($work->gendar == 'male') {{ 'checked' }} @endif> &nbsp;
                                                Male &nbsp;
                                            </label>
                                            <label class="btn btn-primary" data-toggle-class="btn-primary"
                                                data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="female" class="join-btn"
                                                    @if ($work->gendar == 'female') {{ 'checked' }} @endif> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="mo_no">mo_no
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="mo_no" id="mo_no" name="mo_no" class="form-control"
                                            value="{{ $work->mo_no }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        {{-- <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                    <script>
                                        function timeFunctionLong(input) {
                                            setTimeout(function() {
                                                input.type = 'text';
                                            }, 60000);
                                        }
                                    </script> --}}
                                        <input type="date" class="form-control" placeholder="bod" id="bod"
                                            name="bod" value="{{ $work->bod }}">

                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">hobby</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        {{-- <select class="form-control"> --}}
                                        <input type="checkbox" id="hobby" name="hobby[]" value="working"
                                            @if ($work->hobby == 'working') {{ 'checked' }} @endif>working
                                        <input type="checkbox" id="hobby" name="hobby[]" value="playing"
                                            @if ($work->hobby == 'playing') {{ 'checked' }} @endif>playing
                                        <input type="checkbox" id="hobby" name="hobby[]" value="sleeping"
                                            @if ($work->hobby == 'sleeping') {{ 'checked' }} @endif>sleeping
                                        <input type="checkbox" id="hobby" name="hobby[]" value="movie"
                                            @if ($work->hobby == 'movie') {{ 'checked' }} @endif>movie
                                        {{-- </select> --}}
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">married</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control">
                                            <option> Choose...</option>
                                            <option value="1"
                                                @if ($work->married == 'married') {{ 'checked' }} @endif>married
                                            </option>
                                            <option value="2"
                                                @if ($work->married == 'unmarried') {{ 'checked' }} @endif></option>
                                            <option value="3"
                                                @if ($work->married == 'engagement') {{ 'checked' }} @endif>engagement
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">city</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control">
                                            <option>Choose option</option>
                                            <option>surat</option>
                                            <option>vapi</option>
                                            <option>kim</option>
                                            <option>vadodra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="address"
                                        value="{{ $work->address }}">address
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="address" id="address" name="address" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="password"
                                        value="{{ $work->password }}">password
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
