<template>
  <div class="card">
    <img :src="plate.image" class="card-img-top" :alt="plate.name" />
    <div class="card-body">
      <h5 class="card-title">{{ plate.name }}</h5>
      <p class="card-text">{{ plate.description }}</p>
      <p class="card-text">{{ plate.price }}€</p>
      <div class="cart-footer">
        <button @click="removeQuantity">-</button>
        <span>{{ quantity }}</span>
        <button @click="addQuantity">+</button>
        <button @click="addToCart(plate)" class="btn btn-primary">
          Add to cart
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MenuCard",
  data() {
    return {
      currentCart: [],
      quantity: 0,
    };
  },
  props: ["plate"],
  methods: {
    addToCart(plate) {
      if (this.quantity > 0) {
        this.currentCart.push({
          image: plate.image,
          name: plate.name,
          price: plate.price * this.quantity,
          quantity: this.quantity,
        });
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

<style>
</style>