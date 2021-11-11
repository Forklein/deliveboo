<template>
  <div class="app">
    <Header />
    <Main />
    <Footer />
  </div>
</template>

<script>
import Header from "./Header.vue";
import Main from "./Main.vue";
import Footer from "./Footer.vue";

export default {
  name: "App",
  components: {
    Header,
    Main,
    Footer,
  },
};
</script>

<style>
a {
  text-decoration: none;
  color: currentColor;
}
</style>
