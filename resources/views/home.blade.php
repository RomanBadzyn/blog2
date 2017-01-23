@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($allposts as $post)
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title }}</div>

                    <div class="panel-body">
                        {{ $post->content }}
                    </div>
                    <div class="panel-heading">{{ $post->created_at }}</div>

                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
