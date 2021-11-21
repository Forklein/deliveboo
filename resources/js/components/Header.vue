<template>
  <header>
    <div class="jumbotron pb-0" id="hero">
      <div class="container flex-column align-items-start">
        <div class="jumbotron-text text-justify mt-1 pr-4">
          <h1 class="jumbotron-title pb-2 font-weight-bolder">
            The Food you love at Home
          </h1>
          <p class="d-none d-md-block">
            Deliveroo's aim is to transform the way customers eat.
            <span class="d-none d-lg-inline-block d-xl-inline-block"
              >By constantly innovating and expanding, we offer our customers
              the best choice and convenience and a large selection of
              restaurants: whether you want sushi for dinner, a salad for lunch,
              or a brioche for breakfast, we'll take care of it! In Deliveroo we
              know that every customer has different tastes and our job is to
              make sure that have what they want, when they want and where they
              want it.</span
            >
          </p>
        </div>
        <button
          class="mt-3 py-2 px-3 border-0 rounded-pill text-white"
          @click="learnMore"
        >
          <a href="#about-us">Learn more</a>
        </button>
      </div>
    </div>
    <section
      id="about-us"
      class="py-5"
      :class="{ hidden: isHidden }"
    >
      <div class="container justify-content-center">
        <div class="mb-5 text-center" data-aos="fade-in">
          <h2 class="mb-2">About us</h2>
          <p>
            By offering fast and reliable delivery, which the customer can track
            on their mobile, Deliveroo has seen revenue growth of over 650%. Our
            partner restaurants manage to increase their revenues by 30%,
            creating thousands of jobs in the restaurant sector.
          </p>
        </div>
        <div class="row">
          <div class="col-12 col-lg-4">
            <div
              class="
                card
                shadow
                mb-5
                p-4
                d-flex
                flex-column
                align-items-center
                border-0
              "
              id="rider"
            >
              <img
                src="img/rider.png"
                alt="rider-image"
                class="img-fluid my-2"
                style="height: 130px"
              />
              <h3 class="font-weight-bolder mt-3 mb-2">Rider</h3>
              <p>
                Deliveroo prides itself on offering well-paid work and flexible
                to the riders, who are the heart of our service. Their work
                fuels our growth, and without them we'd not be able to deliver
                the best dishes to our customers and help local restaurants to
                grow. Riders have access to insurance, but we want to do more.
                Deliveroo was the first tech company to demand an end to the
                compromise between flexibility and security in the law of work.
              </p>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div
              class="
                card
                shadow
                mb-5
                p-4
                d-flex
                flex-column
                align-items-center
                border-0
              "
              id="our-company"
            >
              <img
                src="img/our-company.png"
                alt="our-company-image"
                class="img-fluid my-2"
                style="height: 130px"
              />
              <h3 class="font-weight-bolder mt-3 mb-2">Our Company</h3>
              <p>
                When Deliveroo founder and CEO Will Shu moved to London in 2013,
                he found a city full of great restaurants, but few delivered.
                So, he decided that his personal mission would be to bring the
                best restaurants in town straight into people's homes. Food is
                at the heart of every Deliveroo business and his mission is to
                give customers more choice. There are great restaurants that we
                believe everyone should be able to order from.
              </p>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div
              class="
                card
                shadow
                mb-5
                p-4
                d-flex
                flex-column
                align-items-center
                border-0
              "
              id="work-with-us"
            >
              <img
                src="img/work-with-us.png"
                alt="work-with-us-image"
                class="img-fluid my-2"
                style="height: 130px"
              />
              <h3 class="font-weight-bolder mt-3 mb-2">Work with us</h3>
              <ol class="m-0 pl-2">
                <li class="m-1" v-for="(work, index) in works" :key="index">
                  {{ work.paragraph }}
                </li>
              </ol>
            </div>
          </div>
        </div>
        <button
          class="mt-3 py-2 px-3 rounded-pill text-white"
          @click="readLess"
        >
          <a href="#hero">Read less</a>
        </button>
      </div>
    </section>
  </header>
</template>

<script>
import works from "./data/works.js";

export default {
  name: "Header",
  data() {
    return {
      works,
      isHidden: true,
    };
  },
  methods: {
    learnMore() {
      this.isHidden = false;
    },
    readLess() {
      this.isHidden = true;
    },
  },
};
</script>

<style lang="scss" scoped>
@import "../../sass/_variables.scss";

header {
  .jumbotron {
    min-height: 800px;
    background-image: url("/img/jumbotron.jpg");
    background-position: center;
  }
  .jumbotron-text {
    max-width: 60%;
    font-size: 19px;
    line-height: 30px;
    .jumbotron-title {
      color: $mediumTurquoise;
      font-size: 40px;
    }
    p {
      color: $oxfordBlue;
    }
  }
  button {
    background: $mediumTurquoise;
    &:hover {
      background: $oxfordBlue;
      transform: scale(1.15);
    }
  }
}

#about-us {
  background: $lightTurquoise;
}
.card {
  h3,
  h4 {
    color: $ourIndigo;
  }
  p {
    font-size: 16px;
    line-height: 30px;
  }
  li {
    font-size: 16px;
    line-height: 18px;
  }
}

.hidden {
  display: none;
}
</style>