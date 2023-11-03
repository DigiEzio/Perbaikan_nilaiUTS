@extends('movie')

@section('title', $movie['judul'])

@section('content')
@if ($movie)
<div class="col-lg-12">
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="/images/{{ $movie['foto_sampul'] }}" class="img-fluid rounded-start">
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h1 class="card-title">{{ $movie['judul'] }}</h1>
              <p class="card-text">{{ $movie['sinopsis'] }}</p>
              <p class="card-text">Tahun : {{ $movie['tahun'] }}</p>
              <p class="card-text">Sutradara: {{$movie['Sutradara']}}</p>
              <p class="card-text">Pemain : {{ implode(', ',$movie['pemain']) }}</p>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill " viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
            <p class="card-text">{{$movie['score']}}</p>
            <p>info:<a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://www.imdb.com/?ref_=nv_home">
                imdb
             </p>


              <a href="/" class="btn btn-success">Kembali</a>
            </div>
          </div>
        </div>
      </div>
</div>
@else
<div class="alert alert-danger" role="alert">
    Data film tidak ditemukan!
</div>
<a href="/" class="btn btn-success">Kembali</a>
@endif
@endsection
