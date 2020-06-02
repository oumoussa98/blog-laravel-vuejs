
@extends('layouts.master')
@section('content')

<div class="container  py-4">
    <div class="row">
    <div class="col-md-8 offset-2">
<div class="card" >
    <div class="card-body">           
      <h5 class="card-title">{{$postChoosen->title}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">
        by : {{$postChoosen->user->name}} <br>
         at : {{date("D d-m-Y ",strtotime($postChoosen->created_at))}}</h6>
      <p class="card-text lead">
          @php
              echo $postChoosen->content ;
          @endphp
            Some quick example text to build on the card title and make up the bulk of the card's content.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita illo eveniet quaerat nihil,
            ab aperiam a reprehenderit repudiandae quibusdam odit doloribus iste blanditiis quisquam
            fuga, voluptatibus, ex minus ratione.
            Some quick example text to build on the card title and make up the bulk of the card's content.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita illo eveniet quaerat nihil,
            ab aperiam a reprehenderit repudiandae quibusdam odit doloribus iste blanditiis quisquam
            fuga, voluptatibus, ex minus ratione.
            Some quick example text to build on the card title and make up the bulk of the card's content.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita illo eveniet quaerat nihil,
            ab aperiam a reprehenderit repudiandae quibusdam odit doloribus iste blanditiis quisquam
            fuga, voluptatibus, ex minus ratione.
            Some quick example text to build on the card title and make up the bulk of the card's content.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita illo eveniet quaerat nihil,
            ab aperiam a reprehenderit repudiandae quibusdam odit doloribus iste blanditiis quisquam
            fuga, voluptatibus, ex minus ratione.
            Some quick example text to build on the card title and make up the bulk of the card's content.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita illo eveniet quaerat nihil,
            ab aperiam a reprehenderit repudiandae quibusdam odit doloribus iste blanditiis quisquam
            fuga, voluptatibus, ex minus ratione.
            Some quick example text to build on the card title and make up the bulk of the card's content.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita illo eveniet quaerat nihil,
            ab aperiam a reprehenderit repudiandae quibusdam odit doloribus iste blanditiis quisquam
            fuga, voluptatibus, ex minus ratione.
            Some quick example text to build on the card title and make up the bulk of the card's content.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita illo eveniet quaerat nihil,
            ab aperiam a reprehenderit repudiandae quibusdam odit doloribus iste blanditiis quisquam
            fuga, voluptatibus, ex minus ratione.
            Some quick example text to build on the card title and make up the bulk of the card's content.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita illo eveniet quaerat nihil,
            ab aperiam a reprehenderit repudiandae quibusdam odit doloribus iste blanditiis quisquam
            fuga, voluptatibus, ex minus ratione.
            Some quick example text to build on the card title and make up the bulk of the card's content.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita illo eveniet quaerat nihil,
            ab aperiam a reprehenderit repudiandae quibusdam odit doloribus iste blanditiis quisquam
            fuga, voluptatibus, ex minus ratione.
            Some quick example text to build on the card title and make up the bulk of the card's content.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint expedita illo eveniet quaerat nihil,
            ab aperiam a reprehenderit repudiandae quibusdam odit doloribus iste blanditiis quisquam
            fuga, voluptatibus, ex minus ratione.
      </p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    
    </div>
  </div>
</div>
</div>
</div>

<div class="container-fluid">
    <div class="float-left">
        <li class="float-left"><a >Latest Posts:</a></li>
    </div>
    <div class="float-right">
        <li class="float-right"><a href="#">See All Posts</a></li>
    </div> </div>

<div class="album py-1 bg-light" id="grid">
    <div class="container-fluid py-4">
      <div class="row">

         @for ($j = 0; $j < 4; $j++,$i--)
             
         <div class="col-md-3">
            <div class="card mb-3 shadow-sm">
              <img src="{{asset('storage/'.$posts[$i-1]->photo)}}" class="bd-placeholder-img card-img-top" width="100%" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" >
              <div class="card-body" style="height: 220px">
                <p class="card-text">
                    <h5>{{$posts[$i-1]->title}}</h5>
                    <p class="text-muted">Published by: {{$posts[$i-1]->user->name}}
                         <br><small class="text-muted">Date: {{$posts[$i-1]->created_at}}</small>
                    </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href=" {{ url('posts/'.$posts[$i-1]->id.'/preview') }} " class="btn btn-outline-primary"> &nbsp Read More &nbsp </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endfor

        </div> </div> </div>
      

@endsection




























{{-- @extends('layouts.app')

@section('content')

  <div class="container" id="firstapp">
      <div class="row">
          <div class="col-md-12">

            <h1>@{{message}}</h1>

            <div class="list-group pt-4">
                <div class="list-group-item bg-secondary">
                    
                    <div class="row">
                        <div class="col-md-10">
                            <h3>
                                Experience
                             </h3>
                         </div>
                     <div class="col-md-2 text-right">
                        <button class="btn btn-lg btn-link text-light">Add</button>
                     </div>
                        
                    </div>
                </div>
                <div class="list-group-item">

                    <ul class="list-group">
                        <li class="list-group-item">
                        <div class="float-right">
                            <button class="btn btn-lg btn-link btn-sm text-primary">Edit</button>
                         </div>
                      <h3>Lorem ipsum dolor sit amet consectetur</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsa, 
                        explicabo reiciendis possimus tenetur perspiciatis. Sint esse veritatis,
                         molestias molestiae nobis adipisci deserunt dolorum exercitationem, 
                         maiores commodi aliquam facere harum!
                      </p>
                    
                    </li>

                    <li class="list-group-item">
                        <div class="float-right">
                            <button class="btn btn-lg btn-link btn-sm text-primary">Edit</button>
                         </div>
                      <h3>Lorem ipsum dolor sit amet consectetur</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsa, 
                        explicabo reiciendis possimus tenetur perspiciatis. Sint esse veritatis,
                         molestias molestiae nobis adipisci deserunt dolorum exercitationem, 
                         maiores commodi aliquam facere harum!
                      </p>
                    
                    </li>

                    <li class="list-group-item">
                        <div class="float-right">
                            <button class="btn btn-lg btn-link btn-sm text-primary">Edit</button>
                         </div>
                      <h3>Lorem ipsum dolor sit amet consectetur</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsa, 
                        explicabo reiciendis possimus tenetur perspiciatis. Sint esse veritatis,
                         molestias molestiae nobis adipisci deserunt dolorum exercitationem, 
                         maiores commodi aliquam facere harum!
                      </p>
                    
                    </li>
                        
                      </ul>
                </div>
            </div> 

            <br>

        <div class="list-group">
            <div class="list-group-item bg-secondary">
               
                <div class="row">
                    <div class="col-md-10">
                         <h3>Formation</h3>
                        </div>
                        <div class="col-md-2 text-right">
                            <button class="btn btn-lg btn-link text-light">Add</button>
                        </div>
                </div>
            </div>
            <div class="list-group-item">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsa, 
                explicabo reiciendis possimus tenetur perspiciatis. Sint esse veritatis,
                 molestias molestiae nobis adipisci deserunt dolorum exercitationem, 
                 maiores commodi aliquam facere harum!
            </div>
        </div> 
        <br>
    
        <div class="list-group">
            <div class="list-group-item bg-secondary">
                
                    <div class="row">
                        <div class="col-md-10">
                         <h3> Portofolio</h3>
                        </div>
                            <div class="col-md-2 text-right">
                                <button class="btn btn-lg btn-link text-light">Add</button>                           
                             </div>
                    </div>
                                
            </div>
            <div class="list-group-item">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsa, 
                explicabo reiciendis possimus tenetur perspiciatis. Sint esse veritatis,
                 molestias molestiae nobis adipisci deserunt dolorum exercitationem, 
                 maiores commodi aliquam facere harum!
            </div>
        </div> 
   <br>

        <div class="list-group">
            <div class="list-group-item bg-secondary">
                
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Competance</h3>
                        </div>
                            <div class="col-md-2 text-right ">
                                <button class="btn btn-lg btn-link text-light">Add</button>
                            </div>
                        
                    </div>            
            </div>
            <div class="list-group-item">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsa, 
                explicabo reiciendis possimus tenetur perspiciatis. Sint esse veritatis,
                 molestias molestiae nobis adipisci deserunt dolorum exercitationem, 
                 maiores commodi aliquam facere harum!
            </div>
        </div> 
<br>

          </div>
      </div>
  </div>

  @endsection

 @section('javascript')

   <script>

            var app = new Vue({
            el: '#firstapp',
            data: {
                message: 'Hello Vue!'
            },
            methods: {
                getExperience: function() {
                    axios.get('http://localhost:8000/cvs')
                    .then(response => {
                        console.log('response:',response);
                    })
                    .catch(error =>{
                        console.log('error:',error);
                    })

                },
                mounted() {
                 this.getExperience;
                },
            }


            })

   </script>



  @endsection  --}}

