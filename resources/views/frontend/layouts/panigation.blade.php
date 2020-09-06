@if ($paginator->lastPage() > 1)
<div class="row tm-row tm-mt-100 tm-mb-75">
    <div class="tm-prev-next-wrapper">
        <a href="{{ $paginator->url(1) }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }} tm-mr-20">Prev</a>
        <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="mb-2 tm-btn tm-btn-primary {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }} tm-prev-next">Next</a>
    </div>
    <div class="tm-paging-wrapper">
        <span class="d-inline-block mr-3">Page</span>
        <nav class="tm-paging-nav d-inline-block">
            <ul>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
                <li class="tm-paging-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}" class="mb-2 tm-btn tm-paging-link">{{ $i }}</a>
                </li>
            @endfor
            </ul>
        </nav>
    </div>
</div>
@endif