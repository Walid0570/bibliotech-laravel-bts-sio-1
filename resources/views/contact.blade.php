@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3><i class="fas fa-envelope me-2"></i>Contactez-nous</h3>
                </div>
                <div class="card-body">
                    <h5>{{ $etablissement }}</h5>
                    <p class="text-muted">{{ $formation }}</p>
                    <!-- Ajoutez le reste des champs ici -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection