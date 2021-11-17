<template>
  <section id="restaurants-list" class="pt-5 pb-4">
    <div class="container flex-column">
      <h2>Users' Restaurants</h2>
      <p>
        Here you can find a selection of the best restaurants next to you. Just
        choose meal and enjoy your favourite food in the comfort of your
        favourite places.
      </p>
      <Loader v-if="isLoading" />
      <div class="form-group offset-9 col-3">
        <label for="categories">Select Category</label>
        <select class="form-control" id="categories" v-model="category">
          <option>All</option>
          <option v-for="(category, index) in getCategories" :key="index">
            {{ category }}
          </option>
        </select>
      </div>
      <Carousel :autoplayTimeout="3000" :autoplay="true" :per-page="3">
        <Slide class="col-4" v-for="user in filteredRestaurants" :key="user.id">
          <RestaurantCard :user="user" />
        </Slide>
      </Carousel>
    </div>
  </section>
</template>

<script>
import Loader from "../utilities/Loader.vue";
import RestaurantCard from "./RestaurantCard.vue";
import MenusList from "../menus/MenusList.vue";

import { Carousel, Slide } from "vue-carousel";

export default {
  name: "RestaurantsList",
  components: {
    RestaurantCard,
    Loader,
    MenusList,
    Carousel,
    Slide,
  },
  data() {
    return {
      baseUri: "http://localhost:8000",
      users: [],
      plates: [],
      category: "All",
      isLoading: false,
    };
  },
  computed: {
    getCategories() {
      const categories = [];
      this.users.forEach((user) => {
        user.types.forEach((type) => {
          if (!categories.includes(type.name)) {
            categories.push(type.name);
          }
        });
      });
      return categories.sort();
    },
    filteredRestaurants() {
      if (this.category === "All") {
        return this.users;
      } else {
        const filtered = this.users.filter((user) => {
          return user.types.some((type) => {
            return type.name === this.category;
          });
        });
        return filtered;
      }
    },
  },
  created() {
    this.isLoading = true;
    axios
      .get(`${this.baseUri}/api/users`)
      .then((res) => {
        this.users = res.data.users;
      })
      .catch((err) => {
        console.error(err);
      })
      .then(() => {
        setTimeout(() => {
          this.isLoading = false;
        }, 1500);
      });
  },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";

#restaurants-list {
  background: $ourLightIndigo;
  .carousel {
    i {
      color: $carrotOrange;
      cursor: pointer;
    }
  }
}

h2 {
  color: $ourIndigo;
}
</style>
