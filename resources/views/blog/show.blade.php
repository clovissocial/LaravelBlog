@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>    

<div class="w-4/5 m-auto pt-20">
    <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}

    <p class="text-xl text-gray-700 pt-8 pb-10 loading-8 font-light">
        {{ $post->description }}
    </p>

</div>

@endsection