<template>

       <div class="album bg-light" >
            <div class="container">
               <div class="row">
      <div class="col-md-4" v-for="(post,index) in posts" :key="index">
                <div class="card mb-4 shadow-sm">
                  <img :src="'http://localhost:8000/storage/' + post.photo" class="bd-placeholder-img card-img-top" 
                  width="100%" height="225" preserveAspectRatio="xMidYMid slice" 
                  focusable="false"  aria-label="Placeholder: Thumbnail">
                  <div class="card-body">
                    <div class="card-text">
                        <h4>{{post.title}}</h4>
                        {{post.content}}
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi facilis
                        earum natus ea asperiores laboriosam assumenda distinctio explicabo ex.
                         Voluptatibus.
                        </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group py-2">
                    <a :href="'http://localhost:8000/posts/' + post.id + '/preview'" class="btn btn-outline-primary"> Read  More</a>
                      </div>
                      <small class="text-muted">{{post.created_at}}</small>
                    </div>
                  </div>
                </div>
              </div>
              <infinite-loading class="infinite" spinner="spiral" @infinite="infiniteHandler" @distance="1">
               </infinite-loading>
              </div>
              </div>
            </div>
       
              
    
              


</template>
<style scoped>
  .infinite{
    width:10% ;
    height: 10%;
    margin: auto;
  }
  .card-text {
  overflow-y: hidden;
  text-overflow: ellipsis;
  height: 100px;
  }
</style>


<script>

import axios from 'axios';

const api = 'http://localhost:8000/posts?page';

export default {
  data() {
    return {
      page: 0,
      posts: [],

    };
  },
   methods: {
     infiniteHandler($state) {
       axios.get(api, {
         params: {
           page: this.page,
         },
       }).then(({ data }) => {
         if (data.data.length) {
           this.page += 1;
           this.posts.push(...data.data);
           $state.loaded();
         } else {
           $state.complete();
         }
       });
     },
   },
};


//     export default {
//         mounted() {
//             console.log('Component mounted.')
//         },
//         data() {
//             return {
//                 posts:[],
//                 page: 1
//             }
//         }, 
//         methods: {
//             infiniteHandler($state){
//                 let vm = this ;
//              this.$http.get('http://localhost:8000/posts?page='+this.page)
//               .then(response => {
//                   return response.json() ;
//               }).then(newResponse => {
//                   $.each(newResponse.data,function(key ,value){
//                     vm.posts.push(value)
//                   });
//                  $state.loaded() ;

//               });
//               this.page = this.page + 1 ;
// }
            
//         },
//     }
</script>
