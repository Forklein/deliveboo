<template>
  <div class="card my-5 p-4 border-0 d-flex flex-column">
    <img v-if="user.image" :src="user.image" :alt="user.name" class="w-300" />
    <img
      v-else
      src="img/restaurant-image.png"
      class="restaurant-image"
      alt="restaurant-image"
    />
    <h4 class="card-title mb-4">
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
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";
.card {
  background: $lightYellowJasmine;
  border-radius: 20px;
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
