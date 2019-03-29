<template>
    <div class="container">
      <div class="row">
                
          <!-- <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="http://www.w3.org/2000/svg" width="100%" height="225">
               
             <div class="card-body">
              <p class="card-text">
                ID: 
                Endereço:  Nº {{item.condominium_number}}</p>
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Detalhes</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Atualizar</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
            </div> 
            
          </div>-->
          <div class="col-md-4"  v-for="item in list">
            <div class="card mb-4 shadow-sm">
              <img v-bind:src="item.condominium_photo" width="100%" height="225">
               
             <div class="card-body">
              <p class="card-text">
                ID:  {{item.condominium_id}}
                Endereço: {{item.condominium_address}}, Nº {{item.condominium_number}}</p>
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">Detalhes</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Atualizar</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
            </div>
            
          </div>
      <infinite-loading @distance="1" @infinite="infiniteHandler">
          <div slot="no-more">--</div>
          <div slot="spinner">Carregando...</div>
          <div slot="no-results">Sem resultados</div>
      </infinite-loading>
      </div>
    </div>  
</template>

<script>
    export default {
      mounted(){
        this.infiniteHandler()
      },
      data(){
        return {
          list: [],
          page: 0 
        };
      },          
      methods: {
          infiniteHandler($state){
            this.page++
            let url = 'api/cond?page=' + this.page
            
            axios.get(url)
            .then(response => {
              let cond = response.data.data
             
              if(cond.length){
                  this.list = this.list.concat(cond)
                  console.log(this.list);
                  $state.loaded()
              }else{
                  $state.complete()
              }
            }).catch(function (error) {
              // handle error
              console.log(error);
            })
          }
        },
    }
</script>