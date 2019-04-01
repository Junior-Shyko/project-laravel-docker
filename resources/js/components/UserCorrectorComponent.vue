<template>
<div class="container">
   <div class="row">
       <div class="col-md-2"></div>
       <div class="col-md-8">
            <div class="row">
                <div class="card" style="width: 100%">
                        <div class="card-header">
                            Cadastrar Avaliadordfsdf
                        </div>
                    <div class="card-body">                      
                        <form @submit.prevent="submit">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" v-model="fields.name" placeholder="Digite seu nome completo">
                            
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="email" name="email"  v-model="fields.email" placeholder="Digte seu e-mail">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" id="password" name="password"  v-model="fields.password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="">Cep</label>
                                <input type="text" class="form-control" id="cep" name="cep"  v-model="fields.cep" placeholder="Seu Cep">
                            </div>
                            <div class="form-group">
                                <label for="">Endereço</label>
                                <input type="text" class="form-control" id="address" name="address"  v-model="fields.address" placeholder="Seu endereço">
                            </div>
                            <div class="form-group">
                                <label for="">Númemro</label>
                                <input type="text" class="form-control" id="number" name="number"  v-model="fields.number" placeholder="Enter email">
                            </div>
                            
                            <a href="#" id="novoclick">Click</a>

                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i>
                                Enviar</button>
                        </form>
                    </div>    
                </div>   
            </div>         
        </div>
       <div class="col-md-2"></div>
   </div>
</div>
</template>
<script>
export default {



  data() {
    return {
      fields: {},
      errors: {},
    }
  },
  created: function () {
    // `this` points to the vm instance
    console.log('a is: ' + this.a)
  },
  methods: {
    submit() {
      this.errors = {};
      var url = domain_complet + 'user';
      axios.post(url, this.fields).then(response => {
        alert('Message sent!');
      }).catch(error => {
        if (error.response.status === 422) {
          this.errors = error.response.data.errors || {};
          console.log(this.errors);
        }
      });
    },
    chamaalert() {
      alert('aqui');
    }
  },
}
</script>