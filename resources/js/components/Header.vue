<template>
  <header>
    <div class="jumbotron">
      <img src="/img/jumbotron.jpg" alt="" class="jumbotron-img" />
      <div class="container my-container flex-column mt-5 overflow-auto">
        <h1 class="jumbotron-title mb-2">The Food you love at Home</h1>
        <p class="jumbotron-text pr-3">
          Deliveroo's aim is to transform the way customers eat. By constantly
          innovating and expanding, we offer ours customers the best choice and
          convenience and a large selection of restaurants: whether you want
          sushi for dinner, a salad for lunch, or a brioche for breakfast, we'll
          take care of it! In Deliveroo we know that every customer has
          different tastes and our job is to make sure that have what they want,
          when they want and where they want it.
        </p>
          <button class="py-2 px-3 border-0 rounded-pill text-white">
            <a href="#about-us">Read more</a>
          </button>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style lang="scss" scoped>
@import "../../sass/_variables.scss";

/****************************/
.jumbotron {
  height: 650px;
  position: relative;
}

.jumbotron-img {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  object-position: center;
  object-fit: cover;
  z-index: 1;
}

.my-container {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
}
/****************************/

.jumbotron-text {
  color: $oxfordBlue;
}

.jumbotron-title {
  font-weight: bolder;
  color: $mediumTurquoise;
}
</style>