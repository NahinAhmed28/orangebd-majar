<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Center;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

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

    public function adminProfile(){

        $data = [
            'admin' => auth()->guard('admin')->user(),
            'centers' =>Center::where('status', 1)->get(),
            'usertypes' =>UserType::where('status', 1)->get(),
            'pageTitle' => 'Admin List',
        ];

//        dd($data);

        return view('admin.admins.profile', $data);
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

            'email' =>'required',
            'contact' => 'required|max:255',
            'address_en' => 'required',
            'address_bn' => 'required',
            'center_id' => 'required',
            'usertype_id' => 'required',
            'title_en' =>  'required',
            'title_bn' =>  'required',
        ]);

        $admin = Admin::orderBy('id','DESC')->first();
        $data = $request->except('_token');
        array_walk_recursive($data, function (&$val) {
            $val = trim($val);
            $val = is_string($val) && $val === '' ? null : $val;
        });

        if (!$request->code) {
            if ($admin) {
                $data['code'] =$admin->code + 1;
            } else {
                $data['code'] = 10000;
            }
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'admin' . time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('assets/uploads/admins')) {
                mkdir('assets/uploads/admins', 0777, true);
            }
            $image->move('assets/uploads/admins', $imageFileName);
            Image::make('assets/uploads/admins/'.$imageFileName)->resize(400,400)->save('assets/uploads/admins/'.$imageFileName);
        } else {
            $imageFileName = 'default_logo.png';
        }

        $data = Admin::create([
            'code' => $data['code'],
            'username' => $data['code'],
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
            'image' => $imageFileName,
        ]);

        return redirect()->back()->with('success','Admin added successfully.');
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
        $adminImageFileName = $admin->image;
        if ($request->hasFile('image')){
            $adminImage = $request->file('image');
            $adminImageFileName = 'admin'.time() . '.' . $adminImage->getClientOriginalExtension();


            if (!file_exists('assets/uploads/admins')){
                mkdir('assets/uploads/admins', 0777, true);
            }

            //delete old image if exist
            if (file_exists('assets/uploads/admins/'.$admin->image) and $admin->image != 'default.png'){
                unlink('assets/uploads/admins/'.$admin->image);
            }
            $adminImage->move('assets/uploads/admins', $adminImageFileName);
            Image::make('assets/uploads/admins/'.$adminImageFileName)->resize(1000,800)->save('assets/uploads/admins/'.$adminImageFileName);
        }

        $request->validate([
            'email' =>'required',
            'contact' => 'required',
            'address_en' => 'required',
            'address_bn' => 'required',
            'center_id' => 'required',
            'usertype_id' => 'required',
        ]);

        $admin->update([
            'email' => $request->email,
            'contact' => $request->contact,
            'address_en' => $request->address_en,
            'address_bn' => $request->address_bn,
            'center_id' => $request->center_id,
            'usertype_id' => $request->usertype_id,
            'status' => $request->status,
            'password' => Hash::make($request['password']),
            'email_verified_at' => now(),
            'image' => $adminImageFileName,
        ]);


        return redirect()->back()->with('success','Admin updated successfully.');
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
        return redirect()->back()->with('success','Admin deleted successfully.');
    }
}
