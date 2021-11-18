<template>
  <div
    class="card shadow my-5 p-4 border-0 d-flex flex-column"
    @click="getMenu(user.plates)"
  >
    <img v-if="user.image" :src="user.image" :alt="user.name" class="w-300" />
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
  </div>
</template>

<script>
export default {
  name: "RestaurantCard",
  props: ["user"],
  methods: {
    getMenu(plates) {
      this.$emit("plates", plates);
    },
  },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";
.card {
  background: $lightYellowJasmine;
  height: 450px;
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
