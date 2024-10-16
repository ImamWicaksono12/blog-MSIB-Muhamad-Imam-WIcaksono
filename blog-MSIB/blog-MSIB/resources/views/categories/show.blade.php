@extends('layouts.app')

@section('title', 'Show Category')

@section('content')
    <div class="card">
        <h3 class="card-header">
            {{ $category->name }}
        </h3>
        <div class="card-body">
            <blockquote class="blockquote mb-3">
                <p>{{ $category->description }}</p>
            </blockquote>
            <a href="{{ route('categories.index') }}" class="btn btn-outline-success">Kembali</a>
        </div>
    </div>
@endsection
