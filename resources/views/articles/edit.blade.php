@extends ('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.css">
@endsection

@section('content')
<div id="wrapper">
	<div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>
        <form action="/articles/{{$article->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" name="title" id="title" class="input" value='{{$article->title}}'>
                </div>
            </div>
            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>
                <div class="control">
                    <textarea type="textarea" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
                </div>
            </div>
            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <textarea type="textarea" name="body" id="body">{{$article->body}}</textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link">Submit</button>
                </div>
            </div>
        </form>
	</div>
</div>
@endsection