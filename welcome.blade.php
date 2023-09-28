@extends("layout.layout")

@section("content")
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1 class="title m-b-md text-center">
            Planets
        </h1>

        @foreach($planets as $plant)
        <div>
            <h2>{{ $plant['name']}}</h2> {{ $plant['description'] }}
        </div>
        @endforeach
    </div>
</div>
@endsection
