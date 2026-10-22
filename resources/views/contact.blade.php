@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm p-4">
                <h2 class="fw-bold mb-3 text-danger"><i class="fa-solid fa-envelope me-2"></i>Contact Us / Feedback</h2>
                <p class="text-muted">Have questions or need non-emergency guidance? Send us a message below.</p>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Your Name (Optional)</label>
                        <input type="text" name="name" class="form-control" placeholder="Anonymous">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email / Contact Number</label>
                        <input type="text" name="email" class="form-control" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message / Inquiry</label>
                        <textarea name="message" rows="5" class="form-control" required placeholder="Type your message here..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Submit Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
