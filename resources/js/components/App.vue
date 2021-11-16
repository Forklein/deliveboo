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

button {
  border: none;
  background: $mediumTurquoise;
}

button:hover {
  background: $oxfordBlue;
  transform: scale(1.15);
}

.card:hover {
  transform: scale(1.1);
}
</style>
