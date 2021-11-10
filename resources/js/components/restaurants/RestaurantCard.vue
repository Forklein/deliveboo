<template>
  <div class="custom-card">
    <img
      src="img/restaurant-image.png"
      class="restaurant-image"
      alt="restaurant-image"
      @click="getMenu(user.id)"
    />
    <div>
      <h4 class="card-title">
        {{ user.restaurant_name }}
      </h4>
    </div>
    <hr />
    <img src="img/address-icon.png" class="icon" alt="address-image" />
    <address style="display: inline">
      {{ user.address }} - {{ user.city }} - {{ user.zip }}
    </address>
    <p>
      <img src="img/phone-icon.png" class="icon" alt="phone-image" />{{
        user.phone
      }}
    </p>
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
.custom-card {
  margin: 35px 10px;
  padding: 30px 20px;
  width: calc(100% / 3.5);
  line-height: 25px;
  font-size: 15px;
  background: #fbdb80;
  word-wrap: break-word;
  display: flex;
  flex-direction: column;
  h4 {
    text-align: center !important;
  }
  hr {
    margin: 15px 0;
    border-color: #007e8a;
    background: #007e8a;
  }
}

.card-body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.icon {
  margin-right: 5px;
  width: 20px;
  height: auto;
  vertical-align: baseline;
}

.avatar-icon {
  margin: 0 5px 10px 0;
  width: 45px;
  vertical-align: middle;
}

.restaurant-image {
  margin: 0 auto;
  padding: 0 0 0 5px;
  width: 80%;
}
</style>