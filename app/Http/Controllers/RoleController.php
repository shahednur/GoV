<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Role;
use App\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('manage.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('manage.roles.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
         'display_name'=>'required|max:255',
         'name'=>'required|max:100|unique:roles,name',
         'description'=>'required|max:255'
        ]);
        $role = new Role();
        $role->display_name = $request->display_name;
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();

        Session::flash('success','Successfully created the new'.$role->dispaly_name.' role in the database.');
        return redirect()->route('role.show',$id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $roles=DB::table('roles')
        // ->join('permissions', function ($join) {
        //     $join->on('permission_role.role_id', '=', 'permission_role.permission_id')
        //          ->select('permissions.*','roles.name as n','roles.display_name as dn')
        //          ->where('roles.id', '=','id');
        // })
        // ->get();
        // $roles = DB::table('permissions')
        //                 ->join('roles','products.category_id','=','categories.id')
        //                 ->select('products.*','categories.name as names')
        //                 ->get();
        // $permissions = Permission::all();
        $role = Role::where('id','=',$id)->get()->first();
        return view('manage.roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $permissions = Permission::all();
        $role = Role::where('id','=',$id)->get()->first();
        return view('manage.roles.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
         'display_name'=>'required|max:255',
         'description'=>'sometimes|max:255'
        ]);

        $role = Role::findOrFail($id);
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->save();
        
        Session::flash('success','Successfully updated the '.$role->dispaly_name.' role in the database.');
        return redirect()->route('role.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
