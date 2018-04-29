<template>
    <div>
        <p @click="openModal" >Edit</p>
        <modal :status="status" @closed="close" :commentBody="inside" ></modal>
    </div>
</template>

<script>
    var modal = require('./Modal.vue');
    export default{
        props:['inside'],
        components:{modal},
        data(){
            return{
                status: ''
            }
            
        },
        methods:{
            openModal(){
                this.status = 'is-active';
            },
            close(){
                this.status = '';
                
            }
        }
    }

</script>