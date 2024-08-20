@extends('layout.main')
@section('dboard_active', 'active')

@section('content')

    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h4>Recently added Regulation</h4>
                                        {{-- <a href="/all-listfile" class="text-primary">View all</a> --}}
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-borderless iq-file-manager-table mb-0">
                                        <thead>
                                            <tr class="border-bottom bg-transparent text-dark">
                                                <th scope="col">Title</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Division</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($view_regulation as $viewregulation)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h6 class=" mb-0 filename">{{ ucfirst($viewregulation->title) }}
                                                            </h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <small
                                                            class="text-muted">{{ date('d F Y', strtotime($viewregulation->created_at)) }}</small>
                                                    </td>
                                                    <td>
                                                        <small class="text-primary">
                                                            {{ $viewregulation->roleby }}
                                                        </small>
                                                    </td>
                                                    <td>
                                                        <a class="d-flex align-items-center text-info"
                                                            href="{{ route('dash.view_regulation', $viewregulation->id) }}"
                                                            role="button" data-toggle="tooltip" title="View">
                                                            <span class="btn-inner">
                                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.4" fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M17.7366 6.04606C19.4439 7.36388 20.8976 9.29455 21.9415 11.7091C22.0195 11.8924 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8924 2.05854 11.7091C4.14634 6.87903 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M14.4308 11.997C14.4308 13.3255 13.3381 14.4115 12.0015 14.4115C10.6552 14.4115 9.5625 13.3255 9.5625 11.997C9.5625 11.8321 9.58201 11.678 9.61128 11.5228H9.66006C10.743 11.5228 11.621 10.6695 11.6601 9.60184C11.7674 9.58342 11.8845 9.57275 12.0015 9.57275C13.3381 9.57275 14.4308 10.6588 14.4308 11.997Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h4>Recently added Announcement</h4>
                                        {{-- <a href="/all-listfile" class="text-primary">View all</a> --}}
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-borderless iq-file-manager-table mb-0">
                                        <thead>
                                            <tr class="border-bottom bg-transparent text-dark">
                                                <th scope="col">Title</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Division</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($view_announcement as $viewannouncement)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h6 class=" mb-0 filename">
                                                                {{ ucfirst($viewannouncement->title) }}
                                                            </h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <small
                                                            class="text-muted">{{ date('d F Y', strtotime($viewannouncement->created_at)) }}</small>
                                                    </td>
                                                    <td>
                                                        <small class="text-primary">
                                                            {{ $viewannouncement->roleby }}
                                                        </small>
                                                    </td>
                                                    <td>
                                                        <a class="d-flex align-items-center text-info"
                                                            href="{{ route('dash.view_announcement', $viewannouncement->id) }}"
                                                            role="button" data-toggle="tooltip" title="View">
                                                            <span class="btn-inner">
                                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.4" fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M17.7366 6.04606C19.4439 7.36388 20.8976 9.29455 21.9415 11.7091C22.0195 11.8924 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8924 2.05854 11.7091C4.14634 6.87903 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M14.4308 11.997C14.4308 13.3255 13.3381 14.4115 12.0015 14.4115C10.6552 14.4115 9.5625 13.3255 9.5625 11.997C9.5625 11.8321 9.58201 11.678 9.61128 11.5228H9.66006C10.743 11.5228 11.621 10.6695 11.6601 9.60184C11.7674 9.58342 11.8845 9.57275 12.0015 9.57275C13.3381 9.57275 14.4308 10.6588 14.4308 11.997Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h4>Testing 1</h4>
                                        <a href="../file-manager/document-folder.html" class="text-primary">View all</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-borderless iq-file-manager-table mb-0">
                                        <thead>
                                            <tr class="border-bottom bg-transparent text-dark">
                                                <th scope="col">Title</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Author</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h6 class=" mb-0">Tata Cara Login Web..</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <small class="text-muted">20 May 2024</small>
                                                </td>
                                                <td>
                                                    <small class="text-primary">
                                                        IT
                                                    </small>
                                                </td>
                                                <td>
                                                    <a href="/detailnews" class="d-flex align-items-center text-danger"
                                                        data-toggle="tooltip" title="View">
                                                        <span class="btn-inner">
                                                            <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4" fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M17.7366 6.04606C19.4439 7.36388 20.8976 9.29455 21.9415 11.7091C22.0195 11.8924 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8924 2.05854 11.7091C4.14634 6.87903 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M14.4308 11.997C14.4308 13.3255 13.3381 14.4115 12.0015 14.4115C10.6552 14.4115 9.5625 13.3255 9.5625 11.997C9.5625 11.8321 9.58201 11.678 9.61128 11.5228H9.66006C10.743 11.5228 11.621 10.6695 11.6601 9.60184C11.7674 9.58342 11.8845 9.57275 12.0015 9.57275C13.3381 9.57275 14.4308 10.6588 14.4308 11.997Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h6 class=" mb-0">Cuti Bersama 2024</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <small class="text-muted">02 Jan 2024</small>
                                                </td>
                                                <td>
                                                    <small class="text-primary">
                                                        HRD
                                                    </small>
                                                </td>
                                                <td>
                                                    <a href="#" class="d-flex align-items-center text-danger"
                                                        data-toggle="tooltip" title="View">
                                                        <span class="btn-inner">
                                                            <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4" fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M17.7366 6.04606C19.4439 7.36388 20.8976 9.29455 21.9415 11.7091C22.0195 11.8924 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8924 2.05854 11.7091C4.14634 6.87903 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M14.4308 11.997C14.4308 13.3255 13.3381 14.4115 12.0015 14.4115C10.6552 14.4115 9.5625 13.3255 9.5625 11.997C9.5625 11.8321 9.58201 11.678 9.61128 11.5228H9.66006C10.743 11.5228 11.621 10.6695 11.6601 9.60184C11.7674 9.58342 11.8845 9.57275 12.0015 9.57275C13.3381 9.57275 14.4308 10.6588 14.4308 11.997Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h6 class=" mb-0">Aturan OJK Terbaru</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <small class="text-muted">30 Apr 2024</small>
                                                </td>
                                                <td>
                                                    <small class="text-primary">
                                                        Legal
                                                    </small>
                                                </td>
                                                <td>
                                                    <a href="#" class="d-flex align-items-center text-danger"
                                                        data-toggle="tooltip" title="View">
                                                        <span class="btn-inner">
                                                            <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4" fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M17.7366 6.04606C19.4439 7.36388 20.8976 9.29455 21.9415 11.7091C22.0195 11.8924 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8924 2.05854 11.7091C4.14634 6.87903 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M14.4308 11.997C14.4308 13.3255 13.3381 14.4115 12.0015 14.4115C10.6552 14.4115 9.5625 13.3255 9.5625 11.997C9.5625 11.8321 9.58201 11.678 9.61128 11.5228H9.66006C10.743 11.5228 11.621 10.6695 11.6601 9.60184C11.7674 9.58342 11.8845 9.57275 12.0015 9.57275C13.3381 9.57275 14.4308 10.6588 14.4308 11.997Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h4>Testing 2</h4>
                                        <a href="../file-manager/document-folder.html" class="text-primary">View all</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-borderless iq-file-manager-table mb-0">
                                        <thead>
                                            <tr class="border-bottom bg-transparent text-dark">
                                                <th scope="col">Files</th>
                                                <th scope="col">Last Modified</th>
                                                <th scope="col">Size</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h6 class=" mb-0">Tata Cara Login.doc</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <small class="text-muted">20 May 2024</small>
                                                </td>
                                                <td>
                                                    <small class="text-primary">
                                                        12 MB
                                                    </small>
                                                </td>
                                                <td>
                                                    <a href="#" class="d-flex align-items-center text-danger"
                                                        data-toggle="tooltip" title="Download">
                                                        <span class="btn-inner">
                                                            <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M18.8089 9.021C18.3574 9.021 17.7594 9.011 17.0149 9.011C15.199 9.011 13.7059 7.508 13.7059 5.675V2.459C13.7059 2.206 13.503 2 13.2525 2H7.96436C5.49604 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59109 22 8.1703 22H16.0455C18.5059 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6238 9.016 19.1168 9.021 18.8089 9.021Z"
                                                                    fill="currentColor" />
                                                                <path opacity="0.4"
                                                                    d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1732 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M15.1052 12.7088C14.8132 12.4198 14.3432 12.4178 14.0512 12.7108L12.4622 14.3078V9.48084C12.4622 9.06984 12.1282 8.73584 11.7172 8.73584C11.3062 8.73584 10.9722 9.06984 10.9722 9.48084V14.3078L9.38224 12.7108C9.09124 12.4178 8.62024 12.4198 8.32924 12.7088C8.03724 12.9988 8.03724 13.4698 8.32624 13.7618L11.1892 16.6378H11.1902C11.2582 16.7058 11.3392 16.7608 11.4302 16.7988C11.5202 16.8358 11.6182 16.8558 11.7172 16.8558C11.8172 16.8558 11.9152 16.8358 12.0052 16.7978C12.0942 16.7608 12.1752 16.7058 12.2432 16.6388L12.2452 16.6378L15.1072 13.7618C15.3972 13.4698 15.3972 12.9988 15.1052 12.7088Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h6 class=" mb-0">Cuti Bersama 2024.pdf</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <small class="text-muted">02 Jan 2024</small>
                                                </td>
                                                <td>
                                                    <small class="text-primary">
                                                        1 MB
                                                    </small>
                                                </td>
                                                <td>
                                                    <a href="#" class="d-flex align-items-center text-danger"
                                                        data-toggle="tooltip" title="Download">
                                                        <span class="btn-inner">
                                                            <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M18.8089 9.021C18.3574 9.021 17.7594 9.011 17.0149 9.011C15.199 9.011 13.7059 7.508 13.7059 5.675V2.459C13.7059 2.206 13.503 2 13.2525 2H7.96436C5.49604 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59109 22 8.1703 22H16.0455C18.5059 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6238 9.016 19.1168 9.021 18.8089 9.021Z"
                                                                    fill="currentColor" />
                                                                <path opacity="0.4"
                                                                    d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1732 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M15.1052 12.7088C14.8132 12.4198 14.3432 12.4178 14.0512 12.7108L12.4622 14.3078V9.48084C12.4622 9.06984 12.1282 8.73584 11.7172 8.73584C11.3062 8.73584 10.9722 9.06984 10.9722 9.48084V14.3078L9.38224 12.7108C9.09124 12.4178 8.62024 12.4198 8.32924 12.7088C8.03724 12.9988 8.03724 13.4698 8.32624 13.7618L11.1892 16.6378H11.1902C11.2582 16.7058 11.3392 16.7608 11.4302 16.7988C11.5202 16.8358 11.6182 16.8558 11.7172 16.8558C11.8172 16.8558 11.9152 16.8358 12.0052 16.7978C12.0942 16.7608 12.1752 16.7058 12.2432 16.6388L12.2452 16.6378L15.1072 13.7618C15.3972 13.4698 15.3972 12.9988 15.1052 12.7088Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h6 class=" mb-0">Aturan OJK.pdf</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <small class="text-muted">30 Apr 2024</small>
                                                </td>
                                                <td>
                                                    <small class="text-primary">
                                                        5 MB
                                                    </small>
                                                </td>
                                                <td>
                                                    <a href="#" class="d-flex align-items-center text-danger"
                                                        data-toggle="tooltip" title="Download">
                                                        <span class="btn-inner">
                                                            <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4"
                                                                    d="M18.8089 9.021C18.3574 9.021 17.7594 9.011 17.0149 9.011C15.199 9.011 13.7059 7.508 13.7059 5.675V2.459C13.7059 2.206 13.503 2 13.2525 2H7.96436C5.49604 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59109 22 8.1703 22H16.0455C18.5059 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6238 9.016 19.1168 9.021 18.8089 9.021Z"
                                                                    fill="currentColor" />
                                                                <path opacity="0.4"
                                                                    d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1732 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M15.1052 12.7088C14.8132 12.4198 14.3432 12.4178 14.0512 12.7108L12.4622 14.3078V9.48084C12.4622 9.06984 12.1282 8.73584 11.7172 8.73584C11.3062 8.73584 10.9722 9.06984 10.9722 9.48084V14.3078L9.38224 12.7108C9.09124 12.4178 8.62024 12.4198 8.32924 12.7088C8.03724 12.9988 8.03724 13.4698 8.32624 13.7618L11.1892 16.6378H11.1902C11.2582 16.7058 11.3392 16.7608 11.4302 16.7988C11.5202 16.8358 11.6182 16.8558 11.7172 16.8558C11.8172 16.8558 11.9152 16.8358 12.0052 16.7978C12.0942 16.7608 12.1752 16.7058 12.2432 16.6388L12.2452 16.6378L15.1072 13.7618C15.3972 13.4698 15.3972 12.9988 15.1052 12.7088Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
