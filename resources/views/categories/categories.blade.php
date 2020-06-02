@extends('layouts.master')

@section('content')





<div class="row">
  <div class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" aria-selected="true">All Categories</a>
      @foreach ($categories as $category)
      <a class="nav-link" id="{{'v-pills-'.str_replace(' ', '',$category->category).'-tab'}}" 
        data-toggle="pill" href="{{'#v-pills-'.str_replace(' ', '',$category->category)}}" 
        role="tab" aria-controls="{{'v-pills-'.str_replace(' ', '',$category->category)}}" 
        aria-selected="false">{{$category->category}}</a>

      @endforeach
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      @foreach ($categories as $category)

      <div class="tab-pane fade" id="{{'v-pills-'.str_replace(' ', '',$category->category)}}" 
      role="tabpanel" aria-labelledby="{{'v-pills-'.str_replace(' ', '',$category->category).'-tab'}}">

        <div class="album bg-light">
          <div class="container">
            <div class="row">

      @foreach ($posts as $post)

      @if ($post->category == $category->category )

      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img src="{{asset('storage/'.$post->photo)}}" class="bd-placeholder-img card-img-top" 
          width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="true" >

          <div class="card-body">
            <p class="card-text">
                <h5>{{$post->title}}</h5>
                <p class="text-muted">Published by: {{$post->user->name}}
                     <br><small class="text-muted">Date: {{$post->created_at}}</small>
                </p>
            <div class="d-flex justify-content-between align-items-center">
               {{$category->category}} 
            </div>
          </div>
        </div>
      </div>
          
      @endif
          
      @endforeach
      
      </div>
    </div>
  </div>
</div>

      @endforeach


    </div>
  </div>
</div>






@endsection