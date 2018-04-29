<template>
    <div>{{success()}}</div>
</template>

<script>
    export default {
        data: function(){
            return{
                    success: function() {
                    this.$toast.open({
                        duration: 8000,
                        message: 'Your password has been reset',
                        type: 'is-success' 
                    })
                }
            }
           
        }
    }
</script>
