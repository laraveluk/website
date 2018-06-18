<template>
  <div>
      <a :href="url"
        class="bg-red-light hover:bg-red text-white font-bold py-2 px-4 mx-1 float-right no-underline rounded"
        @click.prevent="showModal"
        >
        Approve
    </a>
    <approve-modal 
      :show="show"
      :post_id="post_id"
      @close="closeModal"
      >
    </approve-modal>
  </div>
   
</template>

<script>
import ApproveModal from '../ApproveModal'

export default {
    props: ['post_id'],

    components: {
        ApproveModal
    },
    data () {
      return {
        url: "",
        show: false
      }
    },
    methods: {
      showModal () {
        this.show = true
      },
      closeModal () {
        this.show = false
      }
    }
  }
</script>

<style scoped>

</style>