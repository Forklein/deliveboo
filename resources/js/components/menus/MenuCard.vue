<template>
  <div class="card">
    <div class="card-header">{{ plate.name }}</div>
    <div class="card-body">{{ plate.ingredients }}</div>
    <div class="card-footer">{{ plate.description }}</div>
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