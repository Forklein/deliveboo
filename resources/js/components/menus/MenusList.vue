<template>
  <section id="menus-list" class="pt-5 pb-4">
    <Loader v-if="isLoading" />
    <div v-else class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 mb-5" v-for="(plate, index) in plates" :key="index">
          <MenuCard :plate="plate" @currentCart="getCart" />
        </div>
      </div>
      <Cart v-if="cart" :carts="cart" />
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
      if (this.cart.length) {
        let notFound = true;
        this.cart.forEach((i, index) => {
          if (i.plate_id === data.plate_id) {
            this.cart[index].quantity += data.quantity;
            this.cart[index].price += data.price;
            notFound = false;
          }
        });
        if (notFound) {
          this.cart.push(data);
        }
      } else {
        this.cart.push(data);
      }
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

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";
/* **************************** */
#menus-list {
  background: $ourLightIndigo;
}

h2 {
  color: $ourIndigo;
}
/* **************************** */

</style>