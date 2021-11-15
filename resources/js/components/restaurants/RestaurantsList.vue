<template>
  <div class="restaurants mx-auto">
    <div class="container">
      <h2 v-if="!hideMenuList">Menu</h2>
      <h2 v-if="hideMenuList">Users' Restaurants</h2>
      <p v-if="hideMenuList">
        Here you can find a selection of the best restaurants next to you. Just
        choose meal and enjoy your favourite food in the comfort of your
        favourite places.
      </p>
      <Loader v-if="isLoading" />
      <div v-if="hideMenuList" class="row">
        <div v-for="user in users" :key="user.id" class="col-4">
          <RestaurantCard :user="user" @plates="getPlates" />
        </div>
      </div>
      <MenusList v-if="!hideMenuList" :plates="plates" />
      <button v-if="!hideMenuList" @click="hideMenuList = true">Return</button>
    </div>
  </div>
</template>

<script>
import Loader from "../utilities/Loader.vue";
import RestaurantCard from "./RestaurantCard.vue";
import MenusList from "../menus/MenusList.vue";

export default {
  name: "RestaurantsList",
  components: {
    RestaurantCard,
    Loader,
    MenusList,
  },
  data() {
    return {
      baseUri: "http://localhost:8000",
      users: [],
      plates: [],
      isLoading: false,
      hideMenuList: true,
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
          setTimeout(() => {
            this.isLoading = false;
          }, 1500);
        });
    },
    getPlates(plates) {
      this.plates = plates;
      this.hideMenuList = false;
    },
  },
  created() {
    this.getUsers();
  },
};
</script>

<style lang="scss" scoped>
.restaurants {
  background: #ed9529;
}
</style>
