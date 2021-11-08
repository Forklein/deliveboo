<template>
  <main>
    <section id="restaurants-list">
      <h2 class="mt-4 mb-3">Users' Restaurants</h2>
      <Loader v-if="isLoading" />
      <div v-else>
        <RestaurantCard v-for="user in users" :key="user.id" :user="user" />
      </div>
    </section>
  </main>
</template>

<script>
import Loader from "./Loader.vue";
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
          console.log(res.data.users);
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
