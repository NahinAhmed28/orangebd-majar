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
                    <div class="m-portlet__head-tools">
                        <a href="{{route('admin.admin.create') }}" class="btn btn-primary m-btn m-btn--icon"><i class="fa fa-plus pr-2"></i>Create</a>
                    </div>
                </div>

                <div class="m-portlet__body">
                    <div class="m-section__content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="">
                                    <div class="table m-table table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>code</th>
                                                <th>username</th>
                                                <th>email</th>
                                                <th>Title EN</th>
                                                <th>Title BN</th>
                                                <th>Center</th>
                                                <th>Usertype</th>
                                                <th>Addres En</th>
                                                <th>Addres Bn</th>
                                                <th>Contact</th>
                                                <th>Status</th>
                                                                                                <th width="100px">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($admins as $admin)
                                                <tr>
                                                    <td>{{$admin->id ?? 'None'}}</td>
                                                    <td>{{$admin->code ?? 'None'}}</td>
                                                    <td>{{$admin->username ?? 'None'}}</td>
                                                    <td>{{$admin->email ?? 'None'}}</td>
                                                    <td>{{$admin->title_en ?? 'None'}}</td>
                                                    <td>{{$admin->title_bn ?? 'None'}}</td>
                                                    <td>{{$admin->center->title_en ?? 'None'}}</td>
                                                    <td>{{$admin->usertype->title_en ?? 'None'}}</td>
                                                    <td>{{$admin->address_en ?? 'None'}}</td>
                                                    <td>{{$admin->address_bn ?? 'None'}}</td>
                                                    <td>{{$admin->contact ?? 'None'}}</td>
                                                    <td>{{ $admin->status == 1 ? 'Active' : 'Inactive' }}</td>

                                                     <td>
                                                         <a href="{{ route('admin.admin.edit',[$admin->id]) }}" title="Edit">
                                                             <button class="btn btn-outline-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                                             </button></a>
                                                         <form method="POST" action="{{ route('admin.admin.destroy' ,  [$admin->id]) }}"
                                                               accept-charset="UTF-8" style="display:inline">
                                                             @method('DELETE')
                                                             @csrf
                                                             <button type="submit" class="btn btn-danger btn-sm show-alert-delete-box"
                                                                     title="Delete Association"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                         </form>
                                                     </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-center">
                                            {!! $admins->links() !!}
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
