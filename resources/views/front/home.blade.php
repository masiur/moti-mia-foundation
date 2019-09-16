@extends('front.layouts.default')

@section('content')
    <div class="container-fluid">

    </div>
    <div id="particle">
        <h1 class="text-center text-warning"> InfancyIT</h1>
    </div>
@endsection
@section('styles')
    <style>
        #particle {
            background-color: #000000;
            z-index: 0;
            height: 100vh;
            width: 100vw;
        }

        #particle h1 {
            padding-top: 10px;
        }

        .overlay {
            position: relative;
        }
    </style>
@endsection
@section('scripts')

    <script src="{{asset('assets/particles/particles.min.js') }}"></script>
    <script>
        particlesJS.load('particle', '{{ asset('particles.json') }}');
    </script>
@endsection