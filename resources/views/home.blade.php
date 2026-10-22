@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Meriah Hero Banner -->
    <div class="hero-banner mb-5 text-center text-md-start">
        <div class="row align-items-center">
            <div class="col-md-8">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill mb-3 fw-bold">
                    <i class="bi bi-exclamation-triangle-fill me-1"></i> Emergency Assistance Available 24/7
                </span>
                <h1 class="display-5 fw-bold mb-3">Understanding Gender-Based & Domestic Violence</h1>
                <p class="fs-5 opacity-90">Every person deserves safety, dignity, and respect. Learn about domestic protection laws and key support agencies in Malaysia.</p>
                <div class="d-flex flex-wrap gap-2 mt-4">
                    <a href="{{ route('hotline') }}" class="btn btn-warning btn-lg fw-bold rounded-pill shadow-sm">
                        <i class="bi bi-telephone-fill me-2"></i> Get Immediate Help
                    </a>
                    <a href="{{ route('law-enforcement') }}" class="btn btn-outline-light btn-lg rounded-pill">
                        <i class="bi bi-shield-check me-2"></i> Legal Protection
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center d-none d-md-block">
                <i class="bi bi-shield-lock-fill text-white opacity-75" style="font-size: 10rem;"></i>
            </div>
        </div>
    </div>

    <!-- Features / Types Cards -->
    <h3 class="fw-bold mb-4 text-center text-danger"><i class="bi bi-card-checklist me-2"></i> Forms of Abuse Recognized by Law</h3>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card card-hover h-100 shadow-sm p-3">
                <div class="card-body">
                    <div class="icon-circle bg-danger text-white mb-3">
                        <i class="bi bi-activity"></i>
                    </div>
                    <h5 class="card-title fw-bold">Physical Violence</h5>
                    <p class="card-text text-muted">Includes direct bodily assault, battery, restraint, or any physical force causing harm, pain, or injury.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-hover h-100 shadow-sm p-3">
                <div class="card-body">
                    <div class="icon-circle bg-warning text-dark mb-3">
                        <i class="bi bi-chat-square-quote-fill"></i>
                    </div>
                    <h5 class="card-title fw-bold">Psychological & Verbal</h5>
                    <p class="card-text text-muted">Continuous threats, coercion, extreme isolation, insults, or mental distress inflicted by a domestic partner.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-hover h-100 shadow-sm p-3">
                <div class="card-body">
                    <div class="icon-circle bg-primary text-white mb-3">
                        <i class="bi bi-wallet2"></i>
                    </div>
                    <h5 class="card-title fw-bold">Financial Deprivation</h5>
                    <p class="card-text text-muted">Withholding financial support or preventing the victim from maintaining employment or financial independence.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection