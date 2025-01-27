// user/success.blade.php
@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Enregistrement réussi</h2>
                <p>{{ session('message') }}</p>
            </div>
        </div>
    </div>
@endsection
