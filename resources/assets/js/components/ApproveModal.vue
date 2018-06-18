<template>
    <modal :show="show" @close="cancel" v-if="show">
      <h1 class="text-center text-2xl font-bold mb-4">
        Approve Post?
      </h1>
      <div class="text-center">
        <button @click="cancel" type="button" class="btn btn-default mr-4 p-2">
          Cancel
        </button>
        <button @click="approve" type="button" class="btn btn-red p-2">
          Approve
        </button>
      </div>
    </modal>
</template>

<script>
    import Modal from './Modal'

    export default {
        components: {
            Modal
        },
        props: ["show", "post_id"],

        data () {
            return {
                status: ''
            }
        },
        methods: {
          cancel() {
            this.$emit("close")
          },
          approve() {
            let url = '/api/blog/approve/post'
            axios.post(url, {'post_id': this.post_id})
               .then(response => {
                 this.status = response.data.status
               })
            this.$emit("close")
            window.location.href = '/blog'
          }
        }
    }
</script>

<style>
  
</style>