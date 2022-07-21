@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
            @foreach($posts as $post)
                <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{$post->title}}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">posted {{$post->created_at->diffForHumans()}}
                                by {{$post->user->name}}</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light"
                               href="#!">{{$post->category->name}}</a>
                        </header>
                        <!-- Preview image figure-->
                        <img src="{{$post->image}}" alt="{{$post->name}}" width="700px" height="400px">
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{$post->content}}</p>

                        </section>
                    </article>
                <br>
                @endforeach
                <div style="float: right">
                    {{$posts->links()}}
                </div>

                <br>

                <!-- Comments section-->

            </div>

            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <form action="{{route('welcome.search')}}">
                            @csrf
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search ..."
                                   aria-label="Enter search term..." aria-describedby="button-search" name="title"/>
                            <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                        </div>
                        </form>

                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($categories as $category)
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="{{route("welcome.filter",['category'=>$category->id])}}">{{$category->name}}</a></li>
                                </ul>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
                        use, and feature the Bootstrap 5 card component!
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include("partials.footer")
@endsection

