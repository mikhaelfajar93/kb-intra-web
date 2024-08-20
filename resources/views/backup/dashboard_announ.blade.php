@extends('layout.main')

@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="row row-cols-1">
                    <div class="overflow-hidden d-slider1 ">
                        <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <a
                                            class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <div class="dropdown">
                                            <svg width="5" viewBox="0 0 5 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" role="button" id="dropdownMenu-1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <path d="M2.49927 2.50444V2.49544" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.49927 7.50438V7.49538" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.49927 12.5044V12.4954" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu-1">
                                                <li><a class="dropdown-item" href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h5>Accounting</h5>
                                        {{-- <p class="mb-0">246 Items</p> --}}
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <a
                                            class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <div class="dropdown">
                                            <svg width="5" viewBox="0 0 5 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" role="button" id="dropdownMenu-1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <path d="M2.49927 2.50444V2.49544" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.49927 7.50438V7.49538" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.49927 12.5044V12.4954" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu-1">
                                                <li><a class="dropdown-item" href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h5>CSO</h5>
                                        {{-- <p class="mb-0">246 Items</p> --}}
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <a
                                            class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <div class="dropdown">
                                            <svg width="5" viewBox="0 0 5 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" role="button" id="dropdownMenu-1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <path d="M2.49927 2.50444V2.49544" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.49927 7.50438V7.49538" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.49927 12.5044V12.4954" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu-1">
                                                <li><a class="dropdown-item" href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h5>Compliance</h5>
                                        {{-- <p class="mb-0">246 Items</p> --}}
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <a
                                            class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <div class="dropdown">
                                            <svg width="5" viewBox="0 0 5 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" role="button" id="dropdownMenu-1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <path d="M2.49927 2.50444V2.49544" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.49927 7.50438V7.49538" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.49927 12.5044V12.4954" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu-1">
                                                <li><a class="dropdown-item" href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h5>Digital Bussines</h5>
                                        {{-- <p class="mb-0">246 Items</p> --}}
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <a
                                            class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>

                                        <div class="dropdown">
                                            <svg width="5" viewBox="0 0 5 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" role="button" id="dropdownMenu-1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <path d="M2.49927 2.50444V2.49544" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.49927 7.50438V7.49538" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.49927 12.5044V12.4954" stroke="currentColor" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu-1">
                                                <li><a class="dropdown-item" href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h5>Digital Bussines</h5>
                                        {{-- <p class="mb-0">246 Items</p> --}}
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="swiper-button swiper-button-next"></div>
                        <div class="swiper-button swiper-button-prev"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h4>Recently added Announcement</h4>
                                        <a href="/all-listnews" class="text-primary">View all</a>
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
                                            {{-- @foreach ($view_news as $viewnews) --}}
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h6 class=" mb-0 titlenews"></h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <small class="text-muted"></small>
                                                </td>
                                                <td>
                                                    <small class="text-primary">
                                                    </small>
                                                </td>
                                                <td>
                                                    <a href="" class="d-flex align-items-center text-danger"
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
