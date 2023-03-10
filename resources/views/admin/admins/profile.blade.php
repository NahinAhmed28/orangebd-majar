@extends('admin.layouts.default')
@section('pageTitle', $pageTitle)

@section('content')
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-4">--}}
{{--            Image: <br>--}}
{{--            Code: {{$admin->code}} <br>--}}
{{--            Name: {{$admin->username}} <br>--}}
{{--        </div>--}}
{{--        <div class="col-md-8">--}}
{{--            Title En: {{$admin->title_en}} <br>--}}
{{--            Title Bn: {{$admin->title_bn}} <br>--}}
{{--            Email: {{$admin->email}} <br>--}}
{{--            Contact: {{$admin->contact}} <br>--}}
{{--            Address En: {{$admin->address_en}} <br>--}}
{{--            Address Bn: {{$admin->address_bn}} <br>--}}
{{--            Status: {{$admin->status == 1 ? 'Active' : 'Inactive'}} <br>--}}
{{--        </div>--}}
{{--    </div>--}}
<form class="m-form m-form--fit m-form--label-align-right"
      action="{{ route('admin.admin.update', $admin->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="m-portlet__body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('username') ? 'has-danger' : '' }}">
                    <label class="form-control-label"><span class="text-danger">*</span> User Name </label>
                    <input type="text" class="form-control m-input" name="username"
                           value="{{ old('username', $admin->username) }}" placeholder="User Name"/>
                    @if ($errors->has('username'))
                        <div class="form-control-feedback">{{ $errors->first('username') }}</div>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('code') ? 'has-danger' : '' }}">
                    <label class="form-control-label"><span class="text-danger">*</span> Code </label>
                    <input type="text" class="form-control m-input" name="code" value="{{ old('code', $admin->code) }}" required placeholder="Code"/>
                    @if ($errors->has('code'))
                        <div class="form-control-feedback">{{ $errors->first('code') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('image') ? 'has-danger' : '' }}">
                    <label class="form-control-label"><span class="text-danger">*</span> Image </label>
                    <input type="file" class="form-control m-input" name="image" value="{{ old('image', $admin->image) }}" required placeholder="Image"/>
                    @if ($errors->has('image'))
                        <div class="form-control-feedback">{{ $errors->first('image') }}</div>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('title_en') ? 'has-danger' : '' }}">
                    <label class="form-control-label"><span class="text-danger">*</span> Title En </label>
                    <input type="text" class="form-control m-input" name="title_en" value="{{ old('title_en', $admin->title_en) }}" required placeholder="Title English"/>
                    @if ($errors->has('title_en'))
                        <div class="form-control-feedback">{{ $errors->first('title_en') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('title_bn') ? 'has-danger' : '' }}">
                    <label class="form-control-label"><span class="text-danger">*</span> Title Bn </label>
                    <input type="text" class="form-control m-input" name="title_bn" value="{{ old('title_bn', $admin->title_bn) }}" required placeholder=" Title Bangl"/>
                    @if ($errors->has('title_bn'))
                        <div class="form-control-feedback">{{ $errors->first('title_bn') }}</div>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('center_id') ? 'has-danger' : '' }}">
                    <label for="form-control-label">Center<span class="text-danger">*</span></label>
                    <select class="form-control" data-live-search="true" name="center_id" id="center_id">
                        <option value="">---Select Upazila ---</option>
                        @foreach($centers as $center)
                            <option value="{{$center->id}}"
                                {{$center->id == $center->id  ? 'selected' : ''}}>{{$center->title_en}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('center_id'))
                        <div class="form-control-feedback">{{ $errors->first('center_id') }}</div>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('usertype_id') ? 'has-danger' : '' }}">
                    <label for="form-control-label">User Type<span class="text-danger">*</span></label>
                    <select class="form-control" data-live-search="true" name="usertype_id" id="usertype_id">
                        <option value="">---Select Upazila ---</option>
                        @foreach($usertypes as $usertype)
                            <option value="{{$usertype->id}}"
                                {{$usertype->id == $usertype->id  ? 'selected' : ''}}>{{$usertype->title_en}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('usertype_id'))
                        <div class="form-control-feedback">{{ $errors->first('usertype_id') }}</div>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('email') ? 'has-danger' : '' }}">
                    <label class="form-control-label"><span class="text-danger">*</span> Email </label>
                    <input type="text" class="form-control m-input" name="email" value="{{ old('email', $admin->email) }}" required placeholder="Email"/>
                    @if ($errors->has('email'))
                        <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('contact') ? 'has-danger' : '' }}">
                    <label class="form-control-label"><span class="text-danger">*</span> Contact </label>
                    <input type="text" class="form-control m-input" name="contact" value="{{ old('contact', $admin->contact) }}" required placeholder="Contact"/>
                    @if ($errors->has('contact'))
                        <div class="form-control-feedback">{{ $errors->first('contact') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('address_en') ? 'has-danger' : '' }}">
                    <label class="form-control-label"><span class="text-danger">*</span> Address En </label>
                    <input type="text" class="form-control m-input" name="address_en" value="{{ old('address_en', $admin->address_en) }}" required placeholder="Address English"/>
                    @if ($errors->has('address_en'))
                        <div class="form-control-feedback">{{ $errors->first('address_en') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('address_bn') ? 'has-danger' : '' }}">
                    <label class="form-control-label"><span class="text-danger">*</span> Address Bn </label>
                    <input type="text" class="form-control m-input" name="address_bn" value="{{ old('address_bn', $admin->address_bn) }}" required placeholder=" Address Bangl"/>
                    @if ($errors->has('address_bn'))
                        <div class="form-control-feedback">{{ $errors->first('address_bn') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group {{ $errors->has('password') ? 'has-danger' : '' }}">
                    <label class="form-control-label"><span class="text-danger">*</span> Password </label>
                    <input type="text" class="form-control m-input" name="password" value="{{ old('password') }}"  placeholder="Leave empty to keep unchange"/>
                    @if ($errors->has('password'))
                        <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                    @endif
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group  m-form__group">
                    <label class="form-control-label"> Select Status </label>
                    <select class="form-control m-input " name="status">
                        <option value="1" {{ $admin->status == 1  ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $admin->status == 0  ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions text-center">
            <a href="{{ route('admin.admin.index') }}" class="btn btn-outline-brand"><i class="fa fa-times"></i>
                Cancel</a>
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
        </div>
    </div>
</form>
@endsection

