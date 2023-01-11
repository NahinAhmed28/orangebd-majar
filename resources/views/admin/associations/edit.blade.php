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
                <a href="{{ route('admin.association.index') }}" class="btn btn-primary m-btn m-btn--icon"><i
                        class="fas fa-sitemap pr-2"></i>Association</a>
            </div>
        </div>

        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right"
              action="{{ route('admin.association.update', $association->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="m-portlet__body">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('title_en') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Name </label>
                            <input type="text" class="form-control m-input" name="title_en"
                                   value="{{ old('title_en', $association->title_en) }}" placeholder=" Name"/>
                            @if ($errors->has('title_en'))
                                <div class="form-control-feedback">{{ $errors->first('title_en') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('title_bn') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Name </label>
                            <input type="text" class="form-control m-input" name="title_bn"
                                   value="{{ old('title_bn', $association->title_bn) }}" placeholder=" Name"/>
                            @if ($errors->has('title_bn'))
                                <div class="form-control-feedback">{{ $errors->first('title_bn') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"> Select Status </label>
                            <select class="form-control m-input " name="status">
                                <option value="1" {{ $association->status == 1  ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $association->status == 0  ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions text-center">
                    <a href="{{ route('admin.association.index') }}" class="btn btn-outline-brand"><i class="fa fa-times"></i>
                        Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
@endsection

