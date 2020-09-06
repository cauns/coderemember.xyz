@extends('frontend.layouts.master')
@section('content')
    <div class="row tm-row">
        <div class="col-12">
            <hr class="tm-hr-primary tm-mb-55">
            <img src="{{ asset('storage/'.$post->image) }}" class="img-single-feature">
        </div>
    </div>
    <div class="row tm-row">
        <div class="col-lg-8 tm-post-col">
            <div class="tm-post-full">
                <div class="mb-4">
                    <h2 class="pt-2 tm-color-primary tm-post-title">{{ $post->title }}</h2>
                    <p class="tm-mb-40">{{ $post->updated_at }} posted by {{ $post->authorId->name }}</p>
                    {!!  $post->body  !!}
                </div>
            </div>
        </div>
        <aside class="col-lg-4 tm-aside-col">
            <div class="tm-post-sidebar">
                <hr class="mb-3 tm-hr-primary">
                <h2 class="mb-4 tm-post-title tm-color-primary">{{ __('global.categories') }}</h2>
                @if(isset($categories))
                    <ul class="tm-mb-75 pl-5 tm-category-list">
                        @foreach($categories as $category)
                            <li><a href="{{ route('frontend.category',$category->slug) }}"
                                   class="tm-color-primary">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                @endif
                <hr class="mb-3 tm-hr-primary">
                <h2 class="tm-mb-40 tm-post-title tm-color-primary">{{ __('global.related_prosts') }}</h2>
                @if(isset($reletedPost))
                    @foreach($reletedPost as $post)
                        <a href="{{ route('frontend.post',$post->slug) }}" class="d-block tm-mb-40">
                            <figure>
                                <img src="{{ asset('storage/'.$post->image) }}" alt="Image" class="mb-3 img-fluid">
                                <figcaption class="tm-color-primary">{{ $post->title }}</figcaption>
                            </figure>
                        </a>
                    @endforeach
                @endif

            </div>
        </aside>
    </div>
@endsection