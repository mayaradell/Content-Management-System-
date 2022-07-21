@extends("panel.index")
@section("inner-content")
    <div class="card-header">
        <section class="content-header" style="margin-top: 30px">
            <form action="{{route('admin.categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="form-group">
                        <label>Category Name </label>
                        <input type="text" class="form-control" placeholder="Enter Category Name" name="name" value="{{$category->name}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Category Slug</label>
                        <input type="text" class="form-control" placeholder="Enter Slug" name="slug" value="{{$category->slug}}">

                        @error('slug')
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
