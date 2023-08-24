@extends('layouts.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    @if (isset($city))
                        <h3>Edit city</h3>
                    @else
                        <h3>Create city</h3>
                    @endif
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_content">
                            <br />
                            <form action="{{ url('city/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="item form-group">
                                    <input type="text" id="name" name="cat_id" value="@if (isset($city)) {{$city->id}} @endif" hidden>

                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="name" name="name" value="@if (isset($city)) {{$city->name}} @endif" class="form-control">
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
@push('scripts')
<script src=""></script>
<script>
    $("#add-city-from").validate({
        rules: {
            name: "required",
        },
        submitHandler: function (form){
            console.log('text');
            from.submit();
        }

    });
</script>
@endpush
