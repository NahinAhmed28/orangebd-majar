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
                    <a href="{{ route('admin.admin.index') }}" class="btn btn-primary m-btn m-btn--icon"><i class="fas fa-sitemap pr-2"></i>Category</a>
            </div>
        </div>

        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right"  action="{{ route('admin.admin.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('name') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Name </label>
                            <input type="text" class="form-control m-input" name="name" value="{{ old('name') }}" required placeholder="Category Name"/>
                                @if ($errors->has('name'))
                                    <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                                @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('status') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Status </label>
                            <select class="form-control m-input" name="status" required>
                                <option value="">---- Select ----</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>

                            </select>

                        </div>
                    </div>


                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit" >
                <div class="m-form__actions text-center">
                    <a href="{{ route('admin.admin.index') }}" class="btn btn-outline-brand"><i class="fa fa-times"></i> Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
@endsection

