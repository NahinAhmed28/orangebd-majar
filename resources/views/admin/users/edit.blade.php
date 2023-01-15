@extends('admin.layouts.default')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text"><i class="far fa-edit pr-2"></i>{{$pageTitle}}</h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <a href="{{ route('admin.user.index') }}" class="btn btn-primary m-btn m-btn--icon"><i
                        class="fas fa-sitemap pr-2"></i>Murids</a>
            </div>
        </div>

        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right"
              action="{{ route('admin.user.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="m-portlet__body">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('code') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Code </label>
                            <input type="text" class="form-control m-input" name="code" value="{{ old('code', $user->code) }}" required placeholder="Code"/>
                            @if ($errors->has('code'))
                                <div class="form-control-feedback">{{ $errors->first('code') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('name') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Name </label>
                            <input type="text" class="form-control m-input" name="name" value="{{ old('name', $user->name) }}" required placeholder="Name"/>
                            @if ($errors->has('name'))
                                <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('image') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Image </label>
                            <input type="file" class="form-control m-input" name="image" value="{{ old('image', $user->image) }}" required placeholder="Title English"/>
                            @if ($errors->has('image'))
                                <div class="form-control-feedback">{{ $errors->first('image') }}</div>
                            @endif
                            <img style="max-width: 200px" src="{{isset($user->image) ?  asset('assets/uploads/users/'.$user->image)  : 'https://png.pngtree.com/png-vector/20190625/ourmid/pngtree-business-male-user-avatar-vector-png-image_1511454.jpg'}}" alt="User image"> <br>

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
                        <div class="form-group  m-form__group {{ $errors->has('title_en') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Title En </label>
                            <input type="text" class="form-control m-input" name="title_en" value="{{ old('title_en', $user->title_en) }}" required placeholder="Title English"/>
                            @if ($errors->has('title_en'))
                                <div class="form-control-feedback">{{ $errors->first('title_en') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('title_bn') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Title Bn </label>
                            <input type="text" class="form-control m-input" name="title_bn" value="{{ old('title_bn', $user->title_bn) }}" required placeholder=" Title Bangl"/>
                            @if ($errors->has('title_bn'))
                                <div class="form-control-feedback">{{ $errors->first('title_bn') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('email') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Email </label>
                            <input type="text" class="form-control m-input" name="email" value="{{ old('email', $user->email) }}" required placeholder="Email"/>
                            @if ($errors->has('email'))
                                <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('contact') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Contact </label>
                            <input type="text" class="form-control m-input" name="contact" value="{{ old('contact', $user->contact) }}" required placeholder="Contact"/>
                            @if ($errors->has('contact'))
                                <div class="form-control-feedback">{{ $errors->first('contact') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('address_en') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Address En </label>
                            <input type="text" class="form-control m-input" name="address_en" value="{{ old('address_en', $user->address_en) }}" required placeholder="Address English"/>
                            @if ($errors->has('address_en'))
                                <div class="form-control-feedback">{{ $errors->first('address_en') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('address_bn') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Address Bn </label>
                            <input type="text" class="form-control m-input" name="address_bn" value="{{ old('address_bn', $user->address_bn) }}" required placeholder=" Address Bangl"/>
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
                        <div class="form-group  m-form__group {{ $errors->has('status') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Status </label>
                            <select class="form-control m-input " name="status">
                                <option value="1" {{ $user->status == 1  ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $user->status == 0  ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions text-center">
                    <a href="{{ route('admin.user.index') }}" class="btn btn-outline-brand"><i class="fa fa-times"></i>
                        Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
@endsection

