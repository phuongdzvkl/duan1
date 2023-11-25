@include("admin/headerAdmin")
<div class="breadcrumb-main">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @php
                $urlSegments = explode('/', request()->path());
                $url = '';
            @endphp

            @foreach($urlSegments as $segment)
                @php
                    $url .= '/' . $segment;
                @endphp

                @if ($loop->last)
                    <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($segment) }}</li>
                @else
                    <li class="breadcrumb-item">
                        <a href="{{ $url }}">{{ ucfirst($segment) }}</a>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>
@include('admin/footerAdmin')