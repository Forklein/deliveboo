<template>
  <section id="menus-list">
    <Loader v-if="isLoading" />
    <div v-else class="container">
      <div class="row">
        <div class="col-3" v-for="(plate, index) in plates" :key="index">
          <MenuCard :plate="plate" @currentCart="getCart" />
        </div>
      </div>
      <Cart :cart="cart" />
    </div>
  </section>
</template>

<script>
import MenuCard from "./MenuCard.vue";
import Cart from "../utilities/Cart.vue";
import Loader from "../utilities/Loader.vue";

export default {
  name: "MenusList",
  components: {
    MenuCard,
    Cart,
    Loader,
  },
  data() {
    return {
      cart: [],
      isLoading: false,
    };
  },
  props: ["plates"],
  methods: {
    getCart(data) {
      const newData = Object.assign({}, ...data);
      this.cart.push(newData);
    },
  },
  created() {
    this.isLoading = true;
    setTimeout(() => {
      this.isLoading = false;
    }, 1000);
  },
};
</script>

<style>
</style>