@if ($paginator->hasPages())
<div aria-label="Page navigation example">

    @if (!$paginator->onFirstPage())
    <ul class="pagination float-left">
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" style="color: #15406a">Sebelumnya</a>
        </li>
    </ul>
    @endif

    @if ($paginator->hasMorePages())
    <ul class="pagination float-right">
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" style="color: #15406a">Berikutnya</a>
        </li>
    </ul>
    @endif
    
</div>
@endif