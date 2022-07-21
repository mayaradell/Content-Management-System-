@extends('layouts.panel')

@section("content")

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('welcome')}}">Simple CMS</a>
            </div>

            <!-- Top Navigation: Right Menu -->
            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown navbar-inverse">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> {{auth()->user()->name}} <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>


            <!-- Sidebar -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>
                        @if(Auth::user()->user_type=="admin")
                            <li>
                                <a href="#" class="active"><i class="fa fa-dashboard fa-fw" ></i> Dashboard</a>
                            </li>
                        @endif
                        @if(Auth::user()->user_type=="blogger")
                            <li>
                                <a href="#"><i class="fa fa-fax"></i> Posts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{route("blogger.posts.index")}}">My Posts</a>
                                    </li>
                                    <li>
                                        <a href="{{route('blogger.posts.create')}}">Create New Post</a>
                                    </li>

                                </ul>
                            </li>
                        @endif
                        @if(Auth::user()->user_type=="admin")
                            <li>
                                <a href="#"><i class="fa fa-fax"></i> Posts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{route('admin.posts.index')}}">All Posts</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.posts.create')}}">Create New Post</a>
                                    </li>

                                </ul>
                            </li>
                        @endif
                        @if(Auth::user()->user_type=="admin")
                            <li>
                                <a href=""><i class="fa fa-fax"></i> Bloggers<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{route('admin.bloggers.index')}}">All Bloggers</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.bloggers.create')}}">Add New Blogger</a>
                                    </li>

                                </ul>
                            </li>
                        @endif
                        @if(Auth::user()->user_type=="admin")
                            <li>
                                <a href="#"><i class="fa fa-fax"></i> Categories<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{route('admin.categories.index')}}">All Categories</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.categories.create')}}">Create New Category</a>
                                    </li>

                                </ul>
                            </li>
                        @endif
                    </ul>

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper" style="background-color: #F9F4F8;margin-top: 20px">
            <div class="container-fluid">
                @include("partials.alerts.error")
                @include("partials.alerts.success")
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card bg-gradient mb-3">
                            @yield("inner-content")
                        </div>

                    </div>
                </div>

                <!-- ... Your content goes here ... -->

            </div>
        </div>

    </div>

@endsection
