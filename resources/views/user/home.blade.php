@extends('user.layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">My Profile</h4>
            </div>

            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                             Image: <br>
                             Code: {{$user->code}} <br>
                             Name: {{$user->name}} <br>
                    </div>
                    <div class="col-md-8">
                         Title En: {{$user->title_en}} <br>
                         Title Bn: {{$user->title_bn}} <br>
                         Email: {{$user->email}} <br>
                         Contact: {{$user->contact}} <br>
                         Address En: {{$user->address_en}} <br>
                         Address Bn: {{$user->address_bn}} <br>
                         Status: {{$user->status == 1 ? 'Active' : 'Inactive'}} <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
