<template>
    <div>
        <article class="max-w-2xl mx-auto">
            <header class="p-8 text-center">
                <div v-if="this.editMode">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" v-model="post.title">
                </div>
                <div v-else>
                    <h1 class="tracking-tight text-4xl text-red">{{post.title}}</h1>
                </div>
            </header>
        </article>
        
        <div class="flex flex-wrap max-w-2xl mx-auto">
            <div class="w-full rounded bg-white overflow-hidden shadow-lg">
                <!-- <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains"> -->
                <div class="px-6 py-4 leading-normal">
                    <div class="mb-2">Posted by <a href="">{{post.author.name}}</a> - {{ post.created_at }}</div>
                    <div v-if="this.editMode">
                        <vue-editor v-model="post.body"></vue-editor>
                    </div>
                    <div v-else>
                        <p class="text-grey-darker text-base pt-2 pb-2 mb-2 mt-2" v-html="post.body"></p>
                    </div>
                    <div class="px-1 py-4 mb-4">
                        <div v-if="this.editMode">
                            <a href="#" @click.prevent="editMode = !editMode" class="bg-red-light hover:bg-red text-white font-bold py-2 px-4 mx-1 float-right no-underline rounded">Cancel</a>
                            <a href="#" @click.prevent="savePost()" class="bg-green-light hover:bg-green text-white font-bold py-2 px-4 mx-1 float-right no-underline rounded">Save</a>
                        </div>
                        <div v-else>
                            <a href="#" @click.prevent="deletePost()" class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 mx-1 float-right no-underline rounded">Delete Post</a>
                            <a href="#" @click.prevent="editPost()" class="bg-blue-light hover:bg-blue text-white font-bold py-2 px-4 mx-1 float-right no-underline rounded">Edit Post</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { VueEditor} from 'vue2-editor'

    export default {
        data() {
            return {
                post: this.getPost(this.$route.params.slug),
                editMode: false
            }
        },

         components: {
            VueEditor
        },
        methods: {
            getPost(slug) {
                axios.get(`/api/post/${slug}`)
                    .then(({data}) => {
                        this.post = data.post
                    })
            },
            editPost() {
                this.editMode = !this.editMode
            },
            savePost() {
                let slug = this.$route.params.slug
                axios.patch(`/api/post/${slug}`, this.post)
                    .then(({data}) => {
                        this.editMode = !this.editMode
                    })
            },
            deletePost() {
                let slug = this.$route.params.slug
                axios.delete(`/api/post/${slug}`, this.post)
                    .then(({data}) => {
                        if (data.status == 'deleted') {
                            console.log('post deleted')
                            this.$router.go(-1)
                        } else {
                            alert(data.status)
                        }
                    })
            }
        }
    }
</script>
