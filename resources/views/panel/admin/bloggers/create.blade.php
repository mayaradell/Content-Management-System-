@extends("panel.index")
@section("inner-content")
    <div class="card-header">
        <section class="content-header" style="margin-top: 30px">
            <form action="{{route('admin.bloggers.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-body">


                    <div class="form-group">
                        <label>Blogger Name </label>
                        <input type="text" class="form-control" placeholder="Enter Blogger Name" name="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Blogger email</label>
                        <input type="email" class="form-control" placeholder="Enter Blogger Email" name="email">


                        @error('email')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Enter Blogger password" name="password">


                        @error('password')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Enter Blogger password" name="password_confirmation">


                        @error('confirm-password')
                        <span class="invalid-feedback" role="alert" style="color: darkred">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Please select Blogger Role</p>
                        <input type="radio" id="admin" name="user_type" value="">
                        <label for="admin">Admin</label><br>
                        <input type="radio" id="blogger" name="user_type" value="">
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
