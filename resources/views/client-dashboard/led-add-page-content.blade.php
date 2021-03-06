<div class="container">
    <div class="container">
       @if (session()->has('message'))
       <div class="alert alert-success">
        {{ session()->get('message') }}
        </div>
       @endif

       @if (session()->has('error'))
       <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>            
       @endif
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Add Led</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST" action="{{route('client.led.store')}}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Title</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="title" class="form-control form-control-lg form-control-solid" placeholder="Title" value="{{old('title')}}" />
                                @error('title')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                           
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                {{-- <input type="text"  class="form-control form-control-lg form-control-solid"   /> --}}
                                <textarea id="kt_docs_tinymce_basic" class="form-control form-control-lg form-control-solid" name="description" value="{{old('description')}}" placeholder="Description">{{old('description')}}</textarea>
                                @error('description')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Location</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="location" class="form-control form-control-lg form-control-solid" placeholder="Location" value="{{old('location')}}" id="myAddress"/>
                                @error('location')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">City</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Location of Led"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="city" aria-label="Select a City" data-control="select2" data-placeholder="Select a City..." class="form-select form-select-solid form-select-lg fw-bold">
                                    <option value="">Select a City...</option>
                                    @foreach ($cities as $city)
                                    <option data-kt-flag="flags/afghanistan.svg" value="{{$city->id}}">{{$city->city}}</option>                                        
                                    @endforeach

                                    {{-- <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option> --}}
                                </select>
                                @error('city')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                           
                            <!--end::Label-->
                            <!--begin::Select-->
                           
                            <!--end::Select-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Price</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="price" class="form-control form-control-lg form-control-solid" placeholder="Price" value="{{old('price')}}" />
                                @error('price')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Tax</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="tax" class="form-control form-control-lg form-control-solid" placeholder="Tax" value="{{old('tax')}}" />
                                @error('tax')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Led Images</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="file" name="images[]" class="form-control form-control-lg form-control-solid" multiple/> 
                                @if (count($errors) > 0)
                                    @foreach ($errors->all() as $error)
                                    @if (str_contains($error, 'images'))
                                    <div class="alert alert-danger">
                                        {{$error}}
                                    </div>
                                    @endif   
                                    @endforeach
                                @endif
                            </div>
                            <!--end::Col-->
                        </div>
                       
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <a href="{{route('dashboard')}}" class="btn btn-light btn-active-light-primary me-2">Back</a>
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
    </div>
</div>
@section('pageScripts')
<script src="{{asset('assets/Metronic-Theme/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
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
<script>
//     var options = {selector: "#kt_docs_tinymce_basic",
//   menubar: false,
//   statusbar: false,
//   toolbar: false,
//   readonly: 1,
//                     };
var options = {selector: "#kt_docs_tinymce_basic",
statusbar: false,
                    };

if (KTApp.isDarkMode()) {
    options["skin"] = "oxide-dark";
    options["content_css"] = "dark";
}

tinymce.init(options);
</script>
@endsection