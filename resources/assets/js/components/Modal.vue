<template>
    <div class="modal-backdrop">
        <div class="modal">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
      props:['show'],

      created () {
       const listener = document.addEventListener("keydown", e => {
            if (this.show && e.keyCode === 27) {
                this.cancel()
            }
        })

        this.$once("hook:beforeDestroy", () => {
          document.removeEventListener("keydown", listener)
        })
      },
       methods: {
          cancel() {
          this.$emit("close")
        }
      }
    }
</script>

<style scoped>

</style>