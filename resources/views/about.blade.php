@extends('layout')

@section('content')

<article id="about">
    <div class="title"><h2>About</h2></div>
    <div class="konten">
        <div class="isi">
            <div class="image flex">
                <img src="{{ asset('web-content/img/about.jpg') }}" alt="Midoriya 16:9">
            </div>
    
            <section class="penjelasan flex">
                <h2>About</h2>
                <p>Web ini adalah kumpulan artikel. jelajahi artikel dan buatlah artikel. Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
            </section>
        </div>
    </div>
</article>

@endsection