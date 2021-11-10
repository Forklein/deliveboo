<template>
  <div>
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
  data() {
    return {
      title: "Deliveboo",
    };
  },
};
</script>

<style>
section {
  min-height: 100vh;
}

a {
  text-decoration: none;
  color: currentColor;
}

ul {
  list-style-type: none;
}
</style>
