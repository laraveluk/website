<template>
    <div>
        <article class="max-w-2xl mx-auto">
            <header class="p-8 text-center">
                <h1 class="tracking-tight text-5xl text-red">Create Post</h1>
            </header>

            <section class="flex max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg border border-red">
                <div class="w-full bg-white rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="title">
                            Title
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" v-model="post.title">
                    </div>

                    <div class="mb-6">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="body">
                            Content
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3" rows="15" v-model="post.body"></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" @click="savePost">
                            Create Post
                        </button>
                    </div>
                </div>
            </section>
        </article>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                post: {
                    title: '',
                    body: ''
                }
            }
        },
        methods: {
            savePost() {
                axios.post('/ajax/posts', { data: this.post })
                    .then(({data}) => {
                        this.$router.push(`/blog/${data.post.slug}`)
                    })
            }
        }
    }
</script>
