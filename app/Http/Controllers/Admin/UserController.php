<?php

namespace Pichai\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Pichai\Http\Controllers\Controller;
use Pichai\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::paginate();
        return view('user.index')->with(['user' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::find($id);

        return view('user.show')->with(['user'=>$user]);
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

        return view('user.edit');
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
        //
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
        User::find($id)->delete;

        return redirect()->route('admin.user.home');
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

        // Get query in function 'scopeSearchName'
        $users = User::SearchName($search)->paginate();

        return view('user.index')->with(['user' => $users]);
    }

}
