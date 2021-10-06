{{--@extends('site.layout.main')--}}
{{--@section('page')--}}
{{--    <div class="justify-content-center">--}}
{{--        <div class="card col-6">--}}
{{--            <div class="card-header">--}}
{{--                register--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <form method="post" action="{{route('register')}}" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Name</label>--}}
{{--                        <input type="text" class="form-control" name="name">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>email</label>--}}
{{--                        <input type="email" class="form-control" name="email">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>password</label>--}}
{{--                        <input type="password" class="form-control" name="password">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Phone</label>--}}
{{--                        <input type="text" class="form-control" name="phone">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Profile</label>--}}
{{--                        <input type="file" class="form-control" name="image">--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="btn btn-success">registe</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@stop--}}


@extends('site.layout.main')
@section('page')
<div class="container">
        <div class="py-5 ">
            <h1>Register</h1>
        </div>
            <div class="col-md-5 col-lg-5 " >
                <h4 class="mb-3"></h4>
                <form  method=post
                oninput='confirm_password.setCustomValidity(confirm_password.value != password.value ? "Passwords do not match." : "")'
                action="{{route('register')}}" enctype="multipart/form-data" >
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" class="form-control"  name="first_name"  placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control"  name="last_name" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last Last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" name="user_name"  placeholder="Username" required>
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email </label>
                                <div  class="input-group has-validation">
                                    <input type="email" class="form-control" name="email"  placeholder="you@example.com" required>
                                    <div class="invalid-feedback">
                                        Your email is required.
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>


                        </div>

                        <div class="col-12">
                            <label for="password" class="form-label">pass word</label>
                            <input type="password" class="form-control" name="password"  placeholder="password" required>
                            <div class="invalid-feedback">
                                Please enter your shipping password.
                            </div>
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Confirm password</label>
                            <input type="password" class="form-control" name="confirm_password"  placeholder="Confirm password" required>
                            <div class="invalid-feedback">
                                Please enter your shipping password.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="phone" class="form-label">phone<span class="text-muted">(Optional)</span></label>
                            <input type="number" class="form-control" name="phone"  placeholder="phone number">
                        </div>


                        <div class="col-12">
                            <label for="username" class="form-label">imge</label>
                            <div class="input-group has-validation">
                                <input type="file" class="image" name="image"  placeholder="choose image" required>
                                <div class="invalid-feedback">
                                    Your image is required.
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-md-4">--}}
{{--                            <label for="state" class="form-label">image</label>--}}
{{--                            <input type="file"  name="image" placeholder="chose file"   required>--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                Please provide a valid state.--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <button class="w-100 btn btn-success " type="submit">registe</button>
                </form>
            </div>
{{--    <footer class="my-5 pt-5 text-muted text-center text-small">--}}
{{--        <p class="mb-1">&copy; 2017–2021 Company Name</p>--}}
{{--        <ul class="list-inline">--}}
{{--            <li class="list-inline-item"><a href="#">Privacy</a></li>--}}
{{--            <li class="list-inline-item"><a href="#">Terms</a></li>--}}
{{--            <li class="list-inline-item"><a href="#">Support</a></li>--}}
{{--        </ul>--}}
{{--    </footer>--}}
</div>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="form-validation.js"></script>
@stop
