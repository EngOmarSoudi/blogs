

@extends('site.layout.main')
@section('page')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        @auth
            <div>
                <a href="{{route('index')}}">
                    <img width="50" style="border-radius: 50%" src="{{asset(auth()->user()->image)}}" alt="">
                </a>
                <a class="navbar-brand" href="{{route('users.edit',auth()->user())}}" > {{auth()->user()->first_name}} </a>

                {{--                        <button href="#" class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>--}}
            </div>
        @else
            <div>
                <a class="navbar-brand" href="{{route('register_form')}}">regist</a>
                <a class="navbar-brand" href="{{route('signin_form')}}">sin in</a>
            </div>

        @endauth



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
            </ul>
        </div>
    </div>
    @auth
        <div style="padding-right: 10px;color:#ffffff"  >
            <a class="navbar-brand" href="{{route('logout')}}">log out</a>
        </div>
    @else
    @endauth
</nav>
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="col-md-5 col-lg-5 " >
            <div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
{{--                            @error('image')--}}
{{--                            <span class="text-danger">{{$message}}</span>--}}
{{--                            @enderror--}}
{{--                            @foreach($errors->any() as $errors)--}}
{{--                                <li>--}}
{{--                                    {{$errors}}--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
                        </ul>
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success">
                       <h4>{{session()->get('success')}}</h4>
                    </div>
                @endif
                <h4 class="mb-3">Create New Post</h4>
            </div>
            <form  method=post
                   {{--                           oninput='confirm_password.setCustomValidity(confirm_password.value != password.value ? "Passwords do not match." : "")'--}}
                   action="{{route('posts.store')}}" enctype="multipart/form-data" >
                @csrf
                <div class="row ">
                    <input type="hidden" name="user_id" value="{{auth()->id()}}">
                    <div class="col-6">
                        <label for="firstName" class="form-label">post title</label>
                        <input type="text" class="form-control"  name="post_title"  placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first post title is required.
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="username" class="form-label">imge</label>
                        <div class="input-group has-validation">
                            <input type="file" class="image" name="image"  placeholder="choose image" required>
                            <div class="invalid-feedback">
                                image is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                            <label for="phone" class="form-label">descraption<span class="text-muted">(Optional)</span></label>
                        <textarea rows="1" cols="1" type="text" class="form-control" name="desc"  placeholder="descraption"> </textarea>

                    </div>
                    <div class="col-6">
                            <label for="username" class="form-label">pdf file</label>
                            <div class="input-group has-validation">
                                <input type="file" class="pdf" name="pdf"  placeholder="choose pdf" required>
                                <div class="invalid-feedback">
                                    pdf is required.
                                </div>
                            </div>
                    </div>
                </div>
                <div style="padding-top: 20px">
                    <button  class="w-100 btn btn-success " type="submit">post</button>
                </div>

            </form>

        </div>
    </div>
</header>
<!-- Page content-->
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <!-- Blog entries-->--}}
{{--        <div class="col-lg-8">--}}
{{--        @if(auth()->user())--}}
{{--            @foreach($posts as $key => $post)--}}
{{--            <!-- Featured blog post-->--}}
{{--            <div class="card mb-4">--}}
{{--                <a href="{{asset($post->image)}}" download >--}}
{{--                    <img width="500" height="500" class="card-img-top" src="{{asset($post->image)}}" alt="" />--}}
{{--                </a>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="small text-muted">{{$post->created_at}}</div>--}}
{{--                    <h2 class="card-title">{{$post->post_title}}</h2>--}}
{{--                    <p class="card-text"> {{$post->desc}}</p>--}}
{{--                    <a href="{{asset($post->pdf)}}"  download class="btn btn-success"  >download</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Nested row for non-featured blog posts-->--}}
{{--                @endforeach--}}
{{--        @endif--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6">--}}
{{--                    --}}

{{--                    <!-- Blog post-->--}}
{{--                    <div class="card mb-4">--}}
{{--                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="small text-muted">January 1, 2021</div>--}}
{{--                            <h2 class="card-title h4">Post Title</h2>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>--}}
{{--                            <a class="btn btn-primary" href="#!">Read more →</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Blog post-->--}}
{{--                       --}}
{{--                    <div class="card mb-4">--}}
{{--                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="small text-muted">January 1, 2021</div>--}}
{{--                            <h2 class="card-title h4">Post Title</h2>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>--}}
{{--                            <a class="btn btn-primary" href="#!">Read more →</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <!-- Blog post-->--}}
{{--                    <div class="card mb-4">--}}
{{--                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="small text-muted">January 1, 2021</div>--}}
{{--                            <h2 class="card-title h4">Post Title</h2>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>--}}
{{--                            <a class="btn btn-primary" href="#!">Read more →</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Blog post-->--}}
{{--                    <div class="card mb-4">--}}
{{--                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="small text-muted">January 1, 2021</div>--}}
{{--                            <h2 class="card-title h4">Post Title</h2>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.</p>--}}
{{--                            <a class="btn btn-primary" href="#!">Read more →</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Pagination-->--}}
{{--            <nav aria-label="Pagination">--}}
{{--                <hr class="my-0" />--}}
{{--                <ul class="pagination justify-content-center my-4">--}}
{{--                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>--}}
{{--                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#!">2</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#!">3</a></li>--}}
{{--                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#!">15</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--        <!-- Side widgets-->--}}
{{--        <div class="col-lg-4">--}}
{{--            <!-- Search widget-->--}}
{{--            <div class="card mb-4">--}}
{{--                <div class="card-header">Search</div>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="input-group">--}}
{{--                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />--}}
{{--                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Categories widget-->--}}
{{--            <div class="card mb-4">--}}
{{--                <div class="card-header">Categories</div>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <ul class="list-unstyled mb-0">--}}
{{--                                <li><a href="#!">Web Design</a></li>--}}
{{--                                <li><a href="#!">HTML</a></li>--}}
{{--                                <li><a href="#!">Freebies</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <ul class="list-unstyled mb-0">--}}
{{--                                <li><a href="#!">JavaScript</a></li>--}}
{{--                                <li><a href="#!">CSS</a></li>--}}
{{--                                <li><a href="#!">Tutorials</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Side widget-->--}}
{{--            <div class="card mb-4">--}}
{{--                <div class="card-header">Side Widget</div>--}}
{{--                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Footer-->
{{--<footer class="py-5 bg-dark">--}}
{{--    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>--}}
{{--</footer>--}}

{{--------------------------------------------------}}

{{--<div class="container">--}}
{{--    <div class="py-5 ">--}}
{{--        <h1>mian profile</h1>--}}
{{--    </div>--}}

{{--</div>--}}


{{--<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>--}}

{{--<script src="form-validation.js"></script>--}}

{{--@stop--}}
{{--------------------------------------------------}}
<!-- Bootstrap core JS-->
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>--}}
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
@stop
</body>
</html>
