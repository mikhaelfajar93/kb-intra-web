@extends('layout.main')
{{-- @section('announ_active', 'active')
@section('announ_comp_active', 'active') --}}
@section('announcement_active', 'active')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Announcement Compliance</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert" id="alert">{{ session('status') }} </div>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-warning" role="alert" id="alert">Error Upload File </div>
                            @endforeach
                        @endif
                        <form role="form" action="/comp-add-announcement" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Title </label>
                                <input type="text" class="form-control" id="title_announ_comp" name="title_announ_comp"
                                    value="{{ old('title_announ_comp') }}" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleFormControlTextarea1">Details</label>
                                <textarea class="form-control" id="detail_announ_comp" name="detail_announ_comp" rows="5">{{ old('detail_announ_comp') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="customFile1" class="form-label custom-file-input">Upload file</label>
                                <input class="form-control" type="file" id="file_announ_comp" name="file_announ_comp[]"
                                    multiple>
                            </div>
                            <div class="mt-3 mt-sm-0">
                                <a href="/announ_compliance" role="button" data-toggle="tooltip" title="Back"
                                    class="btn btn-primary btn-md me-2">
                                    <svg class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M9.35028 4.34498L2.14451 11.6129C2.06531 11.6927 2.06754 11.8222 2.14945 11.8993L9.35522 18.6827C9.48285 18.8028 9.69231 18.7123 9.69231 18.537V14.3448H13.7949C17.795 14.3448 21.2577 18.3928 22.229 19.6392C22.2948 19.7236 22.433 19.6659 22.4101 19.5613C21.9529 17.4746 19.6729 8.65517 13.7949 8.65517H9.69231V4.48579C9.69231 4.30719 9.47602 4.21815 9.35028 4.34498Z"
                                            stroke="white" />
                                    </svg>
                                    Back
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <path
                                            d="M13.8325 6.17463L8.10904 11.9592L1.59944 7.88767C0.66675 7.30414 0.860765 5.88744 1.91572 5.57893L17.3712 1.05277C18.3373 0.769629 19.2326 1.67283 18.9456 2.642L14.3731 18.0868C14.0598 19.1432 12.6512 19.332 12.0732 18.3953L8.10601 11.9602"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
