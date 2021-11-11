<template>
  <div class="card">
    <div class="card-header">{{ plate.name }}</div>
    <div class="card-body">{{ plate.description }}</div>
    <div class="card-footer">€{{ plate.price }}</div>
  </div>
</template>

<script>
export default {
  name: "MenuCard",
  props: ["plate"]
};
</script>

<style>
</style>