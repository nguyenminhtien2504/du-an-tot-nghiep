<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function listMember(){
        return view('admin.Members.index');
    }

    public function addMember(){
        return view('admin.Members.create-member');
    }

    public function editMember(){
        return view('admin.Members.edit-member');
    }
}
