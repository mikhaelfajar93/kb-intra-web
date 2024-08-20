@extends('layout.main')
@section('announcement_active', 'active')
@section('content')
    <div class="container-fluid content-inner pb-0" id="page_layout">
        <div class="overflow-hidden">
            <div class="card">
                <div class="card-body p-0">
                    <div
                        class="tab-bottom-bordered d-flex justify-content-between align-items-center flex-wrap pt-2 mail-data">
                        <ul class="nav mb-0 pe-0 nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                    aria-selected="true">
                                    <svg class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.4"
                                            d="M21.25 13.4764C20.429 13.4764 19.761 12.8145 19.761 12.001C19.761 11.1865 20.429 10.5246 21.25 10.5246C21.449 10.5246 21.64 10.4463 21.78 10.3076C21.921 10.1679 22 9.97864 22 9.78146L21.999 7.10415C21.999 4.84102 20.14 3 17.856 3H6.144C3.86 3 2.001 4.84102 2.001 7.10415L2 9.86766C2 10.0648 2.079 10.2541 2.22 10.3938C2.36 10.5325 2.551 10.6108 2.75 10.6108C3.599 10.6108 4.239 11.2083 4.239 12.001C4.239 12.8145 3.571 13.4764 2.75 13.4764C2.336 13.4764 2 13.8093 2 14.2195V16.8949C2 19.158 3.858 21 6.143 21H17.857C20.142 21 22 19.158 22 16.8949V14.2195C22 13.8093 21.664 13.4764 21.25 13.4764Z"
                                            fill="currentColor" />
                                        <path
                                            d="M15.4305 11.5886L14.2515 12.7366L14.5305 14.3596C14.5785 14.6406 14.4655 14.9176 14.2345 15.0836C14.0055 15.2516 13.7065 15.2726 13.4545 15.1386L11.9995 14.3736L10.5415 15.1396C10.4335 15.1966 10.3155 15.2266 10.1985 15.2266C10.0455 15.2266 9.8945 15.1786 9.7645 15.0846C9.5345 14.9176 9.4215 14.6406 9.4695 14.3596L9.7475 12.7366L8.5685 11.5886C8.3645 11.3906 8.2935 11.0996 8.3815 10.8286C8.4705 10.5586 8.7005 10.3666 8.9815 10.3266L10.6075 10.0896L11.3365 8.61259C11.4635 8.35859 11.7175 8.20059 11.9995 8.20059H12.0015C12.2845 8.20159 12.5385 8.35959 12.6635 8.61359L13.3925 10.0896L15.0215 10.3276C15.2995 10.3666 15.5295 10.5586 15.6175 10.8286C15.7065 11.0996 15.6355 11.3906 15.4305 11.5886Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="iq-mail-section">
                                        Detail Announcement
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="email-app-details">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mt-3 flex-wrap">
                                    <div>
                                        {{-- <h6>Confirmation Mail for Library Books</h6> --}}
                                        <h6>Title: {{ $announcements->title }}</h6>
                                    </div>
                                </div>
                                <div>
                                    <p class="my-4">Detail: </p>
                                    <p>
                                        {{ $announcements->details }}
                                    </p>
                                </div>
                                <hr>
                                @if ($file_announcement->isNotEmpty())
                                    <div class="d-flex justify-content-start my-4">
                                        <svg class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none">
                                            <g>
                                                <path
                                                    d="M19.6001 10.7094L11.3277 18.698C9.73797 20.2332 7.20692 20.189 5.67172 18.5993C4.13653 17.0095 4.18071 14.4785 5.77045 12.9433L14.7622 4.26006C15.2391 3.79948 15.8795 3.54722 16.5425 3.55879C17.2054 3.57036 17.8366 3.84481 18.2972 4.32177C18.7578 4.79872 19.01 5.4391 18.9985 6.10204C18.9869 6.76498 18.7124 7.39617 18.2355 7.85676L10.6824 15.1507C10.2868 15.5327 9.65048 15.5216 9.26842 15.126C8.88636 14.7304 8.89746 14.0941 9.2931 13.712L16.1268 7.11274L15.0848 6.03373L8.25111 12.633C7.77416 13.0936 7.49971 13.7248 7.48814 14.3877C7.47657 15.0506 7.72882 15.691 8.18941 16.168C8.65 16.6449 9.28119 16.9194 9.94413 16.931C10.6071 16.9425 11.2475 16.6903 11.7244 16.2297L19.2775 8.93577C20.8672 7.40058 20.9114 4.86952 19.3762 3.27978C17.841 1.69004 15.3099 1.64586 13.7202 3.18105L4.72846 11.8643C2.54167 13.976 2.48095 17.4545 4.59271 19.6413C6.70447 21.8281 10.1829 21.8888 12.3697 19.777L20.6421 11.7884L19.6001 10.7094Z"
                                                    fill="#7A7B91" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p class="text-primary m-0 ms-2">{{ $count_file_announcement }} files attached</p>
                                    </div>
                                @endif
                                <div class="row">
                                    @foreach ($file_announcement as $listfile)
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <div class="bg-body rounded mb-4">
                                                <div class="d-flex align-items-center p-4">
                                                    <div class="w-100">
                                                        <a href="{{ route('dash.download_file_announcement', $announcements->id) }}"
                                                            role="button" data-toggle="tooltip" title="Download">
                                                            <div class="d-flex">
                                                                <svg class="icon-24" width="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.7161 16.2234H8.49609" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M15.7161 12.0369H8.49609" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M11.2521 7.86011H8.49707" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                                <span
                                                                    class="ms-2 newsfilename">{{ $listfile->filename }}</span>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center mt-2">
                                                                <span class="text-primary">Download</span>
                                                                <svg class="icon-24" xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path d="M12.1222 15.4361L12.1222 3.39508"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path
                                                                        d="M15.0382 12.5084L12.1222 15.4364L9.20621 12.5084"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path
                                                                        d="M16.755 8.12799H17.688C19.723 8.12799 21.372 9.77699 21.372 11.813V16.697C21.372 18.727 19.727 20.372 17.697 20.372L6.55701 20.372C4.52201 20.372 2.87201 18.722 2.87201 16.687V11.802C2.87201 9.77299 4.51801 8.12799 6.54701 8.12799L7.48901 8.12799"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="mt-3 mt-sm-0">
                                    <a href="/announ_dash" role="button" data-toggle="tooltip" title="Back"
                                        class="btn btn-primary btn-md me-2">
                                        <svg class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M9.35028 4.34498L2.14451 11.6129C2.06531 11.6927 2.06754 11.8222 2.14945 11.8993L9.35522 18.6827C9.48285 18.8028 9.69231 18.7123 9.69231 18.537V14.3448H13.7949C17.795 14.3448 21.2577 18.3928 22.229 19.6392C22.2948 19.7236 22.433 19.6659 22.4101 19.5613C21.9529 17.4746 19.6729 8.65517 13.7949 8.65517H9.69231V4.48579C9.69231 4.30719 9.47602 4.21815 9.35028 4.34498Z"
                                                stroke="white" />
                                        </svg>
                                        Back
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
