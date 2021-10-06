@extends('site.layout.main')
@section('page')
    <div class="container">
        <div class="py-5 ">
            <h1>edit profile </h1>
        </div>
        <div class="col-md-5 col-lg-5 " >
            <h4 class="mb-3"></h4>
            <form  method=post
                   oninput='confirm_password.setCustomValidity(confirm_password.value != password.value ? "Passwords do not match." : "")'
                   action="{{route('users.update',$user)}}" enctype="multipart/form-data" >
                @csrf
                @method('patch')
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control"  name="first_name"  placeholder="" value="{{$user->first_name}}" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control"  name="last_name" placeholder="" value="{{$user->last_name}}" required>
                        <div class="invalid-feedback">
                            Valid last Last name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" name="user_name"  value="{{$user->user_name}}" placeholder="Username" required>
                            <div class="invalid-feedback">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email </label>
                        <div  class="input-group has-validation">
                            <input type="email" class="form-control" name="email" value="{{$user->email}}"  placeholder="you@example.com" required>
                            <div class="invalid-feedback">
                                Your email is required.
                            </div>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>


                    </div>

{{--                    <div class="col-12">--}}
{{--                        <label for="password" class="form-label">pass word</label>--}}
{{--                        <input type="password" class="form-control" name="password" value=""  placeholder="password" required>--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Please enter your shipping password.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <label for="password" class="form-label">Confirm password</label>--}}
{{--                        <input type="password" class="form-control" name="confirm_password" value="same"  placeholder="Confirm password" required>--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Please enter your shipping password.--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-12">
                        <label for="phone" class="form-label">phone<span class="text-muted">(Optional)</span></label>
                        <input type="number" class="form-control" name="phone" value="{{$user->phone}}"  placeholder="phone number">
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

                </div>
                <button class="w-100 btn btn-success " type="submit">edit</button>
            </form>
        </div>

    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="form-validation.js"></script>
@stop
