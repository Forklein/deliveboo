<template>
  <main>
    <RestaurantsList />
    <Loader v-if="isLoading" />
    <section id="our-technology" class="pt-5 d-flex-align-items-center">
      <div class="container justify-content-center">
        <div class="mb-5 text-center" data-aos="fade-down">
          <h2 class="mb-2">Technology guides us</h2>
          <p>
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
    <section id="overview" class="py-5">
      <div class="container justify-content-center">
        <div class="row pb-5 d-flex align-items-center">
          <div
            class="
              col-6 col-md-4
              d-flex
              flex-column
              align-items-center
              justify-content-center
            "
          >
            <img
              class="icon"
              src="img/restaurant-icon.png"
              alt="restaurant-icon"
            />
            <h3 class="font-weight-bolder">140.000</h3>
            <p>Partner restaurants</p>
          </div>
          <div
            class="
              col-6 col-md-4
              d-flex
              flex-column
              align-items-center
              justify-content-center
            "
          >
            <img class="icon" src="img/rider-icon.png" alt="rider-icon" />
            <h3 class="font-weight-bolder">100.000 +</h3>
            <p>Riders in Italy and all around the world</p>
          </div>
          <div
            class="
              col-6 col-md-4
              d-flex
              flex-column
              align-items-center
              justify-content-center
            "
          >
            <img class="icon" src="img/thunder-icon.png" alt="thunder-icon" />
            <h3 class="font-weight-bolder">20 min</h3>
            <p>Average delivery time</p>
          </div>
          <small>Global figures as of August 2021</small>
        </div>
        <div class="mt-3 d-flex justify-content-center flex-wrap">
          <img class="logo m-3" src="img/logo1.png" alt="logo-RossoPomodoro" />
          <img class="logo m-3" src="img/logo2.png" alt="logo-McDonald" />
          <img class="logo m-3" src="img/logo3.png" alt="logo-LaPiadineria" />
          <img class="logo m-3" src="img/logo4.png" alt="logo-Lievità" />
          <img class="logo m-3" src="img/logo5.png" alt="logo-Temakinho" />
          <img class="logo m-3" src="img/logo6.png" alt="logo-Machai" />
          <img class="logo m-3" src="img/logo7.png" alt="logo-Daruma" />
        </div>
      </div>
    </section>
    <section id="newsletter" class="py-3">
      <div class="container">
        <div class="row mt-2">
          <div class="col-12 col-md-8">
            <h3 class="mt-2 text-white font-weight-bolder">
              Stay up to date on everything that happens.
            </h3>
            <div class="input-group w-75 mt-5">
              <input
                type="text"
                class="form-control pl-4"
                placeholder="Enter your email address..."
              />
              <div class="input-group-append">
                <button
                  class="px-3 border-0 text-white font-weight-bolder"
                  type="submit"
                >
                  Subscribe
                </button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-4 d-flex justify-content-center">
            <img src="img/newsletter-image.png" alt="newsletter-image" />
          </div>
        </div>
      </div>
    </section>
  </main>
</template>
<script>
import RestaurantsList from "./restaurants/RestaurantsList.vue";
import Loader from "./utilities/Loader.vue";

export default {
  name: "Main",
  components: {
    RestaurantsList,
    Loader,
  },
  data() {
    return {
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

#our-technology {
  background: $lightTurquoise;
}

#overview {
  img.icon {
    width: 120px;
  }
  h3 {
    font-size: 40px;
  }
  .logo {
    height: 80px;
  }
  p {
    font-size: 20px;
  }
}

#newsletter {
  background: $oxfordBlue;
  h3 {
    font-size: 32px;
  }
  input {
    border-radius: 20px 0 0 20px;
  }
  button {
    border-radius: 0 20px 20px 0;
    background: $mediumTurquoise;
  }
  img {
    max-height: 160px;
  }
}
</style>

