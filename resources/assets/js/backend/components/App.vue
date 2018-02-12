<template>
    <div>
        <navbar></navbar>
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
