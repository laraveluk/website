<template>
    <div>
        <article class="max-w-2xl mx-auto">
            <header class="p-8 text-center">
                <router-link :to="{name: 'post-create'}" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 float-right no-underline rounded">Create Post</router-link>

                <h1 class="tracking-tight text-5xl text-red">LaravelUK - News and Updates</h1>
            </header>
        </article>
        <div class="flex flex-wrap max-w-2xl mx-auto">
            <div class="w-full sm:w-full md:w-1/2 mb-4" v-for="post in posts">
                <post-row :post="post"></post-row>
            </div>
        </div>
    </div>
</template>

<script>
    import PostRow from './PostRow'
    export default {
        components: { PostRow },
        mounted() {
            this.posts = this.fetchPosts()
        },
        data() {
            return {
                posts: []
            }
        },
        methods: {
            fetchPosts() {
                axios.get('/api/post')
                    .then(({data}) => {
                        this.posts = data.posts
                    })
            }
        }
    }
</script>

<style scoped>

</style>
