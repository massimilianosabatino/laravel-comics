@extends('layout.app')

@section('page.main')
{{-- Jumbo --}}
@include('partials.jumbo')
{{-- /Jumbo --}}
{{-- Main content --}}
<section id="details">
    <div class="container-card container">
        {{-- Tag serie name --}}
        <div class="tag-img">CURRENT SERIES</div>
        {{-- /Tag serie name --}}
    </div>
</section>
{{-- /Main content --}}
@endsection