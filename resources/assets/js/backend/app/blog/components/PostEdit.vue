<template>
    <div v-if="post !== undefined" class="bg-white p-6">
        <div class="flex flex-wrap max-w-2xl mx-auto">
            <div class="w-full rounded overflow-hidden shadow-lg">
                <div class="mt-6 px-6">
                     <input 
                     class="bg-white shadow appearance-none border rounded w-full py-4 px-3 text-grey-darker" v-model="post.title">
                </div>
               
                <!-- <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains"> -->
                <div class="px-6 py-4 leading-normal">
                    <div class="mb-2">Posted by <a href="">{{post.author.name}}</a> - {{ post.created_at }}</div>
                        <vue-editor v-model="post.body"></vue-editor>
                
                    <div class="px-1 py-4 mb-4">
                            <a href="#" @click.prevent="cancelEdit()" class="bg-red-light hover:bg-red text-white font-bold py-2 px-4 mx-1 float-right no-underline rounded">Cancel</a>
                            <a href="#" @click.prevent="savePost()" class="bg-green-light hover:bg-green text-white font-bold py-2 px-4 mx-1 float-right no-underline rounded">Save</a>
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
                post: {
                    title: null,
                    body: null
                }
            }
        },

        created() {
            this.post = this.getPost(this.$route.params.slug)
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
            savePost() {
                let slug = this.$route.params.slug
                axios.patch(`/api/post/${slug}`, this.post)
                    .then(({data}) => {
                        this.$router.replace({name: 'post-show', params: {'slug': this.post.slug}})
                    })
            },

            cancelEdit() {
                this.$router.replace({name: 'post-show', params: {'slug': this.post.slug}})
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
