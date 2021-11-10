<template>
  <section id="menus-list">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-3" v-for="user in users" :key="user.id">
          <MenuCard :plate="user.plates" />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import MenuCard from "./MenuCard.vue";

export default {
  name: "MenusList",
  components: {
    MenuCard,
  },
  props: ["users"],
};
</script>

<style>
</style>