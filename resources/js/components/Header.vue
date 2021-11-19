<template>
  <header>
    <div class="opacity">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <h1 class="font-weight-bold">The Food you love at Home</h1>
            <p class="p-2 my-3">
              Deliveroo's aim is to transform the way customers eat. By
              constantly innovating and expanding, we offer ours customers the
              best choice and convenience and a large selection of restaurants:
              whether you want sushi for dinner, a salad for lunch, or a brioche
              for breakfast, we'll take care of it! In Deliveroo we know that
              every customer has different tastes and our job is to make sure
              that have what they want, when they want and where they want it.
            </p>
            <a href="/#about-us" class="p-3 rounded-pill text-white"
              >Learn More</a
            >
          </div>
        </div>
        <div class="row">
          <div class="search col-6 mx-auto">
            <div class="input-group">
              <input
                type="search"
                class="form-control border-custom"
                placeholder="Search"
                data-toggle="dropdown"
                v-model="search"
                @keyup="searchRestaurant"
              />
              <button
                type="button"
                class="btn rounded-pill btn-outline-primary text-white"
                @click="searchRestaurant"
                id="dropdownMenuButton"
              >
                Search
              </button>
              <div class="dropdown-menu w-100 shadow">
                <div
                  v-for="restaurant in restaurants"
                  :key="restaurant.id"
                  class="
                    container
                    search-bar
                    d-flex
                    align-items-center
                    justify-content-between
                  "
                >
                  <a :href="'http://127.0.0.1:8000/user/' + restaurant.id">
                    <strong>{{ restaurant.restaurant_name }}</strong>
                  </a>
                  <img
                    src="img/restaurant-placeholder.png"
                    alt="bg"
                    style="width: 15%"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      search: "",
      restaurants: [],
    };
  },
  methods: {
    async searchRestaurant() {
      let result = await axios.get(
        `http://localhost:8000/api/users?search=${this.search}`
      );
      this.restaurants = result.data.restaurants;
    },
  },
};
</script>

<style lang="scss" scoped>
@import "../../sass/_variables.scss";
header {
  height: 900px;
  padding-top: 175px;
  background-image: url("~/img/jumbotron.jpg");
  background-position: center;
  background-attachment: fixed;
  background-size: 100% 100%;
  .search-bar:hover {
    background-color: $mediumTurquoise;
    color: white;
  }
  .col-8 {
    a {
      background-color: $mediumTurquoise;
    }
  }
  h1 {
    color: $mediumTurquoise;
    font-size: 44px;
  }
  p {
    color: $oxfordBlue;
    font-size: 20px;
    cursor: pointer;
  }
  .search {
    margin-top: 100px;
  }
}
</style>
