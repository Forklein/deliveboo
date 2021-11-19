<template>
  <div class="card shadow my-5 p-4 border-0 d-flex flex-column">
    <div
      v-if="user.image"
      class="menu-image"
      :style="getBackground(user.image)"
    ></div>
    <img
      v-else
      src="img/restaurant-placeholder.png"
      class="restaurant-image mb-4"
      alt="restaurant-image"
    />
    <h4 class="card-title mb-3">
      {{ user.restaurant_name }}
    </h4>
    <address class="mb-1 text-break" style="display: inline">
      <i class="icon mr-2 fas fa-map-marker-alt"></i>
      {{ user.address }} - {{ user.city }} - {{ user.zip }}
    </address>
    <p class="m-0 pt-1 text-break">
      <i class="icon mr-2 fas fa-phone"></i>{{ user.phone }}
    </p>
    <router-link
      class="btn btn-primary"
      :to="{ name: 'MenusList', params: { id: user.id } }"
      >Show Menu</router-link
    >
  </div>
</template>

<script>
export default {
  name: "RestaurantCard",
  props: ["user"],
  methods: {
    getBackground(image) {
      return `background-image: url('${image}');`;
    },
  },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";
.card {
  background: $lightYellowJasmine;
  height: 450px;
  .menu-image {
    height: 300px;
    background-repeat: no-repeat;
    background-size: 100% 100%;
  }
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
</style>
