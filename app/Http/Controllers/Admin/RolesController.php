<?php

namespace Pichai\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Pichai\Http\Controllers\Controller;
use Pichai\Http\Requests\StoreRole;
use Pichai\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $role = Role::orderBy('name', 'desc')->paginate();

        return view('role.index')->with(['role' => $role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO search role name
        if ($this->searchRoleIsUnique(strtolower($request->name)) == true) {
            return redirect()->back();
        }

        $role = new Role();
        $role->name = strtolower(trim($request->name));
        $role->description = trim($request->description);
        $role->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $role = Role::findOrFail($id);

        return view('role.edit')->with(['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRole $request, $id)
    {
        //
        $role = Role::findOrFail($id);
        $role->name = strtolower(trim($request->name));
        $role->description =$request->description;
        $role->save();

        return redirect()->back();
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
        $role = Role::find($id);

        if(!empty($role->roleUsers)){
            return redirect()->back();
        }

        $role->delete();

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param $page
     */
    public function search(Request $request, $page)
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

        $role = Role::searchName($search)->paginate();

//        return view('admin.index', ['role' => $role]);
    }

    protected function searchRoleIsUnique($name)
    {
        return (Role::searchName($name)->count() != 0) ? true : false;
    }
}
