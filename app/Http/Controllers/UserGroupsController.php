<?php

namespace App\Http\Controllers;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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

  public function store( Request $request){

      $formData = $request->all();

      if(Group::create($formData)){
      Session::flash('message','group created successsfully');
      }
      return redirect()->to('groups');
  }

  public function destroy($id){

    

     if( Group::find($id)->delete() ){
      Session::flash('message','group deleted successsfully');
      }
      return redirect()->to('groups');

  }

}