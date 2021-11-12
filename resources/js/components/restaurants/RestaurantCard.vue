<template>
  <div class="card my-5 p-4 border-none d-flex flex-column">
    <img
      src="img/restaurant-image.png"
      class="my-0 mx-auto w-75"
      alt="restaurant-image"
      @click="getMenu(user.id)"
    />
    <h4 class="card-title">
      {{ user.restaurant_name }}
    </h4>
    <hr class="mb-3" />
    <address style="display: inline">
      <i class="icon fas fa-map-marker-alt"></i>
      {{ user.address }} - {{ user.city }} - {{ user.zip }}
    </address>
    <p><i class="icon mx-2 fas fa-phone"></i>{{ user.phone }}</p>
    <p>Vat: {{ user.vat }}</p>
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
  font-size: 15px;
  border-radius: 20px;
  h4 {
    text-align: center !important;
  }
  hr {
    border: 1px solid $oxfordBlue;
    background: $oxfordBlue;
  }
  .icon {
    font-size: 20px;
    color: $oxfordBlue;
    vertical-align: baseline;
  }
}
</style>