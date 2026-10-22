@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="fw-bold mb-4 text-danger"><i class="fa-solid fa-scale-balanced me-2"></i>Law Enforcement & Legal Protection</h2>
    <p class="lead">In Malaysia, domestic violence is a serious crime under the <strong>Domestic Violence Act 1994 (DVA 1994)</strong> and the <strong>Penal Code</strong>.</p>

    <div class="row g-4 mt-2">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm p-3">
                <div class="card-body">
                    <h4 class="card-title text-primary"><i class="fa-solid fa-file-shield me-2"></i>Protection Orders</h4>
                    <p class="card-text">Victims can apply for legal protection orders through the court or police:</p>
                    <ul>
                        <li><strong>Interim Protection Order (IPO):</strong> A temporary order issued by the court quickly before the full trial to protect the victim from further abuse.</li>
                        <li><strong>Protection Order (PO):</strong> A court order restraining the abuser from committing further acts of violence or approaching the victim.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 shadow-sm p-3">
                <div class="card-body">
                    <h4 class="card-title text-primary"><i class="fa-solid fa-gavel me-2"></i>The Penal Code</h4>
                    <p class="card-text">Offenses like voluntarily causing hurt (Section 323), causing grievous hurt (Section 325), and criminal intimidation (Section 506) apply equally within domestic contexts. Abuse is <strong>not</strong> a private domestic matter; it is a crime.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection