<template>
  <div id="root">
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
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

#root {
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  font-family: Arial, Helvetica, sans-serif;
}

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
