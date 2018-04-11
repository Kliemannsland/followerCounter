<template>
    <div>
        <div class="d-flex justify-content-center">
            <i class="fab fa-instagram fa-10x"></i>
        </div>
        <div class="text-center text-dark">
            <template v-if="isLoading">
                <loading-component />
            </template>
            <div 
                v-else
                class="follower-count">
                {{followerCount.toLocaleString()}}
            </div>
        </div>
    </div>
</template>

<script>
    import LoadingComponent from './LoadingComponent'

    export default {
        name: "InstagramComponent",
        components: {
            'loading-component': LoadingComponent,
        },
        data: function () {
            return {
                followerCount: 0,
                isLoading: true,
            }
        },
        mounted: function () {
            this.getSubscriber();

            setInterval(function () {
                this.isLoading = true;
                this.getSubscriber();
            }.bind(this), 120 * 1000)
        },
        methods: {
            getSubscriber: function () {
                let vm = this;
                axios.get('/api/instagram')
                    .then(function (res) {
                        vm.followerCount = res.data;
                        vm.isLoading = false;
                    });
            }
        }
    }
</script>

<style scoped>

</style>