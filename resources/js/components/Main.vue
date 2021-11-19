<template>
  <main>
    <RestaurantsList />
    <Loader v-if="isLoading" />
    <section id="our-technology" class="pt-5 d-flex-align-items-center">
      <div class="container justify-content-center">
        <div class="mb-5 text-center" data-aos="fade-down">
          <h2 class="mb-2">Technology guides us</h2>
          <p class="subtitle">
            We are proud to take our technology around the world. Our algorithm
            is based on powerful predictive technology and machine learning,
            that help optimizing the overall experience. In the last years
            Deliveroo has managed to decrease delivery time by 20%.
          </p>
        </div>
        <div class="row">
          <div
            class="col-12 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up-right"
          >
            <div
              class="
                card
                shadow
                mb-5
                px-4
                pt-4
                pb-2
                text-justify
                d-flex
                flex-column
                align-items-center
                border-0
              "
            >
              <img
                src="img/select-food.png"
                alt="select-food-image"
                class="w-75"
              />
              <h4 class="font-weight-bolder mt-3 mb-2">SELECT FOOD</h4>
              <p>
                You can make an order anytime, anywhere using a mobile device,
                taking your time to browse the menu and the food information.
              </p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
            <div
              class="
                card
                shadow
                mb-5
                px-4
                pt-4
                pb-2
                text-justify
                d-flex
                flex-column
                align-items-center
                border-0
              "
            >
              <img
                src="img/pay-online.png"
                alt="pay-online-image"
                class="w-75"
              />
              <h4 class="font-weight-bolder mt-3 mb-2">PAY ONLINE</h4>
              <p>
                You are paying for both food and convenience. Compare online
                prices, make your choice and trust our payment process.
              </p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
            <div
              class="
                card
                shadow
                mb-5
                px-4
                pt-4
                pb-2
                text-justify
                d-flex
                flex-column
                align-items-center
                border-0
              "
            >
              <img
                src="img/enter-address.png"
                alt="enter-address-image"
                class="w-75"
              />
              <h4 class="font-weight-bolder mt-3 mb-2">GPS SYSTEM</h4>
              <p>
                Our GPS systems help you capture your entire address and enter
                it. Enjoy your favourite food no matter where you are.
              </p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-left">
            <div
              class="
                card
                shadow
                mb-5
                px-4
                pt-4
                pb-2
                text-justify
                d-flex
                flex-column
                align-items-center
                border-0
              "
            >
              <img
                src="img/fast-delivery.png"
                alt="fast-delivery-image"
                class="w-75"
              />
              <h4 class="font-weight-bolder mt-3 mb-2">FAST DELIVERY</h4>
              <p>
                Our costumers are able to track the delivery to their door in
                real time. This way they can experience a fast, immediate
                service.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about-us" class="pt-5 d-flex align-items-center">
      <div class="container justify-content-center">
        <div class="mb-5 text-center" data-aos="fade-in">
          <h2 class="mb-2">About us</h2>
          <p class="subtitle">
            By offering fast and reliable delivery, which the customer can track
            on their mobile, Deliveroo has seen revenue growth of over 650%. Our
            partner restaurants manage to increase their revenues by 30%,
            creating thousands of jobs in the restaurant sector.
          </p>
        </div>
        <div class="row">
          <div class="col-12 col-md-4">
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
          <div class="col-12 col-md-4">
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
                src="img/our-company.jpg"
                alt="our-company-image"
                class="img-fluid my-2"
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
          <div class="col-12 col-md-4">
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
      </div>
    </section>
    <section id="our-values" class="py-5 d-flex justify-content-center">
      <div class="container paragraph justify-content-center text-center">
        <h2 class="mb-2">Our values</h2>
        <p class="mb-4">
          Everything we do revolves around our values. They guide us every day
          to work as a team and make important decisions, from the choices that
          have an impact on hiring and staff development, to those that write
          the future of Deliveroo products.
        </p>
        <img
          src="img/our-values.jpg"
          alt="our-values-image"
          class="img-fluid"
        />
      </div>
    </section>
    <section id="overview">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="card shadow">
              <img src="img/restaurant-icon.png" alt="restaurant-icon" />
            </div>
          </div>
          <div class="col-4">
            <div class="card shadow">
              <img src="img/rider-icon.png" alt="rider-icon" />
            </div>
          </div>
          <div class="col-4">
            <div class="card shadow">
              <img src="img/thunder-icon.png" alt="thunder-icon" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>
<script>
import RestaurantsList from "./restaurants/RestaurantsList.vue";
import works from "./data/works.js";
import Loader from "./utilities/Loader.vue";

export default {
  name: "Main",
  components: {
    RestaurantsList,
    Loader,
  },
  data() {
    return {
      works,
      isLoading: false,
    };
  },
  created() {
    this.isLoading = true;
    setTimeout(() => {
      this.isLoading = false;
    }, 2000);
  },
};
</script>
<style lang="scss" scoped>
@import "../../sass/_variables.scss";
#our-technology,
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
#our-values {
  background-color: $ourLightIndigo;
  h2 {
    color: $oxfordBlue;
  }
}
</style>