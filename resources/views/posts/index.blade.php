 @extends('layouts.app')
@section('content')

<script>
     $(document).ready(function(){
  $(".btn-danger").click(function(){
    var r = confirm("This item is going to be deleted");
          if (r == true){
          $(".btn-danger").attr("type", "submit");}
          else{
           $(".btn-danger").attr("type", "button");}
  });

   $("#changelook").click(function(){
    if($('#list').css('display') == 'none')
    {
    $("#changelook").val("Grid");
    $("#grid").css("display", "none");
    $("#list").css("display", "block");
    }
    else {
      $("#changelook").val("List");
      $("#list").css("display", "none");
      $("#grid").css("display", "block");

    }
});
});

</script>



    <div class="row">
  <div class="col-2">
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <h4 class="px-4">Dashboard</h4>
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">My Posts</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
</div>
  </div>
  <div class="col-10">
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

    <div class="py-2">
      <div class="row float-left">
          <div class="col-md-12">
              <input type="button" id="changelook" value="List" class="btn btn-sm btn-dark mx-3 px-5 py-2">
          </div>
      </div>
      <div class="row float-right">
        <div class="col-md-12">
          <a href=" {{ url('posts/create') }} " class="btn btn-success float-right mx-3">Create new post</a>
        </div>
    </div>
 
</div>

          {{-- display data by card thumbnails --}}

          <div class="album bg-light " id="grid">
            <div class="container py-5">
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
                        {{-- @can('delete', $cv) --}}
                        <form method="POST" action="{{ url('posts/'.$post->id) }}">
                            @method('DELETE')
                            @csrf
                            <a href=" {{ url('posts/'.$post->id.'/preview') }}" class="btn btn-sm btn-primary" target="_blanck">Preview</a>
                            <a href="{{ url('posts/'.$post->id.'/edit') }}" class="btn btn-sm btn-secondary ">Edit</a>
                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                           </form>
                           {{-- @endcan --}}
                              </div>
                              <small class="text-muted">{{$post->created_at}}</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
          </div>
            </div></div>
        
              {{---------------------- posts par list ------------------------------------}}
                         <div table-responsive id="list" style="display: none">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Presentation</th>
                                <th>date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
        
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}} <br> {{$post->user->name}}</td>
                                    <td>{{$post->content}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>
                                    <form method="POST" action="{{ url('posts/'.$post->id) }}">
                                      @method('DELETE')
                                      @csrf
                                      <a href=" {{ url('posts/'.$post->id.'/preview') }} " class="btn btn-sm btn-primary">Preview</a>
                                      <a href="{{ url('posts/'.$post->id.'/edit') }}" class="btn btn-sm btn-secondary">Edit</a>
                                      <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                     </form>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
              
        
  </div>


  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">profile</div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">messages</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">settings</div>
</div>
</div>


@endsection

 
 
