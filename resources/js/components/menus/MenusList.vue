<template>
  <section id="menus-list" class="pt-5 pb-4">
    <div class="d-flex justify-content-center">
      <span class="p-3 h1 my-text-shadow text-center"
        >Menu "{{ restaurantName }}" - Plates: {{ totalPlates }}</span
      >
    </div>
    <Loader v-if="isLoading" />
    <div v-else class="container p-3">
      <div class="row">
        <div
          class="col-12 col-md-6 col-lg-4 mb-5"
          v-for="(plate, index) in plates"
          :key="index"
        >
          <MenuCard :plate="plate" @currentCart="getCart" />
        </div>
      </div>
      <Cart v-if="cart" :carts="cart" />
    </div>
    <Modal
      :class="modal ? 'd-block' : ''"
      :warning="'It is not possible to add products from other restaurants, Please empty your cart first'"
      @close="modal = false"
    />
  </section>
</template>

<script>
import MenuCard from "./MenuCard.vue";
import Cart from "../utilities/Cart.vue";
import Loader from "../utilities/Loader.vue";
import Modal from "../utilities/Modal.vue";

export default {
  name: "MenusList",
  components: {
    MenuCard,
    Cart,
    Loader,
    Modal,
  },
  data() {
    return {
      isLoading: false,
      modal: false,
      cart: [],
      plates: [],
      restaurantName: "",
      totalPlates: "",
    };
  },
  methods: {
    getCart(data) {
      if (this.cart.length) {
        let notFound = true;
        if (this.cart[0].restaurant !== data.restaurant) {
          this.modal = true;
          notFound = false;
        }
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
        this.restaurantName = res.data.restaurant_name;
        this.totalPlates = res.data.total;
      })
      .catch((err) => {
        console.log(err);
      })
      .then(() => {
        this.isLoading = false;
      });
    if (localStorage.getItem("storedData")) {
      this.cart = JSON.parse(localStorage.getItem("storedData"));
    } else this.cart = [];
  },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";

/* **************************** */
#menus-list {
  background: $ourLightIndigo;
  .my-text-shadow {
    text-shadow: 3px 3px 5px rgba(150, 150, 150, 1);
    color: $oxfordBlue;
  }
}

h2 {
  color: $ourIndigo;
}
/* **************************** */
</style>