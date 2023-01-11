<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
//use Yajra\DataTables\Facades\DataTables;

class AssociationController extends Controller
{
//    public $model;
//    protected $redirectUrl;
//    const moduleDirectory = 'admin.associations.';
//
//    public function __construct(Association $association){
//        $this->redirectUrl = 'admin/associations';
//        $this->model = $association;
//
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {

        $data = [
            'associations' => Association::get()->toQuery()->paginate(5),
            'pageTitle' => 'Association List',
        ];
        return view('admin.associations.index', $data);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $data = [
            'pageTitle' => 'Association Create',
        ];
        return view('admin.associations.create', $data);
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
            'title_en' => 'required',
            'title_bn' =>'required',
            'status' => 'required',
        ]);

        $data = Association::create([
            'title_en' => $request->title_en,
            'title_bn' => $request->title_bn,
            'status' => $request->status,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function show(Association $association)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $data = [
            'pageTitle' => 'Association Edit',
            'association' =>  Association::find($id),
        ];

        return view('admin.associations.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Association $association)
    {
        $request->validate([
            'title_en' => 'required',
            'title_bn' =>'required',
            'status' => 'required',
        ]);

        $association->update([
            'title_en' => $request->title_en,
            'title_bn' => $request->title_bn,
            'status' => $request->status,
        ]);


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Association::destroy($id);
        return redirect()->back();
    }
}
