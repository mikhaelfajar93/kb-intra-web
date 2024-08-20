@extends('layout.main')
@section('regulation_active', 'active')
@section('regulation_hrd_active', 'active')
@section('content_header')
    @can('add hrd')
        <a href="/hrd-input-regulation" class="btn btn-danger">
            <svg width="10" height="10" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-32">
                <path d="M12 4V20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M20 11.9999H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
            </svg>
            New Regulation
        </a>
    @endcan
@endsection
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">List Regulation HRD</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-warning" role="alert" id="alert">{{ session('status') }} </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success" role="alert" id="alert">{{ session('success') }} </div>
                        @endif
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_regulation as $listregulation)
                                        <tr>
                                            <td> {{ ucfirst($listregulation->title) }}</td>
                                            <td>{{ ucfirst($listregulation->uploadby) }}</td>
                                            <td>{{ date('d F Y', strtotime($listregulation->created_at)) }}</td>
                                            <td>
                                                @if ($listregulation->status == 1)
                                                    Post
                                                @else
                                                    Unpost
                                                @endif
                                            </td>
                                            <td>
                                                <div class="mb-2 d-flex align-items-center">
                                                    <a class="btn btn-light btn-icon btn-sm rounded-pill"
                                                        href="{{ route('hrd.view_regulation', $listregulation->id) }}"
                                                        role="button" data-toggle="tooltip" title="View">
                                                        <span class="btn-inner">
                                                            <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M17.7366 6.04606C19.4439 7.36388 20.8976 9.29455 21.9415 11.7091C22.0195 11.8924 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8924 2.05854 11.7091C4.14634 6.87903 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M14.4308 11.997C14.4308 13.3255 13.3381 14.4115 12.0015 14.4115C10.6552 14.4115 9.5625 13.3255 9.5625 11.997C9.5625 11.8321 9.58201 11.678 9.61128 11.5228H9.66006C10.743 11.5228 11.621 10.6695 11.6601 9.60184C11.7674 9.58342 11.8845 9.57275 12.0015 9.57275C13.3381 9.57275 14.4308 10.6588 14.4308 11.997Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    @can('update hrd')
                                                        <a class="btn btn-light btn-icon btn-sm rounded-pill ms-2"
                                                            href="{{ route('hrd.edit_regulations', $listregulation->id) }}"
                                                            role="button" data-toggle="tooltip" title="Edit">
                                                            <span class="btn-inner">
                                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.4"
                                                                        d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                                        fill="currentColor"></path>
                                                                    <path
                                                                        d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.4"
                                                                        d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-light btn-icon btn-sm rounded-pill ms-2"
                                                            href="{{ route('hrd.delete_regulation', $listregulation->id) }}"
                                                            role="button"
                                                            onclick="deleteConfirm(event, '{{ route('hrd.delete_regulation', $listregulation->id) }}')"
                                                            data-toggle="tooltip" title="Delete">
                                                            <span class="btn-inner">
                                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.4"
                                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                                        fill="currentColor"></path>
                                                                    <path
                                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-light btn-icon btn-sm rounded-pill ms-2"
                                                            href="{{ route('hrd.updatestatus_regulation', $listregulation->id) }}"
                                                            onclick="UpdateStatusConfirm(event, '{{ route('hrd.updatestatus_regulation', $listregulation->id) }}')"
                                                            data-toggle="tooltip" title="Post/Unpost">
                                                            <span class="btn-inner">
                                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.4"
                                                                        d="M6.70555 12.8906C6.18944 12.8906 5.77163 13.3146 5.77163 13.8384L5.51416 18.4172C5.51416 19.0847 6.04783 19.6251 6.70555 19.6251C7.36328 19.6251 7.89577 19.0847 7.89577 18.4172L7.63947 13.8384C7.63947 13.3146 7.22167 12.8906 6.70555 12.8906Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M7.98037 3.67345C7.98037 3.67345 7.71236 3.39789 7.54618 3.27793C7.30509 3.09264 7.00783 3 6.71173 3C6.37936 3 6.07039 3.10452 5.81877 3.30169C5.77313 3.34801 5.57886 3.5226 5.41852 3.68532C4.41204 4.6367 2.76539 7.12026 2.26215 8.42083C2.18257 8.618 2.01053 9.11685 2 9.38409C2 9.63827 2.05618 9.88294 2.17087 10.1145C2.3312 10.4044 2.58282 10.6372 2.88009 10.7642C3.08606 10.8462 3.70282 10.9733 3.71453 10.9733C4.38981 11.1016 5.48757 11.1704 6.70003 11.1704C7.85514 11.1704 8.90727 11.1016 9.59308 10.997C9.60478 10.9852 10.3702 10.8581 10.6335 10.7179C11.1133 10.4626 11.4118 9.96371 11.4118 9.43041V9.38409C11.4001 9.03608 11.1016 8.30444 11.0911 8.30444C10.5879 7.07394 9.02079 4.64858 7.98037 3.67345Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.4"
                                                                        d="M17.2949 11.1096C17.811 11.1096 18.2288 10.6856 18.2288 10.1618L18.4851 5.58296C18.4851 4.91543 17.9526 4.375 17.2949 4.375C16.6372 4.375 16.1035 4.91543 16.1035 5.58296L16.361 10.1618C16.361 10.6856 16.7788 11.1096 17.2949 11.1096Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M21.8293 13.8853C21.6689 13.5955 21.4173 13.3638 21.1201 13.2356C20.9141 13.1536 20.2961 13.0265 20.2856 13.0265C19.6103 12.8982 18.5126 12.8293 17.3001 12.8293C16.145 12.8293 15.0929 12.8982 14.4071 13.0028C14.3954 13.0146 13.63 13.1429 13.3666 13.2819C12.8856 13.5373 12.5884 14.0361 12.5884 14.5706V14.6169C12.6001 14.9649 12.8973 15.6954 12.909 15.6954C13.4123 16.9259 14.9782 19.3525 16.0198 20.3265C16.0198 20.3265 16.2878 20.6021 16.454 20.7208C16.6939 20.9073 16.9911 21 17.2896 21C17.6208 21 17.9286 20.8954 18.1814 20.6983C18.227 20.652 18.4213 20.4774 18.5816 20.3158C19.5869 19.3632 21.2347 16.8796 21.7368 15.5802C21.8176 15.383 21.9896 14.883 22.0001 14.6169C22.0001 14.3616 21.944 14.1169 21.8293 13.8853Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="delete-form" action="" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
    <form id="update-status-form" action="" method="POST" style="display: none;">
        @csrf
        @method('PUT')
    </form>
@endsection
