<!--sidebar wrapper -->
@php
    $setting=DB::table('settings')->first();
@endphp
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{asset('backend/setting/'.$setting->image) }}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">{{ Auth::user()->name; }}</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('admin.home') }}" class="">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Category</div>
                </a>
                <ul>
                    <li> <a href="{{ route('index.category') }}"><i class="bx bx-right-arrow-alt"></i>Category</a>
                    </li>
                    <li> <a href="{{ route('index.sub_category') }}"><i class="bx bx-right-arrow-alt"></i>Sub Category</a>
                    </li>
                </ul>
            </li>




            <li class="menu-label">Manage Products</li>
            <li>
                <a href="{{ route('index.brand') }}">
                    <div class="parent-icon"><i class='bx bx-donate-blood'></i>
                    </div>
                    <div class="menu-title">Brands</div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-cart'></i>
                    </div>
                    <div class="menu-title">Products</div>
                </a>
                <ul>
                    <li> <a href="{{ route('create.product') }}"><i class="bx bx-right-arrow-alt"></i>Add New Product</a>
                    </li>
                    <li> <a href="{{ route('index.product') }}"><i class="bx bx-right-arrow-alt"></i>All Product</a>
                    </li>
                    {{-- <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Products</a>
                    </li> --}}
                    <li> <a href="{{ url('admin/order') }}"><i class="bx bx-right-arrow-alt"></i>Orders</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('index.membership') }}">
                    <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                    </div>
                    <div class="menu-title">Membership</div>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                    </div>
                    <div class="menu-title">Request Product</div>
                </a>
                <ul>


                    <li> <a href="{{ route('index.productrequest') }}"><i class="bx bx-right-arrow-alt"></i>Add Product  Request</a>
                    </li>


                    <li> <a href="{{ route('add.productrequest') }}"><i class="bx bx-right-arrow-alt"></i>All Product  Request</a>
                    </li>

{{--
                    <li> <a href="{{ route('index.request.product') }}"><i class="bx bx-right-arrow-alt"></i>New Request</a>
                    </li> --}}


                    <li> <a href="{{ route('index.request.product') }}"><i class="bx bx-right-arrow-alt"></i>New Request Customer</a>
                    </li>
                    <li> <a href="{{ route('old.request.product') }}"><i class="bx bx-right-arrow-alt"></i>Old Request Customer</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('index.coupon') }}">
                    <div class="parent-icon"><i class='bx bx-lock'></i>
                    </div>
                    <div class="menu-title">Coupon</div>
                </a>
            </li>
            <li>
                <a href="{{ route('index.testimonial') }}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i>
                    </div>
                    <div class="menu-title">Testimonial</div>
                </a>
            </li>


            <li>
                <a href="{{ route('index.subscriber') }}">
                    <div class="parent-icon"><i class='bx bx-user-circle'></i>
                    </div>
                    <div class="menu-title">Subscriber List</div>
                </a>
            </li>

               <li class="menu-label">Manage Site</li>
            <li>


                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-repeat"></i>
                    </div>
                    <div class="menu-title">Home Page</div>
                </a>
                <ul>

                            <li>
                <a href="{{ route('index.social') }}">
                    <div class="parent-icon"><i class="bx bx-right-arrow-alt"></i>
                    </div>
                    <div class="menu-title">Socials</div>
                </a>
            </li>
                    <li> <a href="{{ route('website.setting') }}"><i class="bx bx-right-arrow-alt"></i>Web Setting</a>
                    </li>

                    <li> <a href="{{ route('index.homepage') }}"><i class="bx bx-right-arrow-alt"></i>Home Page</a>
                    </li>

                    <li> <a href="{{ route('index.market') }}"><i class="bx bx-right-arrow-alt"></i>Market Place</a>
                    </li>


                </ul>
            </li>

                  <li class="menu-label">Privacy Policy</li>
            <li>


                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-repeat"></i>
                    </div>
                    <div class="menu-title">Privacy Policy</div>
                </a>
                <ul>
                  <li> <a href="{{ route('index.features') }}"><i class="bx bx-right-arrow-alt"></i>Privacy Policy</a>
                    </li>
                    <li> <a href="{{ route('index.afeature') }}"><i class="bx bx-right-arrow-alt"></i>Terms Of Service </a>
                    </li>
                    <li> <a href="{{ route('index.page') }}"><i class="bx bx-right-arrow-alt"></i>It Work</a>
                    </li>

                    </li>
                </ul>
            </li>

            <li class="menu-label">About Page</li>
            <li>


                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-repeat"></i>
                    </div>
                    <div class="menu-title">About Page</div>
                </a>
                <ul>
                    <li> <a href="{{ route('about.us') }}"><i class="bx bx-right-arrow-alt"></i>About Us</a>
                    </li>
                    <li> <a href="{{ route('index.aboutone') }}"><i class="bx bx-right-arrow-alt"></i>About Section One </a>
                    </li>
                    <li> <a href="{{ route('index.abouttwo') }}"><i class="bx bx-right-arrow-alt"></i>About Section Two </a>
                    </li>

                    </li>
                </ul>
            </li>






            {{-- <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                    </div>
                    <div class="menu-title">Icons</div>
                </a>
                <ul>
                    <li> <a href="icons-line-icons.html"><i class="bx bx-right-arrow-alt"></i>Line Icons</a>
                    </li>
                    <li> <a href="icons-boxicons.html"><i class="bx bx-right-arrow-alt"></i>Boxicons</a>
                    </li>
                    <li> <a href="icons-feather-icons.html"><i class="bx bx-right-arrow-alt"></i>Feather Icons</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li class="menu-label">Forms & Tables</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                    </div>
                    <div class="menu-title">Forms</div>
                </a>
                <ul>
                    <li> <a href="form-elements.html"><i class="bx bx-right-arrow-alt"></i>Form Elements</a>
                    </li>
                    <li> <a href="form-input-group.html"><i class="bx bx-right-arrow-alt"></i>Input Groups</a>
                    </li>
                    <li> <a href="form-layouts.html"><i class="bx bx-right-arrow-alt"></i>Forms Layouts</a>
                    </li>
                    <li> <a href="form-validations.html"><i class="bx bx-right-arrow-alt"></i>Form Validation</a>
                    </li>
                    <li> <a href="form-wizard.html"><i class="bx bx-right-arrow-alt"></i>Form Wizard</a>
                    </li>
                    <li> <a href="form-text-editor.html"><i class="bx bx-right-arrow-alt"></i>Text Editor</a>
                    </li>
                    <li> <a href="form-file-upload.html"><i class="bx bx-right-arrow-alt"></i>File Upload</a>
                    </li>
                    <li> <a href="form-date-time-pickes.html"><i class="bx bx-right-arrow-alt"></i>Date Pickers</a>
                    </li>
                    <li> <a href="form-select2.html"><i class="bx bx-right-arrow-alt"></i>Select2</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                    </div>
                    <div class="menu-title">Tables</div>
                </a>
                <ul>
                    <li> <a href="table-basic-table.html"><i class="bx bx-right-arrow-alt"></i>Basic Table</a>
                    </li>
                    <li> <a href="table-datatable.html"><i class="bx bx-right-arrow-alt"></i>Data Table</a>
                    </li>
                    <li> <a href="table-editable.html"><i class="bx bx-right-arrow-alt"></i>Editable Table</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li class="menu-label">Pages</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-lock"></i>
                    </div>
                    <div class="menu-title">Authentication</div>
                </a>
                <ul>
                    <li> <a href="authentication-signin.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In</a>
                    </li>
                    <li> <a href="authentication-signup.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up</a>
                    </li>
                    <li> <a href="authentication-signin-with-header-footer.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In with Header & Footer</a>
                    </li>
                    <li> <a href="authentication-signup-with-header-footer.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up with Header & Footer</a>
                    </li>
                    <li> <a href="authentication-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Forgot Password</a>
                    </li>
                    <li> <a href="authentication-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Reset Password</a>
                    </li>
                    <li> <a href="authentication-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Lock Screen</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li>
                <a href="user-profile.html">
                    <div class="parent-icon"><i class="bx bx-user-circle"></i>
                    </div>
                    <div class="menu-title">User Profile</div>
                </a>
            </li>
            <li>
                <a href="timeline.html">
                    <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                    </div>
                    <div class="menu-title">Timeline</div>
                </a>
            </li> --}}
            {{-- <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-error"></i>
                    </div>
                    <div class="menu-title">Errors</div>
                </a>
                <ul>
                    <li> <a href="errors-404-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>404 Error</a>
                    </li>
                    <li> <a href="errors-500-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>500 Error</a>
                    </li>
                    <li> <a href="errors-coming-soon.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Coming Soon</a>
                    </li>
                    <li> <a href="error-blank-page.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Blank Page</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li>
                <a href="faq.html">
                    <div class="parent-icon"><i class="bx bx-help-circle"></i>
                    </div>
                    <div class="menu-title">FAQ</div>
                </a>
            </li>
            <li>
                <a href="pricing-table.html">
                    <div class="parent-icon"><i class="bx bx-diamond"></i>
                    </div>
                    <div class="menu-title">Pricing</div>
                </a>
            </li> --}}
            {{-- <li class="menu-label">Charts & Maps</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-line-chart"></i>
                    </div>
                    <div class="menu-title">Charts</div>
                </a>
                <ul>
                    <li> <a href="charts-apex-chart.html"><i class="bx bx-right-arrow-alt"></i>Apex</a>
                    </li>
                    <li> <a href="charts-chartjs.html"><i class="bx bx-right-arrow-alt"></i>Chartjs</a>
                    </li>
                    <li> <a href="charts-highcharts.html"><i class="bx bx-right-arrow-alt"></i>Highcharts</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-map-alt"></i>
                    </div>
                    <div class="menu-title">Maps</div>
                </a>
                <ul>
                    <li> <a href="map-google-maps.html"><i class="bx bx-right-arrow-alt"></i>Google Maps</a>
                    </li>
                    <li> <a href="map-vector-maps.html"><i class="bx bx-right-arrow-alt"></i>Vector Maps</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li class="menu-label">Others</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-menu"></i>
                    </div>
                    <div class="menu-title">Menu Levels</div>
                </a>
                <ul>
                    <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level One</a>
                        <ul>
                            <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Two</a>
                                <ul>
                                    <li> <a href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Three</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> --}}

        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
