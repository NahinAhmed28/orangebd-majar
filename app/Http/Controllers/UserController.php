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
use Intervention\Image\Facades\Image;
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

    public function userRegister()
    {
        $data = [
            'pageTitle' => 'User Create',
            'centers' =>Center::where('status', 1)->get(),
        ];
        return view('user.register', $data);
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
            'title_en' => 'required',
            'title_bn' => 'required',
            'center_id' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'user' . time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('assets/uploads/users')) {
                mkdir('assets/uploads/users', 0777, true);
            }
            $image->move('assets/uploads/users', $imageFileName);
            Image::make('assets/uploads/users/'.$imageFileName)->resize(400,400)->save('assets/uploads/user/'.$imageFileName);
        } else {
            $imageFileName = 'default_logo.png';
        }


        $data = User::create([
            'code' => $request->code,
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'address_en' => $request->address_en,
            'address_bn' => $request->address_bn,
            'title_en' => $request->title_en,
            'title_bn' => $request->title_bn,
            'center_id' => $request->center_id,
            'status' => $request->status,
            'image' => $imageFileName,
            'password' => Hash::make($request['password']),
            'email_verified_at' => now(),
        ]);

        return redirect()->back()->with('success','User added successfully.');
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
            'title_en' => 'required',
            'title_bn' => 'required',
            'center_id' => 'required',
//            'image' => 'required',
        ]);

        $userImageFileName = $user->image;
        if ($request->hasFile('image')){
            $userImage = $request->file('image');
            $userImageFileName = 'user'.time() . '.' . $userImage->getClientOriginalExtension();


            if (!file_exists('assets/uploads/users')){
                mkdir('assets/uploads/users', 0777, true);
            }

            //delete old image if exist
            if (file_exists('assets/uploads/users/'.$user->image) and $user->image != 'default.png'){
                unlink('assets/uploads/users/'.$user->image);
            }
            $userImage->move('assets/uploads/users', $userImageFileName);
            Image::make('assets/uploads/users/'.$userImageFileName)->resize(1000,800)->save('assets/uploads/users/'.$userImageFileName);
        }

        $user->update([
            'image' => $userImageFileName,
            'code' => $request->code,
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'address_en' => $request->address_en,
            'address_bn' => $request->address_bn,
            'title_en' => $request->title_en,
            'title_bn' => $request->title_bn,
            'center_id' => $request->center_id,
            'status' => $request->status,
            'password' => Hash::make($request['password']),
        ]);


        return redirect()->back()->with('success','User updated successfully.');

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
        return redirect()->back()->with('success','User deleted successfully.');
    }
}
