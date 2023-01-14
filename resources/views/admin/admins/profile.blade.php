@extends('admin.layouts.default')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            Image: <br>
            Code: {{$admin->code}} <br>
            Name: {{$admin->username}} <br>
        </div>
        <div class="col-md-8">
            Title En: {{$admin->title_en}} <br>
            Title Bn: {{$admin->title_bn}} <br>
            Email: {{$admin->email}} <br>
            Contact: {{$admin->contact}} <br>
            Address En: {{$admin->address_en}} <br>
            Address Bn: {{$admin->address_bn}} <br>
            Status: {{$admin->status == 1 ? 'Active' : 'Inactive'}} <br>
        </div>
    </div>
@endsection

