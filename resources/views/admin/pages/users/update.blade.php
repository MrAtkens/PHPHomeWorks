@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-lg-4">

            @include('admin.blocks.errors')

            <div class="card card-body">
                <form action="{{ route('admin.user.update', $user) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" class="form-control" name="username"
                               placeholder="Enter username..." value="{{ old('username') ?? $user->username }}">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="superadmin" value="0">
                        <input type="checkbox" id="superadmin" name="superadmin" value="1"
                                {{ (old('superadmin') ?? $user->superadmin) ? 'checked' : '' }}>
                        <label for="superadmin">Super admin</label>
                    </div>

                    <button class="btn btn-success" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection