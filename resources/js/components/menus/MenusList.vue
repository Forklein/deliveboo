<template>
  <section id="menus-list">
    <div class="container">
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

export default {
  name: "MenusList",
  components: {
    MenuCard,
    Cart,
  },
  data() {
    return {
      cart: [],
    };
  },
  props: ["plates"],
  methods: {
    getCart(data) {
      let newData = Object.assign({}, ...data);
      this.cart.push(newData);
    },
  },
};
</script>

<style>
</style>