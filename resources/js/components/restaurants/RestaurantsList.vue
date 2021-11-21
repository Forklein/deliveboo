<template>
  <section id="restaurants-list" class="text-center pt-5 pb-4">
    <div class="container flex-column">
      <h2>Restaurants</h2>
      <p>
        Here you can find a selection of the best restaurants next to you. Just
        choose meal and enjoy your favourite food in the comfort of your
        favourite places.
      </p>
      <div
        class="
          form-group
          col-12
          d-flex
          flex-column flex-md-row
          justify-content-md-center
          align-items-center
        "
      >
        <div
          v-for="(category, index) in categories"
          :key="index"
          class="form-check"
        >
          <input
            class="form-check-input"
            type="checkbox"
            v-model="checkbox"
            :value="category"
          />
          <label class="form-check-label text-dark pr-2" for="defaultCheck1">
            <b>{{ category }}</b>
          </label>
        </div>
      </div>
      <Carousel
        :loop="true"
        :autoplayTimeout="3000"
        :autoplay="true"
        :per-page="3"
      >
        <Slide
          class="col-4"
          v-for="(user, index) in getFilteredUsers"
          :key="index"
        >
          <RestaurantCard :user="user" />
        </Slide>
      </Carousel>
    </div>
  </section>
</template>

<script>
import RestaurantCard from "./RestaurantCard.vue";
import MenusList from "../menus/MenusList.vue";

import { Carousel, Slide } from "vue-carousel";

export default {
  name: "RestaurantsList",
  components: {
    RestaurantCard,
    MenusList,
    Carousel,
    Slide,
  },
  data() {
    return {
      baseUri: "http://localhost:8000",
      categories: [
        "American",
        "Chinese",
        "Fusion",
        "Indian",
        "Italian",
        "Japanese",
        "Mexican",
      ],
      users: [],
      plates: [],
      checkbox: [],
    };
  },
  computed: {
    getFilteredUsers() {
      const filter = [];
      if (this.checkbox.length > 0) {
        this.users.forEach((user) => {
          user.types.forEach((type) => {
            if (this.checkbox.includes(type.name) && !filter.includes(user)) {
              filter.push(user);
            }
          });
        });
        return filter;
      } else return this.users;
    },
  },
  created() {
    axios
      .get(`${this.baseUri}/api/users`)
      .then((res) => {
        this.users = res.data.users;
      })
      .catch((err) => {
        console.error(err);
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
