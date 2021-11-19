<template>
  <div class="card shadow border-0 p-4 bg-lightjasmine">
    <div class="card-image" :style="getBackground(plate.image)"></div>
    <div class="card-body mx-0 px-0">
      <h5 class="card-title">{{ plate.name }}</h5>
      <p class="card-text">{{ plate.description }}</p>
      <p class="card-text text-center my-4">
        <b>{{ plate.price }} €</b>
      </p>
      <div class="cart-footer d-flex justify-content-around">
        <button class="rounded-pill text-white h1" @click="removeQuantity">
          <i class="fas fa-minus"></i>
        </button>
        <button
          @click="addToCart(plate)"
          class="btn text-white rounded-pill position-relative"
        >
          Add to cart
          <span
            class="
              position-absolute
              cart-item
              pt-2
              badge badge-pill
              bg-danger
              border border-white
            "
            >{{ quantity }}</span
          >
        </button>
        <button class="rounded-pill text-white h1" @click="addQuantity">
          <i class="fas fa-plus"></i>
        </button>
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
    getBackground(image) {
      return `background-image: url('${image}');`;
    },
  },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";
/* **************************** */
.card {
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
  position: absolute;
  height: 24px;
  width: 24px;
  top: -10px;
  right: -10px;
}

.card-image {
  height: 300px;
  background-repeat: no-repeat;
  background-size: cover;
}
/* **************************** */
</style>