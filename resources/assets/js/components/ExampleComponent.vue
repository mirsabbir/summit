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
                        message: 'Password reset link sent to your E-mail',
                        type: 'is-success'
                    })
                }
            }
           
        }
    }
</script>
