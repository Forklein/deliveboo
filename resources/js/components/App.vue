<template>
  <div class="app">
    <router-view />
  </div>
</template>

<script>
export default {
  name: "App",
};
</script>

<style lang="scss">
@import "../../sass/_variables.scss";
* {
  font-family: Arial, Helvetica, sans-serif;
}
.app{
  background-color: $ourLightIndigo;
  padding-top: 70px;
  min-height: 100vh;
}

p {
  font-size: 17px;
}

a,
a:hover {
  text-decoration: none;
  color: currentColor;
}

h2 {
  color: $ourIndigo;
  font-size: 38px;
  font-weight: bolder;
  text-align: center !important;
}

.card {
  border-radius: 20px;
}
</style>
