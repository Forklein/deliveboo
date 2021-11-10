<template>
  <header>
    <div class="jumbotron" id="hero">
      <img src="/img/jumbotron (1).jpg" alt="" class="jumbotron-img" />
      <div class="text-container">
        <h2 class="jumbotron-title">The Food you love at Home</h2>
        <p class="jumbotron-text">
          Deliveroo's aim is to transform the way customers eat. By constantly
          innovating and expanding, we offer ours customers the best choice and
          convenience and a large selection of restaurants: whether you want
          sushi for dinner, a salad for lunch, or a brioche for breakfast, we'll
          take care of it! In Deliveroo we know that every customer has
          different tastes and our job is to make sure that have what they want,
          when they want and where they want it.
        </p>
          <button>
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

<style scoped>

/***************************/
.text-container {
  margin: 45px auto 0 auto;
  padding: 0 0 0 10%;
  width: 55%;
  max-height: 45%;
  overflow-y: auto;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  display: flex;
  flex-direction: column;
}
/***************************/

.jumbotron {
  width: 100%;
  min-height: 640px;
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

.jumbotron-title {
  color: #00ccbc;
  font-size: 38px;
  margin-bottom: 14.5px;
}

.jumbotron-text {
  margin-bottom: 10px;
  padding-right: 30px;
  width: 100%;
  color: #007E8A;
  font-size: 16px;
  line-height: 27px;
}

button {
  padding: 10px 17.5px;
  max-width: 120px;
  background: #00ccbc;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 30px;
}
</style>