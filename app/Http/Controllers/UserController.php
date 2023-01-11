<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Center;
use App\Models\District;
use App\Models\Division;
use App\Models\Upazila;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [
            'users' => User::get()->toQuery()->paginate(50),
            'pageTitle' => 'Murid List',
        ];


        return view('admin.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $data = [
            'pageTitle' => 'User Create',
            'centers' =>Center::where('status', 1)->get(),
        ];
        return view('admin.users.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        dd($request->all());

        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'email' =>'required',
            'contact' => 'required|max:255',
            'address_en' => 'required',
            'address_bn' => 'required',
            'center_id' => 'required',
        ]);

        $data = User::create([
            'code' => $request->code,
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'address_en' => $request->address_en,
            'address_bn' => $request->address_bn,
            'center_id' => $request->center_id,
            'status' => $request->status,
            'password' => Hash::make($request['password']),
            'email_verified_at' => now(),
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $data = [
            'pageTitle' => 'User Edit',
            'user' =>  User::find($id),
            'centers' =>Center::where('status', 1)->get(),
        ];

        return view('admin.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {

//        dd($request->all());

        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'email' =>'required',
            'contact' => 'required',
            'address_en' => 'required',
            'address_bn' => 'required',
            'center_id' => 'required',
        ]);

        $user->update([
            'code' => $request->code,
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'address_en' => $request->address_en,
            'address_bn' => $request->address_bn,
            'center_id' => $request->center_id,
            'status' => $request->status,
            'password' => Hash::make($request['password']),
        ]);


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back();
    }
}
