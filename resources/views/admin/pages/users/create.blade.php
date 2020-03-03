@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-lg-4">

            @include('admin.blocks.errors')

            <div class="card card-body">
                <form action="{{ route('admin.user.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" class="form-control" name="username"
                               placeholder="Enter username...">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" name="password"
                               placeholder="Enter password...">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm password</label>
                        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                               placeholder="Enter password again...">
                    </div>

                    <div class="form-group">
                        <input type="checkbox" id="superadmin" name="superadmin" value="1" >
                        <label for="superadmin">Super admin</label>
                    </div>

                    <button class="btn btn-success" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>


@endsection