<template>
  <div class="card shadow border-0 m-0 p-4">
    <img :src="plate.image" class="img-fluid my-2" :alt="plate.name" />
    <div class="card-body mx-0 px-0">
      <h5 class="card-title">{{ plate.name }}</h5>
      <p class="card-text">{{ plate.description }}</p>
      <p class="card-text">{{ plate.price }}€</p>
      <div class="cart-footer d-flex justify-content-around">
        <button @click="removeQuantity">-</button>
        <button @click="addToCart(plate)" class="btn btn-primary position-relative">
          Add to cart <span class="position-absolute cart-item pt-2 badge badge-pill bg-mediumTurquoise">{{ quantity }}</span>
        </button>
        <button @click="addQuantity">+</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Menucard",
  data() {
    return {
      currentCart: {},
      quantity: 1,
    };
  },
  props: ["plate"],
  methods: {
    addToCart(plate) {
      if (this.quantity > 0) {
        this.currentCart = {
          restaurant: plate.user_id,
          image: plate.image,
          name: plate.name,
          plate_id: plate.id,
          price: plate.price * this.quantity,
          quantity: this.quantity,
        };
        this.$emit("currentCart", this.currentCart);
        this.quantity = 1;
      }
    },
    removeQuantity() {
      if (this.quantity > 1) this.quantity--;
    },
    addQuantity() {
      if (this.quantity < 10) this.quantity++;
    },
  },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";
/* **************************** */
.card {
  background: $lightYellowJasmine;
  border-radius: 20px;
  height: 650px;
  h4 {
    color: $carrotOrange;
    font-weight: bolder;
    text-align: center !important;
  }
  .icon {
    font-size: 20px;
    color: $carrotOrange;
    vertical-align: baseline;
  }
  p,
  address {
    font-size: 14px;
    color: rgb(59, 59, 59);
  }
}
.cart-item {
      position:absolute;
      height:24px;
      width:24px;
      top:-10px;
      right:-10px;
}
/* **************************** */

</style>