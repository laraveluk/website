<template>
    <div>
      <div class="bg-blue-navy ">
         <navbar></navbar>
      </div>
      
        <router-view></router-view>
        <site-footer></site-footer>
    </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
