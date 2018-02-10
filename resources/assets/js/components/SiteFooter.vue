<template>
   <div>
    <footer class="flex justify-center items-center mt-6 py-2 px-4 w-full text-grey-dark text-sm">
        <div>&copy; {{currentYear}} Laravel UK</div>
    </footer>
   </div>
</template>

<script>
export default {
  data() {
    return {
      currentYear: new Date().getFullYear()
    };
  },
  mounted() {}
};
</script>
