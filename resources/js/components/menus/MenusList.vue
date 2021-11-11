<template>
  <section id="menus-list">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-3" v-for="(plate, index) in plates" :key="index">
          <MenuCard :plate="plate"/>
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
  props:["plates"],
};
</script>

<style>
</style>