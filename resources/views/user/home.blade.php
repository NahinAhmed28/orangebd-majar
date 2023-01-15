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
                             Image:<br>
                        <img class="m--img-rounded m--marginless" style="max-width: 200px" src="{{isset($user->image) ?  asset('assets/uploads/users/'.$user->image)  : 'https://png.pngtree.com/png-vector/20190625/ourmid/pngtree-business-male-user-avatar-vector-png-image_1511454.jpg'}}" alt="User image"> <br>
                    </div>
                    <div class="col-md-8">
                        Code: {{$user->code ?? 'None'}} <br>
                        Name: {{$user->name ?? 'None'}} <br>
                        Center: {{$user->center->title_en ?? 'None'}} <br>
                         Title En: {{$user->title_en ?? 'None'}} <br>
                         Title Bn: {{$user->title_bn ?? 'None'}} <br>
                         Email: {{$user->email ?? 'None'}} <br>
                         Contact: {{$user->contact ?? 'None'}} <br>
                         Address En: {{$user->address_en ?? 'None'}} <br>
                         Address Bn: {{$user->address_bn ?? 'None'}} <br>
                         Status: {{$user->status == 1 ? 'Active' : 'Inactive'}} <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
