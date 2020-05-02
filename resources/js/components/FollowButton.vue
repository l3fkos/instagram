<template>
    <div class="container">
        <button class="btn btn-info pt-0 pb-0" @click="followUser">Follow</button>
    </div>
</template>

<script>
    export default {
        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            followUser(){
                axios.post('/follow/' + this.userId)
                .then(response => {
                    alert(response.data)
                });
            }
        }
    }
</script>
