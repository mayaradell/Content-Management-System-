@extends("panel.index")
@section("inner-content")
    <div class="card-header">
        <section class="content-header" style="margin-top: 30px">
            <form action="{{route('admin.categories.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label>Category Name </label>
                        <input type="text" class="form-control" placeholder="Enter Category Name" name="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Category Slug</label>
                        <input type="text" class="form-control" placeholder="Enter Slug" name="slug">

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
