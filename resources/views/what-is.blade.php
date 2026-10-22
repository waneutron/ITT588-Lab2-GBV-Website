@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="fw-bold mb-4 text-danger"><i class="fa-solid fa-circle-info me-2"></i>What is Domestic & Gender-Based Violence (GBV)?</h2>
    
    <div class="row">
        <div class="col-lg-8">
            <p class="lead">Gender-Based Violence (GBV) refers to harmful acts directed at an individual based on their gender. It stems from unequal power relations and gender inequalities.</p>
            
            <h4 class="mt-4">Forms of Domestic Violence in Malaysia (Domestic Violence Act 1994)</h4>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item"><strong>Physical Abuse:</strong> Causing bodily pain, injury, or fear of physical harm.</li>
                <li class="list-group-item"><strong>Emotional / Psychological Abuse:</strong> Causing mental distress, insults, stalking, or constant humiliation.</li>
                <li class="list-group-item"><strong>Sexual Abuse:</strong> Any forced or coerced sexual act without consent.</li>
                <li class="list-group-item"><strong>Economic Abuse:</strong> Controlling finances, denying access to funds, or preventing employment.</li>
            </ul>

            <h4>Common Signs of Abuse</h4>
            <p>Victims often experience isolation from friends and family, sudden changes in behavior, unexplained bruises, or excessive fear towards their partner or family members.</p>
        </div>
        <div class="col-lg-4">
            <div class="card bg-light p-3 shadow-sm">
                <h5 class="text-danger fw-bold">Need Immediate Help?</h5>
                <p class="small">If you are facing urgent threats, do not hesitate to contact authorities right away.</p>
                <a href="{{ route('hotline') }}" class="btn btn-danger w-100">View Hotlines</a>
            </div>
        </div>
    </div>
</div>
@endsection