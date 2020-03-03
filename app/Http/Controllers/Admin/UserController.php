<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function handleForm(Request $request, User $user, array $rules = []){
        $request->validate($rules);

        $user->fill($request->all());
        $user->save();

        return redirect()->route('admin.user.index');
    }

    function profile(){
        return view('admin.pages.users.profile', [
            'title' => 'Profile',
            'user' => Auth::user()
        ]);
    }

    function password(Request $request){

        /**
         * @var User $user
         */
        $user = Auth::user();

        $this->handleForm($request, $user, [
            'password' => $user->rules['password']
        ]);

        Auth::logout();
        return redirect()->route('admin.home');
    }

    public function index()
    {
        $this->authorize('view-any', User::class);

        return view('admin.pages.users.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        $this->authorize('create', User::class);
        return view('admin.pages.users.create', [
            'title' => 'Create user'
        ]);
    }

    public function store(Request $request)
    {
        $this->authorize('create', User::class);
        return $this->handleForm($request, $user = new User(), $user->rules );
    }

    public function show(User $user)
    {
        $this->authorize('view', $user);
        return view('admin.pages.users.show', [
            'title' => $user->username,
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('admin.pages.users.update', [
            'title' => 'Update ' . $user->username,
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $rules = array_diff_key($user->rules, [
            'password' => null,
            'username' => null
        ]);

        return $this->handleForm($request, $user, $rules);
    }

    public function editPassword(User $user){
        return view('admin.pages.users.password', [
           'title' => 'Change ' . $user->username . ' password',
            'user' => $user
        ]);
    }

    public function updatePassword(Request $request, User $user){
        $this->authorize('update', $user);
        return $this->handleForm($request, $user, [
            'password' => $user->rules['password']
        ]);
    }

    public function destroy(User $user)
    {
        $this->authorize('delete', $user);

        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
