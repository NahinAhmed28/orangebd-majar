<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Center;
use App\Models\District;
use App\Models\Division;
use App\Models\Upazila;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [
            'centers' => Center::get()->toQuery()->paginate(5),
            'pageTitle' => 'Center List',
        ];
        return view('admin.centers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $data = [
            'pageTitle' => 'Center Create',
            'associations' =>Association::where('status', 1)->get(),
            'divisions' =>Division::where('status', 1)->get(),
            'districts' =>District::where('status', 1)->get(),
            'upazilas' =>Upazila::where('status', 1)->get(),
        ];
        return view('admin.centers.create', $data);
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
            'title_en' => 'required',
            'title_bn' =>'required',
            'status' => 'required',
            'address_en' => 'required',
            'address_bn' => 'required',
            'association_id' => 'required',
            'division_id' => 'required',
            'district_id' => 'required',
            'upazila_id' => 'required',
        ]);

        $center = Center::orderBy('id','DESC')->first();
        $data = $request->except('_token');
        array_walk_recursive($data, function (&$val) {
            $val = trim($val);
            $val = is_string($val) && $val === '' ? null : $val;
        });

        if (!$request->code) {
            if ($center) {
                $data['code'] = (str_pad(($center->code + 1), 3, '0', STR_PAD_LEFT));
            } else {
                $data['code'] = str_pad(1, 3, '0', STR_PAD_LEFT);
            }
        }

        $data = Center::create([
            'title_en' => $request->title_en,
            'title_bn' => $request->title_bn,
            'status' => $request->status,
            'code' => $data['code'],
            'address_en' => $request->address_en,
            'address_bn' => $request->address_bn,
            'association_id' => $request->association_id,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'upazila_id' => $request->upazila_id,
        ]);

        return redirect()->back()->with('success','Center created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function show(Center $center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $data = [
            'pageTitle' => 'Center Edit',
            'center' =>  Center::find($id),
            'divisions' =>Division::where('status', 1)->get(),
            'districts' =>District::where('status', 1)->get(),
            'upazilas' =>Upazila::where('status', 1)->get(),
            'associations' =>Association::where('status', 1)->get(),

        ];

        return view('admin.centers.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Center $center)
    {

        $request->validate([
            'title_en' => 'required',
            'title_bn' =>'required',
            'status' => 'required',
            'address_en' => 'required',
            'address_bn' => 'required',
            'association_id' => 'required',
            'division_id' => 'required',
            'district_id' => 'required',
            'upazila_id' => 'required',
        ]);

        $center->update([
            'title_en' => $request->title_en,
            'title_bn' => $request->title_bn,
            'status' => $request->status,
            'address_en' => $request->address_en,
            'address_bn' => $request->address_bn,
            'association_id' => $request->association_id,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'upazila_id' => $request->upazila_id,
        ]);


        return redirect()->back()->with('success','Center updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Center  $center
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Center::destroy($id);
        return redirect()->back()->with('success','Center deleted successfully.');
    }
}
