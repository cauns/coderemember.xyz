@extends('frontend.layouts.master')
@section('content')
    @if(isset($posts))
        <div class="row tm-row">
            @foreach($posts as $post)
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{ route('frontend.post',$post->slug) }}" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="Image" class="img-fluid">
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{ $post->title }}</h2>
                    </a>
                    <p class="tm-pt-30">
                        {{ $post->excerpt }}
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">{{ $post->category->name }}</span>
                        <span class="tm-color-primary">{{ $post->updated_at }}</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>36 comments</span>
                        <span>{{ $post->authorId->name }}</span>
                    </div>
                </article>
                @endforeach
        </div>
    @endif
    @include('frontend.layouts.panigation', ['paginator' => $posts])
@endsection