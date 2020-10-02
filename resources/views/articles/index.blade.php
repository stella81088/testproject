@extends ('layout')

@section('header-featured')
<div id="header-featured">
    <div id="banner-wrapper">

    </div>
</div>
@endsection

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>Welcome to our website</h2>
                <span class="byline">Mauris vulputate dolor sit amet nibh</span>

                <ul class="style1">
                    @foreach ($articles as $article)
                    <li class="first">
                        <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
                        <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
                        <p> {{$article->excerpt}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div id="sidebar">


        </div>
    </div>
</div>
<div id="copyright" class="container">
    <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>

@endsection