@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="text-center">{{ $contact->name }}</div>
        <div class="text-center">{{ $contact->email }}</div>
        <div class="ext-center">{{ $contact->phone }}</div>
    </div>
</div>
@endsection
