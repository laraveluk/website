<template xmlns="http://www.w3.org/1999/html">
        <div class="flex flex-col w-full md:flex-row md:flex-wrap">
            <div class="flex flex-row items-center w-full border-b border-grey-light md:mx-4">
                <div class="flex mx-auto font-bold text-lg md:text-3xl md:flex-grow md:mx-0">
                    <a
                       :class="{'text-blue-navy': filter === '', 'border-blue-navy': filter === ''}"
                       class="cursor-pointer no-underline text-grey-light pb-4 border-b -mb-px mr-8 hover:text-blue-navy hover:border-blue-navy"
                       @click="filterPosts('')">
                        All
                    </a>
                    <a
                       :class="{'text-blue-navy': filter === 'post', 'border-blue-navy': filter === 'post'}"
                       class="cursor-pointer no-underline text-grey-light pb-4 border-b border-grey-light -mb-px mr-8 hover:text-blue-navy hover:border-blue-navy pb-4"
                       @click="filterPosts('post')">
                        Posts
                    </a>
                    <a
                       :class="{'text-blue-navy': filter === 'interviews', 'border-blue-navy': filter === 'interviews'}"
                       class="cursor-pointer no-underline text-grey-light pb-4 border-b border-grey-light -mb-px mr-8 hover:text-blue-navy hover:border-blue-navy"
                       @click="filterPosts('interviews')">
                        Interviews
                    </a>
                    <a
                       :class="{'text-blue-navy': filter === 'events', 'border-blue-navy': filter === 'events'}"
                       class="cursor-pointer no-underline text-grey-light pb-4 border-b border-grey-light -mb-px hover:text-blue-navy hover:border-blue-navy"
                       @click="filterPosts('events')">
                        Events
                    </a>
                </div>
            </div>
            
            <PostItem
                v-for="post in posts"
                v-if="post.post_type == filter || filter == ''"
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
          posts: [],
          filter: '',
        }
      },
      methods: {
           fetchPosts () {
             let url = '/api/blog/posts'

             axios.get(url)
               .then(response => this.posts = response.data.posts)
           },

           filterPosts(filter) {
            this.filter = filter;
           }
       }
    }
</script>

<style scoped>

</style>