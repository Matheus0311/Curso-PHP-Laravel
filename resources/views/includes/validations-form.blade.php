@if ($errors->any())
    <ul class="errors mt-4">
        @foreach ($errors->all() as $error)
            <li class="error text-red-500">{{ $error }}</li>
        @endforeach
    </ul>
@endif
