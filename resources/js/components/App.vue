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

<style lang="scss">
@import "../../sass/_variables.scss";
* {
  font-family: Arial, Helvetica, sans-serif;
}

p {
  font-size: 17px;
}

a, a:hover {
  text-decoration: none;
  color: currentColor;
}

h2 {
  color: $ourIndigo;
  font-size: 38px;
  font-weight: bolder;
  text-align: center !important;
}

button {
  background: $mediumTurquoise;
  font-size: 16px;
}
</style>
