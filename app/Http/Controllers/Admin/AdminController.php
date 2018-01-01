<?php

namespace Pichai\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Pichai\Http\Controllers\Controller;
use Pichai\Admins as Admin;
// use \Illuminate\Pagination\Paginator as Paginator;
use Pichai\Http\Requests\StoreAdmins;

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
        $adminAll = Admin::paginate();


        return view('admin.index', ['adminAll'=>$adminAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdmins $request)
    {
        //TODO create validation
        $validatedData = Validator::make($request->all());

        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData->errors());
        }

        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //TODO Model
        $admin = Admin::find($id);
        // dd($admin);

        return view('admin.show', ['admin' => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $admin = Admin::find($id);
        
        return view('admin.edit', ['admin'=>$admin]);
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
        //
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

    public function search(Request $request, $page = 1)
    {
        $search = $request->input('search');

        // TODO Paginator
        /* Paginator::currentPageResolver(function () use ($page) {
            return $page;
        }); */

        # going to next page is not working yet
        $adminAll = Admin::searchName($search)->paginate();

        return view('admin.index', ['adminAll'=>$adminAll]);
    }
}
