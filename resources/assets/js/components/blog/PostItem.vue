<template>
    <div class="flex flex-col w-full md:w-1/2 mt-8">
        <div class="flex flex-col h-full border border-grey-light bg-white p-6 leading-normal rounded shadow mx-4">
            <p class="text-xs uppercase text-grey-dark flex items-center">
                {{ postType }}
            </p> <div class="flex flex-col flex-grow mb-4">
            <a :href= "postLink" class="no-underline text-blue-navy font-bold text-lg md:text-xl">
                {{ post.title }}
            </a> <p class="text-grey-darkest font-light leading-normal md:text-lg">
                {{ post.excerpt}}
            </p>
        </div>
            <div class="flex items-center">
                <div class="text-sm">
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