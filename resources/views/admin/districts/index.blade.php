@extends('admin.layouts.default')
@section('pageTitle', $pageTitle)

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text"><i class="fas fa-list-ul pr-2"></i>{{$pageTitle}}</h3>
                        </div>
                    </div>
{{--                    <div class="m-portlet__head-tools">--}}
{{--                        <a href="{{route('admin.district.create') }}" class="btn btn-primary m-btn m-btn--icon"><i class="fa fa-plus pr-2"></i>Create</a>--}}
{{--                    </div>--}}
                </div>

                <div class="m-portlet__body">
                    <div class="m-section__content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="">
                                    <div class="table table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title EN</th>
                                                <th>Division</th>
                                                <th>Status</th>
{{--                                                <th width="100px">Action</th>--}}
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($districts as $district)
                                                <tr>
                                                    <td>{{$district->id}}</td>
                                                    <td>{{$district->title_en}}</td>
                                                    <td>{{$district->division->title_en}}</td>
                                                    <td>{{ $district->status == 1 ? 'Active' : 'Inactive' }}</td>

{{--                                                    <td>--}}
{{--                                                        <a href="{{ route('admin.district.edit',[$district->id]) }}" title="Edit">--}}
{{--                                                            <button class="btn btn-outline-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>--}}
{{--                                                            </button></a>--}}
{{--                                                        <form method="POST" action="{{ route('admin.district.destroy' ,  [$district->id]) }}"--}}
{{--                                                              accept-charset="UTF-8" style="display:inline">--}}
{{--                                                            @method('DELETE')--}}
{{--                                                            @csrf--}}
{{--                                                            <button type="submit" class="btn btn-danger btn-sm show-alert-delete-box"--}}
{{--                                                                    title="Delete Association"><i class="fa fa-trash" aria-hidden="true"></i></button>--}}
{{--                                                        </form>--}}
{{--                                                    </td>--}}
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-center">
                                            {!! $districts->links() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
