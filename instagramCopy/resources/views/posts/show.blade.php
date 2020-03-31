@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image}}" alt="" style="object-fit: cover;height: 293px;" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <h3>{{$post->user->username}}</h3>
                <hr>
                <p>{{$post->caption}}</p>
            </div>            
        </div>
    </div>
</div>
@endsection
