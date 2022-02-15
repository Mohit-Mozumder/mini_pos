<?php

namespace App\Http\Controllers;
use App\Models\Group;
use Illuminate\Http\Request;

class UserGroupsController extends Controller
{
     public function index() {
       
     $this->data['groups'] = Group::all();
    //  return $this->data['groups'];
     return view('groups.groups',$this->data);
  }

  public function create(){

    return view('groups.create');
  }

}
