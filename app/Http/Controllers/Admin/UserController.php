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

  }

  public function store(StoreUserReqeust $request)
  {

  }

  public function show(User $user)
  {

  }

  public function edit(User $user)
  {

  }

  public function update(UpdateUserRequest $request, User $user)
  {

  }

  public function destory(User $user)
  {
    
  }
}
