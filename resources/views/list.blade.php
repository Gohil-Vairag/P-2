@extends('layouts.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>list</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_content">
                            {{-- <h1>list</h1><a href="{{ url('/') }}">ragister</a> --}}
                            <table class="table table-striped">
                                <thead>
                                    <td>no</td>
                                    <td>name</td>
                                    <td>mo_no</td>
                                    <td>email</td>
                                    <td>gender</td>
                                    <td>hobby</td>
                                    <td>married</td>
                                    <td>bod</td>
                                    <td>image</td>
                                    {{-- <td>password</td> --}}
                                    <td>address</td>
                                    <td>Action</td>
                                </thead>
                                <tbody>
                                    @foreach ($works as $key => $work)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $work->name }}</td>
                                            <td>{{ $work->mo_no }}</td>
                                            <td>{{ $work->email }}</td>
                                            <td>{{ $work->gender }}</td>
                                            <td>{{ $work->hobby }}</td>
                                            <td>{{ $work->married }}</td>
                                            <td>{{ $work->bod }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/' . $work->image) }}" height="100"
                                                    width="100">
                                            </td>
                                            {{-- <td>{{$work->password}}</td> --}}
                                            <td>{{ $work->address }}</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ url('edit/' . $work->id) }}">Edit</a>
                                                <a class="btn btn-danger" href="{{ url('delete/' . $work->id) }}">Delete</a>
                                                    <button class="delete-work btn btn-danger">Delete Ajax</button>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '.delete-user', function() {

            var u_id = $(this).data('u_id');
            var $this = $(this);
            $.ajax({
                type: "GET",
                url: "{{ route('work.delete.ajax') }}",
                data: {u_id: u_id},
                success: function(res) {
                    $this.parents('tr').hide();
                }
            })
        })
    </script> --}}
@endsection
