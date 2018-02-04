<template>
    <div class="font-sans bg-grey-lighter flex flex-col min-h-screen w-full">
        <div class="flex-grow container mx-auto sm:px-4 pt-6 pb-8">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full mb-6 lg:mb-0 lg:w-1/2 px-4 flex flex-col">
                    <div class="flex-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">
                        <div class="border-b">
                            <div class="flex justify-between px-2 -mb-px">
                                <h3 class="text-blue-dark py-4 font-normal text-lg">Recent Articles</h3>
                            </div>
                        </div>

                        <div class="text-grey-darker items-center border-b -mx-4 px-6 py-1">
                            <div class="flex justify-between">
                                <div class="flex-1 text-grey-darker  px-4 py-2 mb-1">Article Title</div>
                                <div class="flex-1 text-grey-darker  px-4 py-2 mb-1">Author</div>
                                <div class="flex-1 text-grey-darker  px-4 py-2 mb-1">Published date</div>
                            </div>
                        </div>

                        <div class="text-grey-darker items-center border-b -mx-4 px-6 py-1" v-for="post in posts">
                            <div class="flex justify-between">
                                <div class="flex-1 text-grey-darker  px-4 py-2 mb-1">
                                    <router-link :to="{name: 'post-show', params: { slug: post.slug} }" class="no-underline" v-text="post.title"></router-link>
                                </div>
                                <div class="flex-1 text-grey-darker  px-4 py-2 mb-1">{{post.author.name}}</div>
                                <div class="flex-1 text-grey-darker  px-4 py-2 mb-1">{{post.created_at}}</div>
                            </div>
                        </div>

                        <div class="text-grey-darker items-center border-b -mx-4 px-6 py-1">
                            <div v-if="page > 1">
                                <a @click.prevent="prevPage" href="#" class="flex-1 px-4 py-2 mb-1 float-left">Previous Page</a>
                            </div>
                            <a @click.prevent="nextPage" href="#" class="flex-1 px-4 py-2 mb-1 float-right">Next Page</a>
                        </div>

                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <div class="bg-white border-t border-b sm:rounded sm:border shadow">
                        <div class="border-b">
                            <div class="flex justify-between px-6 -mb-px">
                                <h3 class="text-blue-dark py-4 font-normal text-lg">Recent Activity</h3>
                            </div>
                        </div>
                        <div>
                            <div class="text-center px-6 py-4">
                                <div class="py-8">
                                    <div class="mb-4">You don't have any activity yet</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                page: 1,
                posts: this.getPosts(1)
            }
        },
        methods: {
            getPosts(page) {
                console.log('posts for page '+ page)
                axios.get(`/api/post?page=${page}`)
                    .then(({data}) => {
                        this.posts = data.posts
                    })
            },
            nextPage() {
                this.page = this.page + 1
                this.posts = this.getPosts(this.page)
            },
            prevPage() {
                this.page = this.page - 1
                this.posts = this.getPosts(this.page)
            }
        }
    }
</script>

<style scoped>

</style>
