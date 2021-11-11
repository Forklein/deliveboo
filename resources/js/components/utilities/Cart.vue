<template>
  <div class="rounded-circle bg-light p-3" id="cart">
    <i class="fas fa-shopping-cart fa-2x pr-1"></i>
  </div>
</template>

<script>
export default {
  name: "Cart",
};
</script>

<style lang="scss" scoped>
#cart {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 10;
}
</style>