<template>
  <div class="container">
    <Header />
    <Main />
    <Footer />
  </div>
</template>

<script>
import RestaurantsList from "./RestaurantsList.vue";
export default {
  name: "App",
  components: {
    RestaurantsList,
  },
  data() {
    return {
      title: "Deliveboo",
    };
  },
};
</script>
