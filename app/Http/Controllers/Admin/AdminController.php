<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Requests\StroreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->authorizeResource(Admin::class, 'admin');
  }

  public function index()
  {
    $models = Admin::paginate();
        \Debugbar::info($models);
        
    return view(
      "admin.admins.index", [
        'models' => $models,
      ]
    );
  }

  public function create()
  {

  }

  public function store(StoreAdminRequest $request)
  {

  }

  public function show(Admin $admin)
  {

  }

  public function edit(Admin $admin)
  {

  }

  public function update(UpdateAdminRequest $request, Admin $admin)
  {

  }

  public function destory(Admin $admin)
  {
    
  }
}
