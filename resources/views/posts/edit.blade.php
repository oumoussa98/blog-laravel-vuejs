@extends('layouts.app')

@section('content')

 <div class="container">

    @if(count($errors))
    <div class="alert alert-danger" role="alert">
     <ul>
      @foreach ($errors->all() as $error)
          <li> {{$error}} </li>
      @endforeach 
  </ul> 
  </div>
  @endif

     <div class="row">
         <div class="col-md-12">
             <form action=" {{ url('posts/'.$post->id) }} " method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                     <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input name="category" class="form-control" value="{{$post->category}}">
                </div>
                <div class="form-group">
                     <label for="content">content</label>
                     <textarea name="content" class="form-control" >{{$post->content}}</textarea>
                </div>
                <div class="form-group">
                    <label for="photo">Image</label>
                    <div class="custom-file">
                        <input name="photo" class="form-control" type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file...</label>
                      </div>
                      <script>
                        $('#customFile').on('change',function(){
                            //get the file name
                                var filename = $(this).val();
                                var lastIndex = filename.lastIndexOf("\\");
                                if (lastIndex >= 0) {
                                    filename = filename.substring(lastIndex + 1);
                                }
                            //replace the "Choose a file" label
                            $(this).next('.custom-file-label').html(filename);
                        })
                    </script>
               </div>
               
                <div class="form-group">
                    <label for="submit"></label>
                    <input type="submit" name="submit" value="modifier" class="form-control btn btn-danger">
               </div>
             </form>  
         </div>
     </div>
 </div>

@endsection