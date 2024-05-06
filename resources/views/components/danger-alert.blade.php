<div class="mb-4 bg-red-100 p-4 text-sm text-center text-red-600 w-2/6 mx-auto rounded-lg">
    @if (session()->has('message'))
        <div class="alert alert-success">
            <span class="font-medium">Fallo!</span>
            {{ session('message') }}
        </div>
    @endif
</div>
