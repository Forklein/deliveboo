<template>
  <section id="menus-list">
    <Loader v-if="isLoading" />
    <div v-else class="container">
      <div class="row">
        <div class="col-3" v-for="(plate, index) in plates" :key="index">
          <MenuCard :plate="plate" @currentCart="getCart" />
        </div>
      </div>
      <Cart :carts="cart" />
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
      isLoading: false,
      cart: [],
    };
  },
  props: ["plates"],
  methods: {
    getCart(data) {
      if (this.cart.length > 0) {
        this.cart.forEach((element) => {
          if (element.plate_id == data.plate_id) {
            this.cart.map((el) => {
              if (el.plate_id == data.plate_id) {
                el.quantity += data.quantity;
                el.price += data.price;
              }
            });
            return el;
          }
        });
        this.cart.push(data);
      } else if (this.cart.length == 0) this.cart.push(data);
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