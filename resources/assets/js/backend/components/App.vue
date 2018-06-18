<template>
    <div>
        <navbar></navbar>
        <!--<div class="notifications"></div>-->

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
