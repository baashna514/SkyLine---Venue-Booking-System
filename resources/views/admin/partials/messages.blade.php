@if(session('success'))
    <div class="col-lg-12 mt-5">
        <div class="bg-light p-2 radius-round">
            <p class="text-success">{{ session('success') }}</p>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="col-lg-12 mt-5">
        <div class="bg-light p-2 radius-round">
            <p class="text-danger">{{ session('error') }}</p>
        </div>
    </div>
@endif
