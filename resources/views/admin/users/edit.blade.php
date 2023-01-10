@extends('layouts.default')
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
                <a href="{{ route('category.index') }}" class="btn btn-primary m-btn m-btn--icon"><i
                        class="fas fa-sitemap pr-2"></i>Category</a>
            </div>
        </div>

        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right"
              action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="m-portlet__body">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('name') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Name </label>
                            <input type="text" class="form-control m-input" name="name"
                                   value="{{ old('name', $category->name) }}" placeholder="Category Name"/>
                            @if ($errors->has('name'))
                                <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"> Select Status </label>
                            <select class="form-control m-input " name="status">
                                <option value="1" {{ $category->status == 1  ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $category->status == 0  ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group  m-form__group {{ $errors->has('icon') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Icon </label><br>
                            @if(isset( $category->icon))
                                <img class="img-thumbnail" src="{{ asset('uploads/categoryFiles/'.$category->icon)}}"
                                     width="40">
                            @else
                                No Thumbnail
                            @endif
                            <br><br>
                            <input type="file" class="form-control m-input" name="icon" placeholder="icon"/>
                            @if ($errors->has('icon'))
                                <div class="form-control-feedback">{{ $errors->first('icon') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions text-center">
                    <a href="{{ route('category.index') }}" class="btn btn-outline-brand"><i class="fa fa-times"></i>
                        Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
@endsection

