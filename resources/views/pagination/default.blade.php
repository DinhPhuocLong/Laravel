@if ($results->lastPage() > 1)
    <ul class="pagination">
        <li class="{{ ($results->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $results->url(1) }}">Trang Trước </a>
        </li>
        @for ($i = 1; $i <= $results->lastPage(); $i++)
            <li class="{{ ($results->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $results->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($results->currentPage() == $results->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $results->url($results->currentPage()+1) }}" >Trang Sau</a>
        </li>
    </ul>
@endif
