<template>
    <div>
        <article class="max-w-2xl mx-auto">
            <header class="p-8 text-center">
                <h1 class="tracking-tight text-5xl text-red">Create Post</h1>
            </header>

            <section class="flex max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg border border-red">
                <div class="w-full bg-white rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label for="title">Title <sup>*</sup></label>
                        <input v-model="post.title" placeholder="Please enter a title">
                    </div>
                    <label>Post Type <sup>*</sup></label>
                    <div class="mb-4 inline-block relative">
                        <select v-model="post.post_type">
                            <option value="post">News</option>
                            <option value="events">Event</option>
                            <option value="tutorials">Tutorial</option>
                            <option value="interviews">Interview</option>
                        </select>
                        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker border-l">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="body">Content <sup>*</sup></label>
                        <vue-editor v-model="post.body"></vue-editor>  
                    </div>

                    <div class="mb-4" v-if="isAdmin">
                        <label for="title">Tags <sup>optional</sup></label>
                        <p class="info">Please separate tags with a comma.</p>
                        <input class="" v-model="post.tags">
                    </div>

                    <button @click="savePost" :disabled='!isComplete'>Create Post</button>

                    <p class="info"><sup>*</sup> Please complete all mandatory fields.</p>

                </div>
            </section>
        </article>
    </div>
</template>

<script>

import { VueEditor} from 'vue2-editor'

export default {
  data() {
    return {
      post: {
        title: "",
        body: "",
        post_type: "post",
        tags: "",
      },
      isAdmin: window.App.is_admin
    };
  },

  components: {
    VueEditor
  },

  methods: {
    savePost() {
      axios.post("/api/post", { data: this.post }).then(({ data }) => {
          window.location.href= `/blog/${data.post.post_type}/${data.post.slug}`
      });
    }
  },
  computed: {
    isComplete() {
      return this.post.title && this.post.body;
    }
  }
};
</script>
