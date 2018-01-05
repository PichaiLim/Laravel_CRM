<?php

namespace Pichai\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Pichai\Http\Controllers\Controller;
use Pichai\Http\Requests\StoreUsers;
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
        // TODO get all users
        $users = User::orderBy('id', 'desc')->paginate();

        return view('user.index')->with(['user' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO new object
        $user = new User;


        return view('user.create')->with(['gender' => $user->enumGender]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsers $request)
    {
        //TODO new object ans insert data
        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = bcrypt($request->password);
        $user->address = trim($request->address);
        $user->phone = (trim($request->phone));
        $user->avatar = null;
        $user->gender = $request->gender;
        $user->remember_token = str_random(10);
        $user->save();

        return redirect()->route('admin.user.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //TODO find get by id
        $user = User::find($id);

        return view('user.show')->with(['user' => $user]);
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
        $user = User::findOrFail($id);

        return view('user.edit')->with(['user' => $user]);
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
        // TODO Validate
        $this->validate($request, [
            'name' => 'required|string|max:150',
            'email' => 'required|email|unique:users,email,' . $id,
            'avatar' => 'mimes:jpeg,gif,png|size:1024',
            'phone' => 'required|min:8',
            'gender' => 'required'
        ]);

        // TODO check id and update data
        $user = User::findOrFail($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = bcrypt($request->password);
        $user->address = trim($request->address);
        $user->phone = (trim($request->phone));
        $user->avatar = null;
        $user->gender = $request->gender;
        $user->save();

        return redirect()->route('admin.user.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //TODO drop data by id
        User::find($id)->delete;

        return redirect()->route('admin.user.home');
    }

    public function search(Request $request, $page = 1)
    {
        $search = $request->input('search');

        // TODO Check default page
        if (!empty((int)$request->input('page') >= 1)) {
            $page = (int)$request->input('page');
        }

        // TODO Paginator
        Paginator::currentPageResolver(function () use ($page) {
            return (int)$page;
        });

        // Get query in function 'scopeSearchName'
        $users = User::SearchName($search)->paginate();

        return view('user.index')->with(['user' => $users]);
    }

}
