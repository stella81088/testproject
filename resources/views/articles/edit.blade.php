@extends ('layout')

@section('header-featured')
<div id="header-featured">
    <div id="banner-wrapper">
        <div id="page" class="container">
            <h1> Edit Article </h1>

            <!-- how laravel handles put requests-->
            <form method="POST" action="/articles/{{$article->id}}">
                @csrf
                @method('PUT')


                <div class="field">
                    <label class="label" for="title"> Title </label>
                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{$article->title}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt"> Excerpt </label>
                    <div class="control">
                        <input class="textarea" type="text" name="excerpt" id="excerpt" value="{{$article->excerpt}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body"> Body </label>
                    <div class="control">
                        <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection