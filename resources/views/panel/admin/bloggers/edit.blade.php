@extends("panel.index")
@section("inner-content")
    <div class="card-header">
        <section class="content-header" style="margin-top: 30px">
            <form action="{{route('admin.bloggers.update',$blogger->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-body">


                    <div class="form-group">
                        <label>Blogger Name </label>
                        <input type="text" class="form-control" placeholder="Enter Blogger Name" name="name"
                               value="{{$blogger->name}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Blogger email</label>
                        <input type="email" class="form-control" placeholder="Enter Blogger Email" name="email"
                               value="{{$blogger->email}}">


                        @error('email')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <p>Please select Blogger Role</p>
                        <input type="radio" id="admin" name="user_type" value="admin"
                               @if($blogger->user_type=="admin")
                               checked
                            @endif
                        >
                        <label for="admin">Admin</label><br>
                        <input type="radio" id="blogger" name="user_type" value="blogger"
                               @if($blogger->user_type=="blogger")
                               checked
                            @endif
                        >
                        <label for="blogger">Blogger</label><br>
                        @error('category_id')
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
