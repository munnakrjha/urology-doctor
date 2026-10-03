@extends('layouts.app')

@section('title', 'Dr. Mriganka Deuri Bharali | Consultant Urologist')

@section('content')

    <main>

        @include('components.hero')
    
    
        @include('components.about')
        @include('components.why')
        @include('components.treatment')
        @include('components.testimonial')
        @include('components.cta')
        @include('components.faq')
    






    </main>
    @include('components.footer')

@endsection