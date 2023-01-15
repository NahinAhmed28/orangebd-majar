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
                <a href="{{ route('admin.center.index') }}" class="btn btn-primary m-btn m-btn--icon"><i
                        class="fas fa-sitemap pr-2"></i>Centers</a>
            </div>
        </div>

        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right"
              action="{{ route('admin.center.update', $center->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="m-portlet__body">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('title_en') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Title English </label>
                            <input type="text" class="form-control m-input" name="title_en"
                                   value="{{ old('title_en', $center->title_en) }}" placeholder="Category Name"/>
                            @if ($errors->has('title_en'))
                                <div class="form-control-feedback">{{ $errors->first('title_en') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('title_bn') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Title Bangla </label>
                            <input type="text" class="form-control m-input" name="title_bn"
                                   value="{{ old('title_bn', $center->title_bn) }}" placeholder="Category Name"/>
                            @if ($errors->has('title_bn'))
                                <div class="form-control-feedback">{{ $errors->first('title_bn') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('association_id') ? 'has-danger' : '' }}">
                            <label for="form-control-label">Association<span class="text-danger">*</span></label>
                            <select class="form-control" data-live-search="true" name="association_id" id="association_id">
                                <option value="">---Select Association ---</option>
                                @foreach($associations as $association)
                                    <option value="{{$association->id}}"
                                        {{$center->association_id == $association->id  ? 'selected' : ''}}>{{$association->title_en}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('association_id'))
                                <div class="form-control-feedback">{{ $errors->first('association_id') }}</div>
                            @endif
                        </div>
                    </div>



                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('division_id') ? 'has-danger' : '' }}">
                            <label for="form-control-label">Division<span class="text-danger">*</span></label>
                            <select class="form-control" data-live-search="true" name="division_id" id="division_id">
                                <option value="">---Select Division ---</option>
                                @foreach($divisions as $division)
                                    <option value="{{$division->id}}"
                                        {{$center->division_id == $division->id  ? 'selected' : ''}}>{{$division->title_en}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('division_id'))
                                <div class="form-control-feedback">{{ $errors->first('division_id') }}</div>
                            @endif
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('district_id') ? 'has-danger' : '' }}">
                            <label for="form-control-label">District<span class="text-danger">*</span></label>
                            <select class="form-control" data-live-search="true" name="district_id" id="district_id">
                                <option value="">---Select District ---</option>
                                @foreach($districts as $district)
                                    <option value="{{$district->id}}"
                                        {{$center->district_id == $district->id  ? 'selected' : ''}}>{{$district->title_en}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('district_id'))
                                <div class="form-control-feedback">{{ $errors->first('district_id') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('upazila_id') ? 'has-danger' : '' }}">
                            <label for="form-control-label">Upazila<span class="text-danger">*</span></label>
                            <select class="form-control" data-live-search="true" name="upazila_id" id="upazila_id">
                                <option value="">---Select Upazila ---</option>
                                @foreach($upazilas as $upazila)
                                    <option value="{{$upazila->id}}"
                                        {{$center->upazila_id == $upazila->id  ? 'selected' : ''}}>{{$upazila->title_en}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('upazila_id'))
                                <div class="form-control-feedback">{{ $errors->first('upazila_id') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('address_en') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Address English </label>
                            <input type="text" class="form-control m-input" name="address_en"
                                   value="{{ old('address_en', $center->address_en) }}" placeholder="Category Name"/>
                            @if ($errors->has('address_en'))
                                <div class="form-control-feedback">{{ $errors->first('address_en') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('address_bn') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Address Bangla </label>
                            <input type="text" class="form-control m-input" name="address_bn"
                                   value="{{ old('address_bn', $center->address_bn) }}" placeholder="Category Name"/>
                            @if ($errors->has('address_bn'))
                                <div class="form-control-feedback">{{ $errors->first('address_bn') }}</div>
                            @endif
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"> Select Status </label>
                            <select class="form-control m-input " name="status">
                                <option value="1" {{ $center->status == 1  ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $center->status == 0  ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions text-center">
                    <a href="{{ route('admin.center.index') }}" class="btn btn-outline-brand"><i class="fa fa-times"></i>
                        Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
@endsection

