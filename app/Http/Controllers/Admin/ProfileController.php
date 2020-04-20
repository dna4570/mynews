<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public functiom add()
    {
        return view('admin.profile.create');
    }

    public functiom create()
    {
        return rwdirect('admin.profile.create');
    }

    public functiom edit()
    {
        return view('admin.profile.edit');
    }

    public functiom update()
    {
        return redirect('admin.profile.edit');
    }
}
