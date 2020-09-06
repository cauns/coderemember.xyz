<nav class="tm-nav" id="tm-nav">
        <ul>

            @foreach($items as $item)
                <li class="tm-nav-item @if(\Route::current()->getName() == $item->route) active @endif"><a href="{{ $item->link() }}" title="{{ $item->title }}" class="tm-nav-link">{{ $item->title }}</a></li>
            @endforeach
        </ul>
</nav>