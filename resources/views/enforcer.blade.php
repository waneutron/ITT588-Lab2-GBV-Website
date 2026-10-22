@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="fw-bold mb-4 text-danger"><i class="fa-solid fa-building-shield me-2"></i>Enforcers & Supporting Organizations</h2>
    <p class="lead">Several government agencies and non-governmental organizations (NGOs) in Malaysia specialize in handling GBV cases.</p>

    <div class="row g-4 mt-2">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm p-3">
                <div class="card-body">
                    <h5 class="fw-bold">PDRM (Royal Malaysia Police)</h5>
                    <p class="text-muted small">D11 Division (Sexual, Women and Child Investigation Division)</p>
                    <p>Handles official police reports, investigations, and immediate rescues.</p>
                    <span class="badge bg-primary">Emergency: 999</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm p-3">
                <div class="card-body">
                    <h5 class="fw-bold">Talian Kasih (KPWKM)</h5>
                    <p class="text-muted small">Ministry of Women, Family and Community Development</p>
                    <p>24-hour helpline providing counseling, rescue coordination, and social welfare support.</p>
                    <span class="badge bg-success">Hotline: 15999</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm p-3">
                <div class="card-body">
                    <h5 class="fw-bold">WAO (Women's Aid Organisation)</h5>
                    <p class="text-muted small">Non-Governmental Organization</p>
                    <p>Provides free shelter, social work support, psychological counseling, and legal advice.</p>
                    <span class="badge bg-danger">SMS/WhatsApp: +60 18-988 8058</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection