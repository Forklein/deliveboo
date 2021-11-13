<template>
  <div>
    <Header />
    <Main />
    <Footer />
  </div>
</template>

<script>
import Main from "../Main.vue";
import Header from "../Header.vue";
import Footer from "../Footer.vue";
export default {
  name: "home",
  components: {
    Header,
    Main,
    Footer,
  },
};
</script>

<style lang="scss" scoped>
</style>