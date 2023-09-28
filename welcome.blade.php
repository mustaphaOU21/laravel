@extends("layout.layout")

@section("content")
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Planets
        </div>

        <!-- @for($i = 0; $i < count($planets); $i++) <span>{{ $planets[$i] . " - " }}</span>
                @endfor -->

        @foreach($planets as $plant)
        <div>
            {{ $loop->index }} {{ $plant . " "}}
            @if ($loop->first)
            <span>- Eerst</span>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection