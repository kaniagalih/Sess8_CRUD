{{-- success validation --}}
@if (Session::has('success'))
<div class="pt3">
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
</div>
@endif

{{-- error validation --}}
@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif