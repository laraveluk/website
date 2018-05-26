<template xmlns="http://www.w3.org/1999/html">
        <div class="flex flex-col max-w-2xl mx-auto md:flex-row md:flex-wrap">
            <div class="flex flex-row items-center w-full border-b border-grey-light md:mx-4">
                <div class="flex mx-auto font-bold text-lg md:text-3xl md:flex-grow md:mx-0">
                    <a href="/blog"
                       :class="{'text-blue': type === ''}"
                       class="no-underline text-grey-light pb-4 border-b -mb-px mr-8 hover:text-blue-navy hover:border-blue-navy">
                        All
                    </a>
                    <a href="/blog/post"
                       :class="{'text-blue': type === 'post'}"
                       class="no-underline text-grey-light pb-4 border-b border-grey-light -mb-px mr-8 hover:text-blue-navy hover:border-blue-navy pb-4">
                        Posts
                    </a>
                    <a href="/blog/interviews"
                       :class="{'text-blue': type === 'interviews'}"
                       class="no-underline text-grey-light pb-4 border-b border-grey-light -mb-px mr-8 hover:text-blue-navy hover:border-blue-navy">
                        Interviews
                    </a>
                    <a href="/blog/events"
                       :class="{'text-blue': type === 'events'}"
                       class="no-underline text-grey-light pb-4 border-b border-grey-light -mb-px hover:text-blue-navy hover:border-blue-navy">
                        Events
                    </a>
                </div>
            </div>

            <PostItem
                v-for="post in posts"
                :post="post"
                :key="post.id" />
        </div>
</template>

<script>
    import axios from 'axios'
    import PostItem from './PostItem'

    export default {
      props: ['type'],

      components: {
        PostItem
      },

      created () {
          this.fetchPosts()
      },

      data () {
        return {
          posts: []
        }
      },
      methods: {
           fetchPosts () {
             let url = '/api/blog/posts'

             if (this.type !=='') {
               url = `/api/blog/posts?type=${this.type}`
             }

             axios.get(url)
               .then(response => this.posts = response.data.posts)
           }
       }
    }
</script>

<style scoped>

</style>