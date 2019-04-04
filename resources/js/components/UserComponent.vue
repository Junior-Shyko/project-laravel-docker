<template>
<div class="container">
   <div class="row">
       <div class="col-md-12">
           <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="users in user">
      <th scope="row">{{users.id}}</th>
      <td>{{users.name}}</td>
      <td>{{users.email}}</td>
     
      <td>
          <a v-bind:href="'/user/' + users.id+'/edit'" class="btn btn-primary">
          <i class="fa fa-edit"></i>
          </a>
          <a href="#" class="btn btn-danger">
            <i class="fa fa-trash"></i>
          </a>
      </td>
    </tr>
   
  </tbody>
</table>
{{ user }}

    </div>    
   </div>
</div>    
        

</template>
<script>
export default {
    data () {
    return {
      user: null
    }
  },
  mounted () {
    axios
        .get(domain_complet+'all-user')
        .then(response => (
          this.user = response.data,
          console.log(this.user)
        ))
  }
}
</script>