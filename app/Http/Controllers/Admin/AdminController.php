<?php

namespace Pichai\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Pichai\Http\Controllers\Controller;
use Pichai\Admins as Admin;
use \Illuminate\Pagination\Paginator;
use Pichai\Http\Requests\StoreAdmins as StoreAdmins;
use Pichai\Role;
use Pichai\RoleUsers;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO get all admin user
        $adminAll = Admin::orderBy('id', 'desc')->paginate();


        return view('admin.index', ['adminAll' => $adminAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //TODO request model roles
        $roles = Role::all();
        $roles->id = 1;

        return view('admin.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request|StoreAdmins $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdmins $request)
    {
        // TODO get new object 'Admins' and insert data
        $admin = new Admin;
        $admin->name = (string)trim($request->input('name'));
        $admin->email = (string)trim($request->input('email'));
        $admin->password = (string)bcrypt($request->input('password'));
        $admin->remember_token = str_random(10);
        $admin->save(); // TODO insert data 'Admins'

        // TODO get last id admin
        $adminLastIdNow = $admin->id;

        // TODO get new object 'RoleUsers' and insert data
        $roles = new RoleUsers;
        $roles->role_id = (int)$request->input('roles');
        $roles->user_id = (int)$adminLastIdNow;
        $roles->save(); // TODO insert data


        // TODO redirect
        return redirect()->route('admin.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //TODO Model
        $admin = Admin::find($id);

        return view('admin.show', ['admin' => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $admin = Admin::find($id);

        $roles = Role::all();

        return view('admin.edit', ['admin' => $admin, 'roles' => $roles, 'roleSelected' => $admin->roleUser->role_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //TODO Vlidate input
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:admins,email,' . $id,
            'roles' => 'required|integer|min:1'
        ]);

        $admin = Admin::findOrFail($id);
        $admin->name = trim($request->name);
        $admin->email = trim($request->email);
        $admin->save();

        $roleUser = RoleUsers::findOrFail($request->roleUser);
        $roleUser->user_id = $admin->id;
        $roleUser->role_id = $request->roles;
        $roleUser->save();

        return redirect()->route('admin.show', ['id' => $admin->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request, $page = 1)
    {
        $search = $request->input('search');

        // TODO Check default page
        if (!empty((int)$request->input('page') >= 1)) {
            $page = $request->input('page');
        }

        // TODO Paginator
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        # going to next page is not working yet
        $adminAll = Admin::searchName($search)->paginate(1);

        // goto page ane return model
        return view('admin.index', ['adminAll' => $adminAll]);
    }
}
