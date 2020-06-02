<template>
  

<div class="container">
      <div class="row">
          <div class="col-md-12">

            <h1>{{message}}</h1>

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
                        <li class="list-group-item" v-for="experience in experiences" :key="experience.id">
                        <div class="float-right">
                            <button class="btn btn-lg btn-link btn-sm text-primary">Edit</button>
                         </div>
                      <h3>{{experience.title}}</h3>
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

</template>

   <script>
import axios from 'axios';

export default {
            el: '#app',
            data: {
                message: 'Hello Vue!',
            },
           methods: { 
                getExperience: function() {
                    axios.get('http://localhost/myProjects/laravelProjects/cvtheque/public/cvs/experiences') 
                    .then(response => {
                      return console.log(response);
                    })
                    .catch(error =>{
                       return console.log('error:',error);
                    })

                },
                logmsg:function(){
                    return console.log('hello');
                },
           },
            
            mounted() {
                 this.pushtoexp;
                },



            }


   </script>




