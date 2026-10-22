@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-danger"><i class="bi bi-telephone-inbound-fill me-2"></i> Emergency Support & Hotlines</h2>
        <p class="text-muted">If you or someone you know is in danger, reach out to these emergency services immediately.</p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover border-0 shadow-sm text-center p-3 h-100">
                <div class="card-body">
                    <div class="icon-circle bg-danger text-white mx-auto mb-3">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h5 class="fw-bold">Talian Kasih</h5>
                    <p class="text-muted small">KPWKM Emergency Hotline</p>
                    <h4 class="text-danger fw-bold">15999</h4>
                    <span class="badge bg-success"><i class="bi bi-clock-fill me-1"></i> 24 Hours</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover border-0 shadow-sm text-center p-3 h-100">
                <div class="card-body">
                    <div class="icon-circle bg-dark text-white mx-auto mb-3">
                        <i class="bi bi-shield-fill-exclamation"></i>
                    </div>
                    <h5 class="fw-bold">PDRM Emergency</h5>
                    <p class="text-muted small">Royal Malaysia Police</p>
                    <h4 class="text-dark fw-bold">999</h4>
                    <span class="badge bg-success"><i class="bi bi-clock-fill me-1"></i> 24 Hours</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover border-0 shadow-sm text-center p-3 h-100">
                <div class="card-body">
                    <div class="icon-circle bg-primary text-white mx-auto mb-3">
                        <i class="bi bi-heart-pulse-fill"></i>
                    </div>
                    <h5 class="fw-bold">WAO Hotline</h5>
                    <p class="text-muted small">Women's Aid Organisation</p>
                    <h4 class="text-primary fw-bold">+603 3000 8858</h4>
                    <span class="badge bg-success"><i class="bi bi-clock-fill me-1"></i> 24 Hours</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover border-0 shadow-sm text-center p-3 h-100">
                <div class="card-body">
                    <div class="icon-circle bg-warning text-dark mx-auto mb-3">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <h5 class="fw-bold">AWAM Helpline</h5>
                    <p class="text-muted small">All Women's Action Society</p>
                    <h4 class="text-warning fw-bold text-dark">016-228 4221</h4>
                    <span class="badge bg-secondary">Mon - Fri (9:30 AM)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection