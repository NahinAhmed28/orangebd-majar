@extends('admin.layouts.default')
@section('pageTitle', $pageTitle)

@section('content')

    <div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text"><i class="far fa-plus-square pr-2"></i>{{$pageTitle}}</h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <a href="{{ route('admin.center.index') }}" class="btn btn-primary m-btn m-btn--icon"><i class="fas fa-sitemap pr-2"></i>Centers</a>
            </div>
        </div>

        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right"  action="{{ route('admin.center.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="m-portlet__body">
                <div class="row">
                    <div class="row col-md-6">
                        <div class="col-xs-12 col-sm-12 ">
                            <div class="form-group  m-form__group {{ $errors->has('title_en') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span> English Title </label>
                                <input type="text" class="form-control m-input" name="title_en" value="{{ old('title_en') }}" placeholder=" English Title"/>
                                @if ($errors->has('title_en'))
                                    <div class="form-control-feedback">{{ $errors->first('title_en') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 ">
                            <div class="form-group  m-form__group {{ $errors->has('title_bn') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span>  Bangla Title </label>
                                <input type="text" class="form-control m-input" name="title_bn" value="{{ old('title_bn') }}" placeholder=" Bangla Title"/>
                                @if ($errors->has('title_bn'))
                                    <div class="form-control-feedback">{{ $errors->first('title_bn') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 ">
                            <div class="form-group  m-form__group {{ $errors->has('generic_id') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span>Association</label>
                                <select class="form-control m-bootstrap-select m_selectpicker" name="generic_id" data-live-search="true">
                                    <option value="">---- Select ----</option>
                                    @foreach($associations as $association)
                                        <option value="{{$association->id}}"
                                            {{$association->id == old('association_id') ? 'selected' : ''}}>{{$association->title}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('association_id'))
                                    <div class="form-control-feedback">{{ $errors->first('association_id') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 ">
                            <div class="form-group  m-form__group {{ $errors->has('division_id') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span>Division</label>
                                <select class="form-control m-bootstrap-select m_selectpicker" name="division_id" data-live-search="true">
                                    <option value="">---- Select ----</option>
                                    @foreach($divisions as $division)
                                        <option value="{{$division->id}}"
                                            {{$division->id == old('division_id') ? 'selected' : ''}}>{{$division->title}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('division_id'))
                                    <div class="form-control-feedback">{{ $errors->first('division_id') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 ">
                            <div class="form-group  m-form__group {{ $errors->has('district_id') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span>District</label>
                                <select class="form-control m-input m-bootstrap-select m_selectpicker" name="district_id" data-live-search="true">
                                    <option value="">---- Select ----</option>
                                    @foreach($districts as $district)
                                        <option value="{{$district->id}}"
                                            {{$district->id == old('district_id') ? 'selected' : ''}}>{{$district->title}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('district_id'))
                                    <div class="form-control-feedback">{{ $errors->first('district_id') }}</div>
                                @endif
                            </div>
                        </div>

                        {{--                        <div class="col-xs-12 col-sm-12 ">--}}
                        {{--                            <div class="form-group  m-form__group">--}}
                        {{--                                <label class="form-control-label"><span class="text-danger">*</span> Image </label>--}}
                        {{--                                <input type="file" class="form-control m-input" name="image"/>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>


                    <div class="row col-md-6">
                        <div class="col-xs-12 col-sm-12 ">
                            <div class="form-group  m-form__group {{ $errors->has('upazila_id') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span>Upazila</label>
                                <select class="form-control m-input" name="upazila_id">
                                    <option value="">---- Select ----</option>
                                    @foreach($upazilas as $upazila)
                                        <option value="{{$upazila->id}}"
                                            {{$upazila->id == old('upazila_id') ? 'selected' : ''}}>{{$upazila->title}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('upazila_id'))
                                    <div class="form-control-feedback">{{ $errors->first('upazila_id') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 ">
                            <div class="form-group  m-form__group ">
                                <label class="form-control-label"> Status </label>
                                <select class="form-control m-input {{ $errors->has('recommended') ? 'has-danger' : '' }}" name="recommended">
                                    <option value="">----Select----</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 ">
                            <div class="form-group  m-form__group">
                                <label class="form-control-label"> Address English  </label>
                                <input type="text" class="form-control m-input" placeholder="address_en" name="address_en"/>
                                @if ($errors->has('address_en'))
                                    <div class="form-control-feedback">{{ $errors->first('address_en') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 ">
                            <div class="form-group  m-form__group">
                                <label class="form-control-label"> Address Bangla  </label>
                                <input type="text" class="form-control m-input" placeholder="address_bn" name="address_bn"/>
                                @if ($errors->has('address_bn'))
                                    <div class="form-control-feedback">{{ $errors->first('address_bn') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit" >
                <div class="m-form__actions text-center">
                    <a href="{{ route('admin.center.index') }}" class="btn btn-outline-brand"><i class="fa fa-times"></i> Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
@endsection

