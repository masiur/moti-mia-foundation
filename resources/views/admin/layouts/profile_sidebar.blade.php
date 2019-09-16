@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New User Profile | Account
        </h1>
        {{ Breadcrumbs::render(Route::currentRouteName()) }}
    </section>
    <!-- Main content -->
    <section class="content margin-top-20">
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-4 row">
                <div class="col-md-12 text-center">
                    @if(isset($user->userInfo->photo))
                        <img src="{{ asset($user->userInfo->photo )}}" class="sidebar-profile-img" alt="">
                    @else
                        <img src="../assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                    @endif
                    <div class="">
                        <h2 class="text-center"> {{$user->name}} </h2>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->

                </div>
                <!-- END PORTLET MAIN -->

            </div>

            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="col-md-8 profile-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="{{ \App\BaseSettings\Menu::isActiveRoute('profile') }}">
                                        <a href="{{route('profile') }}">Personal Info</a>
                                    </li>
                                    <li class="{{ \App\BaseSettings\Menu::isActiveRoute('profile.pic.change') }}">
                                        <a href="{{route('profile.pic.change') }}">Change Avatar</a>
                                    </li>
                                    <li class="{{ \App\BaseSettings\Menu::isActiveRoute('profile.password.reset') }}">
                                        <a href="{{route('profile.password.reset') }}">Change Password</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active">
                                        @yield('profile-edit')
                                    </div>
                                    <!-- END PERSONAL INFO TAB -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </section>
@endsection

@section('styles')
    <style>
        .sidebar-profile-img {
            width: 90%;
        }
    </style>
@endsection
@section('scripts')

@endsection