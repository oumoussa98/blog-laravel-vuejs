@extends('layouts.app')

@section('content')

<div class="container">
     <div class="row">
         <div class="col-md-12">
             <form action=" {{ url('posts') }} " method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group" >
                     <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{old('title')}}">

                @if($error = $errors->get('title'))
                  @foreach ($error as $message)
                      <li style="color:red"> {{$message}} </li>
                  @endforeach 
              @endif

                </div>
                <div class="form-group">
                     <label for="category">Category</label>
                     <input name="category" class="form-control" value="{{old('category')}}">

                     @if($error = $errors->get('category'))
                     @foreach ($error as $message)
                         <li style="color:red"> {{$message}} </li>
                     @endforeach 
                 @endif

                 <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control">{{old('content')}}</textarea>

                    @if($error = $errors->get('content'))
                    @foreach ($error as $message)
                        <li style="color:red"> {{$message}} </li>
                    @endforeach 
                @endif

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
                    <input  type="submit" name="submit" value="Save" class="form-control btn btn-primary">
               </div>
            
             </form>  
         </div>
     </div>
 </div>

@endsection