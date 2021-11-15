<template>
  <div class="container-cart text-center">
    <div @click="showOverview" class="rounded-circle bg-light p-3" id="cart">
      <span id="notify" class="badge badge-pill badge-danger">{{
        carts.length
      }}</span>
      <i class="fas fa-shopping-cart fa-2x pr-1"></i>
    </div>
    <div
      :class="isVisibile ? 'd-block' : 'd-none'"
      class="overview bg-white overflow-auto shadow-lg"
    >
      <div class="container">
        <div class="row">
          <div
            v-for="(cart, index) in carts"
            :key="index"
            class="col-12 d-flex my-2"
          >
            <div class="col-3">
              <img style="width: 50%" :src="cart.image" :alt="cart.name" />
            </div>
            <div @click="removeItem(index)" class="col-1">
              <i class="fas fa-trash text-danger"></i>
            </div>
            <div class="col">{{ cart.name }}</div>
            <div class="col-1">{{ cart.quantity }}</div>
            <div class="col-2">{{ cart.price }}</div>
          </div>
          <div class="col-12 align-items-center justify-content-between d-flex">
            <div class="col">Total {{ getTotal }}€</div>
            <div class="col">
              <button v-if="carts.length > 0" @click="saveStorage">
                <router-link to="/checkout">Checkout</router-link>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Cart",
  props: ["carts"],
  data() {
    return {
      isVisibile: false,
    };
  },
  computed: {
    getTotal() {
      let total = 0;
      this.carts.forEach((el) => {
        total += el.price;
      });
      return total;
    },
  },
  methods: {
    showOverview() {
      this.isVisibile = !this.isVisibile;
    },
    saveStorage() {
      localStorage.setItem("storedData", JSON.stringify(this.carts));
    },
    removeItem(i) {
      this.carts.splice(i, 1);
    },
  },
  created() {
    this.carts = JSON.parse(localStorage.getItem("storedData"));
  },
};
</script>

<style lang="scss" scoped>
#notify {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 10;
}

#cart {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 10;
  cursor: pointer;
}
.overview {
  position: fixed;
  bottom: 60px;
  right: 60px;
  z-index: 10;
  width: 400px;
  border-radius: 20px;
}
</style>