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

                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">
                            Post Type
                        </label>
                        <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow" v-model="post.post_type">
                            <option value="post">News</option>
                            <option value="events">Event</option>
                            <option value="tutorials">Tutorial</option>
                            <option value="interviews">Interview</option>
                        </select>
                        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="body">
                            Content
                        </label>
                        <wysiwyg v-model="post.body" />
                    </div>

                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="title">
                            Tags
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" v-model="post.tags">
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
                    body: '',
                    post_type: 'post',
                    tags: ''
                }
            }
        },
        methods: {
            savePost() {
                axios.post('/api/post', { data: this.post })
                    .then(({data}) => {
                        this.$router.push(`/blog/${data.post.slug}`)
                    })
            }
        }
    }
</script>
