<template>
    <div class="modal " :class="status">
        <div class="modal-background"></div>
        <div class="modal-content">

            <div class="modal-card" style="width: auto">
                
                 <header class="modal-card-head">
                    
                </header>


                <section class="modal-card-body">
                    <b-field label="Edit comment">
                        <b-input
                            type="textarea"
                            :value="commentBody"
                            >
                        </b-input>
                    </b-field>

                    <button class="button is-primary">Update</button>
                </section>


                 <footer class="modal-card-foot">
                    
                </footer>



            </div>

        </div>
        <button class="modal-close is-large" aria-label="close" @click="close"></button>
    </div>
</template>

<script>
    export default{
        props:['status', 'commentBody'],
        data(){
            return{
                
            }
        },
        methods:{
            close(){
                this.$emit('closed');
            }
        }
    }
</script>