<template>
  <div
    class="
      container
      d-flex
      flex-column
      justify-content-center
      align-items-center
    "
  >
    <div class="card mx-auto">
      <div class="card-header">
        <h2>Thanks for your order!</h2>
      </div>
      <div class="card-body">
        <p>{{ order.name }}</p>
        <p>{{ order.surname }}</p>
        <p>{{ order.mail }}</p>
        <p>{{ order.total.toFixed(2) }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Thanks",
  props: ["order"],
};
</script>

<style lang="scss" scoped>
</style>