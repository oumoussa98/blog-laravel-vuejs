
@extends('layouts.app')

@section('javascript')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

 <script>

          var app = new Vue({
          el: '#firstapp',
          data: {
              message: 'Hello Vue!',
              experiences: [],
          },
          methods: {
              getExperience: function() {
                  axios.get('http://localhost:8000/posts') 
                  .then(response => {
                      console.log(response);
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



@endsection