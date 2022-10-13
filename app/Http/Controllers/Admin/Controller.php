<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as AdminBaseController;

class Controller extends AdminBaseController
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }
}
