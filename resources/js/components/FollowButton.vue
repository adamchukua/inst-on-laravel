<template>
    <div>
        <button class="btn btn-primary ms-3" @click="follow" v-text="followButtonText"></button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],

        data() {
            return {
                status: this.follows,
            }
        },

        methods: {
            follow() {
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        this.status = !this.status;
                    })
                    .catch(errors => {
                        if (errors.response.status == 401) {
                            window.location = '/login';
                        }
                    });
            }
        },

        computed: {
            followButtonText() {
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
