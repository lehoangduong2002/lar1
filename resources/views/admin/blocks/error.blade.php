@if (count($errors) > 0)
    <div class="text-danger wrapper text-center">
        @foreach ($errors->all() as $error)
            {{ $error }}<br />
        @endforeach
    </div>
@endif
