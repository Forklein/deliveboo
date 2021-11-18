<template>
  <header>
    <img src="/img/jumbotron.jpg" alt="" class="bg" />
    <div class="jumbotron">
      <div class="container flex-column align-items-start">
        <div class="jumbotron-text mt-1 mb-3 pr-4">
          <h1 class="jumbotron-title font-weight-bolder mb-2">
            The Food you love at Home
          </h1>
          <p>
            Deliveroo's aim is to transform the way customers eat. By constantly
            innovating and expanding, we offer ours customers the best choice
            and convenience and a large selection of restaurants: whether you
            want sushi for dinner, a salad for lunch, or a brioche for
            breakfast, we'll take care of it! In Deliveroo we know that every
            customer has different tastes and our job is to make sure that have
            what they want, when they want and where they want it.
          </p>
        </div>
        <button class="py-2 px-3 rounded-pill text-white">
          <a href="#about-us">Learn more</a>
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

header {
  position: relative;
  height: 650px;
  img.bg {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-position: center;
    object-fit: cover;
    z-index: -1;
  }
  .jumbotron {
    background: transparent;
    height: 100%;
  }
  .jumbotron-text {
    max-width: 55%;
    max-height: 285px;
    overflow-y: auto;
    font-size: 19px;
    line-height: 30px;
    text-align: justify;
    .jumbotron-title {
      color: $mediumTurquoise;
      font-size: 40px;
    }
    p {
      color: $oxfordBlue;
    }
  }
  button {
    border: none;
    background: $mediumTurquoise;
    &:hover {
      background: $oxfordBlue;
      transform: scale(1.15);
    }
  }
}
</style>