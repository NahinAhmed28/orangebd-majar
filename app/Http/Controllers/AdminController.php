<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Center;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [
            'admins' => Admin::get()->toQuery()->paginate(50),
            'pageTitle' => 'Admin List',
        ];


        return view('admin.admins.index', $data);
    }

    public function dashboard(){
        return view('admin.layouts.default');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */



    public function create()
    {
        $data = [
            'pageTitle' => 'Admin Create',
            'centers' =>Center::where('status', 1)->get(),
            'usertypes' =>UserType::where('status', 1)->get(),
        ];
        return view('admin.admins.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'code' => 'required',
            'email' =>'required',
            'contact' => 'required|max:255',
            'address_en' => 'required',
            'address_bn' => 'required',
            'center_id' => 'required',
            'usertype_id' => 'required',
            'title_en' =>  'required',
            'title_bn' =>  'required',
        ]);

        $data = Admin::create([
            'code' => $request->code,
            'username' => $request->username,
            'email' => $request->email,
            'title_en' => $request->title_en,
            'title_bn' => $request->title_bn,
            'contact' => $request->contact,
            'address_en' => $request->address_en,
            'address_bn' => $request->address_bn,
            'center_id' => $request->center_id,
            'usertype_id' => $request->usertype_id,
            'status' => $request->status,
            'password' => Hash::make($request['password']),
            'email_verified_at' => now(),
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $data = [
            'pageTitle' => 'Admin Edit',
            'admin' =>  Admin::find($id),
            'centers' =>Center::where('status', 1)->get(),
            'usertypes' =>UserType::where('status', 1)->get(),
        ];

        return view('admin.admins.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'username' => 'required',
            'code' => 'required',
            'email' =>'required',
            'contact' => 'required',
            'address_en' => 'required',
            'address_bn' => 'required',
            'center_id' => 'required',
            'usertype_id' => 'required',
        ]);

        $admin->update([
            'code' => $request->code,
            'username' => $request->username,
            'email' => $request->email,
            'contact' => $request->contact,
            'address_en' => $request->address_en,
            'address_bn' => $request->address_bn,
            'center_id' => $request->center_id,
            'usertype_id' => $request->usertype_id,
            'status' => $request->status,
            'password' => Hash::make($request['password']),
            'email_verified_at' => now(),
        ]);


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect()->back();
    }
}
