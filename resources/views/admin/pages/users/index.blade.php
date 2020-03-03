<?php
/**
 * @var \Illuminate\Database\Eloquent\Collection|User[] $users
 */
?>

@extends('admin.layouts.app')

@section('content')
    <div class="card card-body">
        <div class="mb-3">
            <a href="{{ route('admin.user.create') }}" class="btn btn-secondary">Добавить пользователя</a>
        </div>
        <table class="table table-bordered mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Имя пользователя</th>
                <th nowrap style="width: 1%;">Действия</th>
            </tr>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        <a href="{{ route('admin.user.show', $user) }}">
                            {{ $user->username }}
                            @if($user->superadmin)
                                <span class="badge badge-primary">super admin</span>
                            @endif
                        </a>
                    </td>

                    <td>
                        @if($user->username != 'admin' && $user->id != 1)
                            <a href="{{ route('admin.user.edit', $user) }}">Редактировать</a>
                            <a href="{{ route('admin.user.password.edit', $user) }}" class="text-warning">Обновить пароль</a>
                            <a href="{{ route('admin.user.destroy', $user) }}" class="text-danger"
                               onclick="event.preventDefault(); document.getElementById('delete-{{ $user->id }}').submit()">
                                Удалить
                                <form id="delete-{{ $user->id }}" action="{{ route('admin.user.destroy', $user) }}" method="post"
                                      class="d-none" >
                                    @csrf
                                    @method('DELETE')


                                </form>
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection