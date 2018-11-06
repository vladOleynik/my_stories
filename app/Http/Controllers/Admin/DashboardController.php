<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * [dashboard description]
   * @return [type] [description]
   */
    public function dashboard (){

      return view('admin.dashboard');
    }
}
