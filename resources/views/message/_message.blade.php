@if (!empty(session('success')))
    <div class="text-success">
        {{ session('success') }}
    </div>
@endif

@if (!empty(session('primary')))
    <div class="text-primary">
        {{ session('primary') }}
    </div>
@endif

@if (!empty(session('warning')))
    <div class="text-warning">
        {{ session('warning') }}
    </div>
@endif

@if (!empty(session('danger')))
    <div class="text-danger">
        {{ session('danger') }}
    </div>
@endif
@if (!empty(session('dark')))
    <div class="text-dark">
        {{ session('dark') }}
    </div>
@endif
