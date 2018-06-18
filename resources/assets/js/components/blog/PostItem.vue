<template>
    <div class="flex flex-col w-full md:w-1/3 mt-8">
        <div class="flex flex-col h-full border border-grey-light bg-white leading-normal rounded shadow mx-4">
            <img class="w-full" src="/images/post-default.jpg" alt="">
            <div class="flex flex-grow flex-col p-6 ">
              <div class="flex justify-between mb-2">
                 <p class="block text-xs uppercase text-grey-dark">
                  {{ postType }}
                </p> 
                <p v-if="! post.approved"
                  class="block text-xs uppercase text-red">
                  Unpublished
                </p>
              </div>
            
              <div class="flex flex-col flex-grow mb-4">
                <a :href= "postLink" class="no-underline text-blue-navy font-bold leading-none text-lg md:text-xl mb-2">
                    {{ post.title }}
                </a>
                <p class="text-grey-darkest font-light leading-normal md:text-lg">
                    {{ post.excerpt}}
                </p>
              </div>
            </div>
            <div class="flex">
                <div class="text-sm  p-6">
                    <p class="text-grey-darkest leading-none font-light">
                        {{ post.author.name }}
                    </p>
                    <p class="text-grey-dark font-light">{{ post.created_at | formatDate }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment'
    export default {
      props: ['post'],

      computed: {
        postType () {
          let ptype = '';

          switch (this.post.post_type) {
            case 'post':
              ptype = 'Post'
              break;
            case 'tutorials':
              ptype = 'Tutorial'
              break;
            case 'events':
              ptype = 'Event'
              break;
            case 'interviews':
              ptype = 'Interview'
              break;
            default:
              ptype = 'News'
          }

          return ptype
        },
        postLink () {
          return `/blog/${this.post.post_type}/${this.post.slug}`
        }
      },

      filters: {
        formatDate(value) {
          return moment(value).format('Do MMMM YYYY')
        }
      }
    }
</script>

<style scoped>

</style>