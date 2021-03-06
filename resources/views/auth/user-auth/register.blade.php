@extends('layouts.metronic-theme')
@section('content')
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <!--begin::Logo-->
            <a href="/" class="mb-12">
               <!--  <img alt="Logo" src="assets/Metronic-Theme/media/logos/logo-1.svg" class="h-40px" /> -->
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form"  method="POST" action="{{ route('register') }}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-10 text-center">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Create a User Account for Led</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="text-gray-400 fw-bold fs-4">Already have an account?
                        <a href="{{route('user.login')}}" class="link-primary fw-bolder">Sign in here</a></div>
                        <!--end::Link-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Action-->
               
                    <!--end::Action-->
                    <!--begin::Separator-->
                 
                    <!--end::Separator-->
                    <!--begin::Input group-->
                    <div class="row fv-row mb-7">
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <label class="form-label fw-bolder required text-dark fs-6">First Name</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="firstname" value="{{old('firstname')}}" />
                            @error('firstname')
                            <div class="alert alert-danger">
                                    {{$message}}
                            </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <label class="form-label fw-bolder required text-dark fs-6">Last Name</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="lastname" value="{{old('lastname')}}" />
                            @error('lastname')
                            <div class="alert alert-danger">
                                    {{$message}}
                            </div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <label class="form-label fw-bolder required text-dark fs-6">Email</label>
                        <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" value="{{old('email')}}" />
                        @error('email')
                        <div class="alert alert-danger">
                                {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="fv-row mb-7">
                        <label class="form-label fw-bolder required text-dark fs-6">Address</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="address" value="{{old('address')}}"  id="myAddress"/>
                        @error('address')
                        <div class="alert alert-danger">
                                {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="fv-row mb-7">
                        <label class="form-label fw-bolder required text-dark fs-6">Phone</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="phone" value="{{old('phone')}}" />
                        @error('phone')
                        <div class="alert alert-danger">
                                {{$message}}
                        </div>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                        <!--begin::Wrapper-->
                        <div class="mb-1">
                            <!--begin::Label-->
                            <label class="form-label required fw-bolder text-dark fs-6">Password</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative mb-3">
                                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password"/>
                                @error('password')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                            <!--end::Input wrapper-->
                            <!--begin::Meter-->
                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                            <!--end::Meter-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Hint-->
                        <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-5">
                        <label class="form-label fw-bolder required text-dark fs-6">Confirm Password</label>
                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_confirmation"/>
                        @error('password_confirmation')
                        <div class="alert alert-danger">
                                {{$message}}
                        </div>
                        @enderror
                    </div>

                    <input type="hidden" name="role" value="user">
                    <input type="hidden" name="checkout" value="{{isset($checkout)?$checkout : false}}">

                    <!--end::Input group-->
                    <!--begin::Input group-->
                    {{-- <div class="fv-row mb-10">
                        <label class="form-check form-check-custom form-check-solid form-check-inline">
                            <input class="form-check-input" type="checkbox" name="toc" value="1" />
                            <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                            <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                        </label>
                    </div> --}}
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
               
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
         
        <!--end::Footer-->
    </div>
    <!--end::Authentication - Sign-up-->
</div>
@endsection

@section('pageScripts')
{{-- <script src="{{ asset('assets/Metronic-Theme/js/custom/authentication/sign-up/general.js') }}"></script> --}}
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script type="text/javascript">
    var searchInput = 'myAddress';
    
        $(document).ready(function () {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode']
               
            });
        
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var near_place = autocomplete.getPlace();
            });
        });
</script>
@endsection