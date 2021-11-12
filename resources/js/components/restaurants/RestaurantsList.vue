<template>
  <section id="restaurants-list" class="pt-5">
    <div class="container flex-column">
      <h2 class="mb-2">Users' Restaurants</h2>
      <p class="text-center">
        Here you can find a selection of the best restaurants next to you. Just
        choose meal and enjoy your favourite food in the comfort of your
        favourite places.
      </p>
      <Loader v-if="isLoading" />
      <div v-else class="container">
        <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-4">
          <RestaurantCard v-for="user in users" :key="user.id" :user="user" />
        </div>
      </div>
      </div>
    </div>
  </section>
</template>

<script>
import Loader from "../utilities/Loader.vue";
import RestaurantCard from "./RestaurantCard.vue";

export default {
  name: "RestaurantsList",
  components: {
    RestaurantCard,
    Loader,
  },
  data() {
    return {
      baseUri: "http://localhost:8000",
      users: [],
      isLoading: false,
    };
  },
  methods: {
    getUsers() {
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
          this.isLoading = false;
        });
    },
  },
  created() {
    this.getUsers();
  },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";

h2 {
  color: $oxfordBlue;
}
</style>
