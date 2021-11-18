<template>
  <div class="container-cart text-center">
    <div @click="showOverview" class="rounded-circle bg-light p-3 fade-in shodow-lg" id="cart">
      <span v-if="carts" id="notify" class="badge badge-pill badge-danger">{{
        getQuantity
      }}</span>
      <i class="fas fa-shopping-cart fa-2x pr-1"></i>
    </div>
    <div
      :class="isVisibile ? 'fade-in' : 'fade-out'"
      class="overview bg-white overflow-auto shadow-lg"
    >
      <div class="container">
        <div  class="row">
          <div
            v-for="(cart, index) in carts"
            :key="index"
            class="col-12 d-flex py-2 mt-4"
          >
            <div class="col-3">
              <img style="width: 50%" :src="cart.image" :alt="cart.name" />
            </div>
            <div @click="removeItem(index)" class="col-1">
              <i class="fas fa-trash text-danger"></i>
            </div>
            <div class="col">{{ cart.name }}</div>
            <div class="col-1">{{ cart.quantity }}</div>
            <div v-if="carts" class="col-2">{{ cart.price.toFixed(2) }}€</div>
          </div>
          <div class="col-12 align-items-center justify-content-between d-flex py-4">
            <div v-if="carts" class="col"><span class="rounded-pill p-2 text-white bg-mediumTurquoise">Total {{ getTotal.toFixed(2) }}€</span></div>
            <div class="col">
              <span v-if="carts.length > 0" @click="saveStorage">
                <router-link class="btn bg-mediumTurquoise text-white rounded-pill" :to="{ name: 'Checkout' }"
                  >Checkout</router-link
                >
              </span>
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
      isVisibile: true,
    };
  },
  computed: {
    getTotal() {
      if (this.carts) {
        let total = 0;
        this.carts.forEach((el) => {
          total += el.price;
        });
        return total;
      }
    },
    getQuantity() {
      if (this.carts) {
        let totalQuantity = 0;
        this.carts.forEach((cart) => {
          totalQuantity += cart.quantity;
        });
        return totalQuantity;
      }
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
  bottom: 100px;
  right: 20px;
  z-index: 10;
  width: 400px;
  border-radius: 20px;
}
.fade-in {
	opacity: 1;
	animation-name: fadeInOpacity;
	animation-iteration-count: 1;
	animation-timing-function: ease-in;
	animation-duration: 0.5s;
}

@keyframes fadeInOpacity {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}
.fade-out {
	opacity: 0;
	animation-name: fadeOutOpacity;
	animation-iteration-count: 1;
	animation-timing-function: ease-out;
	animation-duration: 0.5s;
}

@keyframes fadeOutOpacity {
	0% {
		opacity: 1;
	}
	100% {
		opacity: 0;
	}
}
</style>