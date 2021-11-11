<template>
  <div class="card" style="width: 18rem; height: 500px">
    <img :src="plate.image" class="card-img-top" :alt="plate.name" />
    <div class="card-body">
      <h5 class="card-title">{{ plate.name }}</h5>
      <p class="card-text">{{ plate.description }}</p>
      <p class="card-text">{{ plate.price }}€</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</template>

<script>
export default {
  name: "MenuCard",
  props: ["plate"],
};
</script>

<style>
</style>