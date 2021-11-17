<template>
  <section id="menus-list">
    <Loader v-if="isLoading" />
    <div v-else class="container">
      <div class="row">
        <div class="col-3" v-for="(plate, index) in plates" :key="index">
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
      plates: [],
    };
  },
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
    axios
      .get(`http://127.0.0.1:8000/api/users/${this.$route.params.id}`)
      .then((res) => {
        this.plates = res.data.user.plates;
      })
      .catch((err) => {
        console.log(err);
      })
      .then(() => {
        this.isLoading = false;
      });
  },
};
</script>

<style>
</style>