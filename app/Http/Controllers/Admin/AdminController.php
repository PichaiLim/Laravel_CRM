<?php

namespace Pichai\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Pichai\Http\Controllers\Controller;
use Pichai\Admins as Admin;
use \Illuminate\Pagination\Paginator as Paginator;

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
        echo "hello create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        /* Paginator::currentPageResolver(function () use ($page) {
            return $page;
        }); */

        # going to next page is not working yet
        $adminAll = Admin::where('name', 'like', "%{$search}%")->paginate(3);

        return view('admin.index', ['adminAll'=>$adminAll]);
    }
}
