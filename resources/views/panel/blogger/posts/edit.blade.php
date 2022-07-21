@extends("panel.index")
@section("inner-content")
    <div class="card-header">
        <section class="content-header" style="margin-top: 30px">
            <form action="{{route('blogger.posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-body">

                    <div class="form-group">
                        <label>Post Category</label>
                        <select class="form-control select2" style="width: 100%;" name="category_id">
                            <option value="{{$post->category->id}}" selected="selected">{{$post->category->name}}</option>
                            @foreach($categories as $category)
                                @if($category->id!=$post->category->id)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('category_id')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Post Title </label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{$post->title}}">
                        @error('title')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Post Content</label>
                        <input type="text" class="form-control" placeholder="Enter Content" name="content" value="{{$post->content}}">


                        @error('content')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Post Image</label>
                        <input type="file" class="form-control" name="photo">
                        <br>
                        <img src="{{asset($post->image)}}" alt="" width="100px" height="100px">
                        @error('photo')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                </div>
            </form>
        </section>
    </div>

@endsection
