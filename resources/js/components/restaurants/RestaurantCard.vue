<template>
  <div class="card my-5 p-4 border-0 d-flex flex-column">
    <img
      src="img/restaurant-image.png"
      class="my-0 mx-auto w-75"
      alt="restaurant-image"
      @click="getMenu(user.id)"
    />
    <h4 class="card-title mb-4">
      {{ user.restaurant_name }}
    </h4>
    <address class="mb-1 text-break" style="display: inline">
      <i class="icon mr-2 fas fa-map-marker-alt"></i>
      {{ user.address }} - {{ user.city }} - {{ user.zip }}
    </address>
    <p class="m-0 pt-1 text-break"><i class="icon mr-2 fas fa-phone"></i>{{ user.phone }}</p>
  </div>
</template>

<script>
export default {
  name: "RestaurantCard",
  data() {
    return {
      baseUri: "http://localhost:8000",
    };
  },
  props: ["user"],
  methods: {
    getMenu(id) {
      axios
        .get(`${this.baseUri}/api/users/${id}`)
        .then((res) => {
          console.log(res.data.user.plates);
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";
.card {
  width: 100%;
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
  p, address {
    font-size: 14px;
    color: rgb(59, 59, 59);
  }
}
</style>