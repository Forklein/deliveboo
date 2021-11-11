<template>
  <section id="restaurants-list">
    <div class="mx-auto">
      <h2 v-if="!hideMenuList">Menu</h2>
      <h2 v-if="hideMenuList">Users' Restaurants</h2>
      <p v-if="hideMenuList">
        Here you can find a selection of the best restaurants next to you. Just
        choose meal and enjoy your favourite food in the comfort of your
        favourite places.
      </p>
      <Loader v-if="isLoading" />
      <div v-if="hideMenuList" class="cards-list">
        <RestaurantCard
          v-for="user in users"
          :key="user.id"
          :user="user"
          @plates="getPlates"
        />
      </div>
      <MenusList v-if="!hideMenuList" :plates="plates" />
      <button v-if="!hideMenuList" @click="hideMenuList = true">Return</button>
    </div>
  </section>
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
          this.isLoading = false;
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

<style scoped>
#restaurants-list {
  padding: 50px 0;
  height: fit-content;
  background: #ed9529;
  display: flex;
}

.container {
  flex-direction: column;
  height: 100%;
}

.cards-list {
  width: 100%;
  height: fit-content;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

h2 {
  text-align: center;
  color: #007e8a;
  font-size: 38px;
  margin-bottom: 14.5px;
}

p {
  text-align: center;
  font-size: 17px;
  line-height: 27px;
}
</style>
