<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->authorizeResource(User::class, 'user');
  }

  public function index()
  {
    $models = User::paginate();
        \Debugbar::info($models);
        
    return view(
      "admin.users.index",
      [
        'models' => $models,
      ]
    );
  }

  public function create()
  {
    return view(
        "admin.users.create" ,
        [
        ]
    );
  }

  public function store(StoreUserReqeust $request)
  {
    $validated = $request->validated();
    $validated['password'] = bcrypt($validated['password']);

    $admin = User::create($validated);

    return redirect('admin/users/')->with('success', 'User Created Successfully.');
  }

  public function show(User $user)
  {
    return view(
        "admin.users.show" ,
        [
            'model' => $user 
        ]
    );
  }

  public function edit(User $user)
  {
    return view(
        "admin.users.edit" ,
        [
            'model' => $user 

        ]
    );
  }

  public function update(UpdateUserRequest $request, User $user)
  {
    $validated = $request->validated();

    $user->name  = $request->name;
    $user->email = $request->email;
    $user->save();

    return redirect('admin/users/'.$user->id)->with('success', 'User Updated Successfully.');
  }

  public function destroy(User $user)
  {
    $user->delete();
    return redirect('admin/users')->with('success', 'User Removed Successfully.');
  }
}
