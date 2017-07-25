<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersQuery = \App\Models\User::query()->with(['position', 'holidays']);

        if (request()->has('name')) {
            $usersQuery->where('name', 'LIKE', '%' . request('name') . '%')->paginate(10);
        }
        
        if (request()->has('email')) {
            $usersQuery->where('email', 'LIKE', '%'. request('email') . '%');
        }

        if (request()->has('is_blocked')) {
            $usersQuery->where('is_blocked', request('is_blocked') == 0 ? 0 : 1);
        }

        if (request()->has('position_id')) {
            $usersQuery->where('position_id', request('position_id'));
        }

        if (request()->has('orderBy')) {
            $usersQuery->orderBy(request('orderBy'), request('orderDir'));
        }

        $users = $usersQuery->paginate(10)
            ->appends(request()->only('is_blocked', 'name', 'email', 'position_id', 'orderBy', 'orderDir'));
        
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for add a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('users.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new \App\Models\User;
        $user->name = Input::get('name');
        $user->name_r = Input::get('name_r');
        $user->email = Input::get('email');
        $user->position_id = Input::get('position_id');
        $user->role = Input::get('role');
        $user->address = Input::get('address');
        $user->is_blocked = Input::has('is_blocked');
        $user->password = Input::get('password');
        $user->save();

        return redirect()->route('users.show', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \App\Models\User::findOrFail($id);
        
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $errors = \Session::get('errors');

        return view('users.edit', ['user' => $user, 'errors' => $errors]);
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = \App\Models\User::findOrFail($id);

        return view('users.delete', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateUser $request, $id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->name = $request->get('name');
        $user->name_r = $request->get('name_r');
        $user->email = $request->get('email');
        $user->position_id = $request->get('position_id');
        $user->address = $request->get('address');
        $user->role = $request->get('role');
        $user->is_blocked = $request->has('is_blocked');
        $user->save();

        return redirect()->route('users.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\Models\User::findOrFail($id)->delete();

        return redirect()->route('users.index');
    }

    public function personal()
    {
        return view('users.personal');
    }

    public function sort() 
    {
        $collection = \App\Models\User::all();
        $users = $collection->sortBy('name');
        $users->values()->all();

        return view('users.index', ['users' => $users]);
    }
}
