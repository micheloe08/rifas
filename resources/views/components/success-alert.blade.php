<div class="mb-4 bg-green-100 p-4 text-sm text-center text-green-800 w-2/6 mx-auto rounded-lg">
    @if (session()->has('message'))
        <div class="alert alert-success">
            <span class="font-medium">Exitoso!</span>
            {{ session('message') }}
        </div>
    @endif
</div>
