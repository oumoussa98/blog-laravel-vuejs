@extends('layouts.master')
@section('content')

          {{-- display data by card thumbnails --}}

  <div class="album py-5 bg-light" id="grid">
    <div class="container py-4">
      <div class="row">
                @foreach ($posts as $post)
               <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="{{asset('storage/'.$post->photo)}}" class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false"  aria-label="Placeholder: Thumbnail">
                  <div class="card-body">
                    <p class="card-text">
                        <h4>{{$post->title}}</h4>
                        <p class="text-muted">{{$post->user->name}}</p>
                        {{$post->content}}
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi facilis
                        earum natus ea asperiores laboriosam assumenda distinctio explicabo ex.
                         Voluptatibus.
                        </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                    <a href=" {{ url('posts/'.$post->id.'/preview') }} " class="btn btn-outline-primary"> &nbsp Read More &nbsp </a>
                      </div>
                      <small class="text-muted">{{$post->created_at}}</small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

      </div>
    </div>
  </div>
 


@endsection