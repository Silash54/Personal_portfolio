<x-app-layout>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h2>Message From Client</h2>
                <a href="{{ route('dashboard') }}" class="btn btn-light btn-sm">Back</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        @foreach ($message as $index => $value)
                            <div class="message-card p-4 mb-3 border rounded shadow-sm bg-light">
                                <h5 class="text-muted">Message #{{ ++$index }}</h5>
                                <h4 class="text-primary">Full Name: {{ $value->fullname }}</h4>
                                <h5 class="text-info">Email: {{ $value->email }}</h5>
                                <h4 class="text-success">Subject: {{ $value->subject }}</h4>
                                <p class="text-dark font-weight-bold">Message:</p>
                                <p class="bg-white p-3 rounded border">{{ $value->message }}</p>
                                <button type="submit" class="btn btn-primary">Mail</button>
                            </div>
                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
