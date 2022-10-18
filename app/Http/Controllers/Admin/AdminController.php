<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
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
    $types = config('app_admin.admin_types');
        
    return view(
        "admin.admins.create" ,
        [
            'types' => $types
        ]
    );
  }

  public function store(StoreAdminRequest $request)
  {
    $validated = $request->validated();
    $validated['password'] = bcrypt($validated['password']);

    $admin = Admin::create($validated);

    return redirect('admin/admins/')->with('success', 'Admin Created Successfully.');
  }

  public function show(Admin $admin)
  {
    $types = config('app_admin.admin_types');
        
    return view(
        "admin.admins.show" ,
        [
            'model' => $admin ,
            'types' => $types

        ]
    );
  }

  public function edit(Admin $admin)
  {
    $types = config('app_admin.admin_types');
    return view(
        "admin.admins.edit" ,
        [
            'model' => $admin ,
            'types' => $types

        ]
    );
  }

  public function update(UpdateAdminRequest $request, Admin $admin)
  {
    $validated = $request->validated();

    $admin->name = $request->name;
    $admin->email = $request->email;
    $admin->type = $request->type;
    $admin->save();

    return redirect('admin/admins/'.$admin->id)->with('success', 'Admin Updated Successfully.');
  }

  public function destroy(Admin $admin)
  {
    $admin->delete();
    return redirect('admin/admins')->with('success', 'Admin Removed Successfully.');
  }
}
