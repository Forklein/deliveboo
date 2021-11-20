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
      <div class="card-header text-center">
        <h2>Thanks for your order!</h2>
        <h5>Order number #{{ orderId }}</h5>
      </div>
      <div class="card-body">
        <p>Name: {{ order.name }}</p>
        <p>Surname: {{ order.surname }}</p>
        <p>Email: {{ order.mail }}</p>
        <p><b>Total: </b>{{ order.total.toFixed(2) }}€</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Thanks",
  props: ["order", "orderId"],
  created() {
    localStorage.clear();
    this.$confetti.start({
      particles: [
        {
          type: "heart",
        },
        {
          size: 15,
        },
      ],
      defaultColors: ["DodgerBlue", "Violet"],
    });
    setTimeout(() => {
      this.$confetti.stop();
    }, 2500);
  },
};
</script>

<style lang="scss" scoped>
</style>