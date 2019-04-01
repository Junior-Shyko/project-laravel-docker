<template>
    <div class="container">
        <div id="main" class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h1>VUEjs y Laravel</h1>
                    <ul class="list-group">
                        <li v-for="item in lists" class="list-group-item">                      
                            @{{ item.name }} <strong>@{{ item.email }}</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <h1>JSON</h1>
                    <pre>
                        @{{ $data | json }}
                    </pre>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
            mounted() {
                console.log('Component mounted.')
            }
    }
</script>
