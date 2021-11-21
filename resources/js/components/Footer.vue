<template>
  <footer>
    <section id="faq" class="pt-5 pb-4" :class="{ hidden: isHidden }">
      <div class="container">
        <a href="#links" @click="closeFaq"
          ><i class="fas fa-times text-secondary"></i
        ></a>
        <div class="table shadow-lg">
          <div>
            <a
              class="question btn btn-light w-100 py-3 px-4 text-left"
              data-toggle="collapse"
              href="#q1"
              role="button"
              aria-expanded="false"
              aria-controls="q1"
            >
              Do I need an FSA rating to join Deliveroo?
            </a>
            <div class="collapse text-secondary" id="q1">
              <div class="p-3">
                Yes, we need you to provide proof that your restaurant has a
                minimum standard of food hygiene.<br />

                We reserve the right to put your application on hold until you
                can obtain proof of your food hygiene standards.
              </div>
            </div>
          </div>
          <div>
            <a
              class="question btn btn-light w-100 py-3 px-4 text-left"
              data-toggle="collapse"
              href="#q2"
              role="button"
              aria-expanded="false"
              aria-controls="q2"
            >
              New to running a delivery-only restaurant?
            </a>
            <div class="collapse text-secondary" id="q2">
              <div class="p-3">
                Government-imposed limitations due to COVID-19 mean restaurants
                are likely to require more deliveries to maintain similar
                profits.<br />

                Read our guidance for restaurants adapting to a smaller dine-in
                capacity and greater demand for takeaway deliveries following
                COVID-19.
              </div>
            </div>
          </div>
          <div>
            <a
              class="question btn btn-light w-100 py-3 px-4 text-left"
              data-toggle="collapse"
              href="#q3"
              role="button"
              aria-expanded="false"
              aria-controls="q3"
            >
              Our riders or your own deliveries?
            </a>
            <div class="collapse text-secondary" id="q3">
              <div class="p-3">
                You can choose to use Deliveroo's world-class logistics network
                or your own delivery drivers.<br />

                We extensively train our riders, who can be tracked in real time
                when they're carrying your orders. Your customers can also see
                and interact with our riders, meaning fewer undelivered orders
                and more happy customers.
              </div>
            </div>
          </div>
          <div>
            <a
              class="question btn btn-light w-100 py-3 px-4 text-left"
              data-toggle="collapse"
              href="#q4"
              role="button"
              aria-expanded="false"
              aria-controls="q4"
            >
              Can I send my own menu images?
            </a>
            <div class="collapse text-secondary" id="q4">
              <div class="p-3">
                We recommend using as many high quality images as possible on
                your Deliveroo menu. That's why we offer a professional
                photography service as part of some of our packages.<br />

                You can also upload your own imagery for your menu and
                restaurant 'shopfront' on Deliveroo. All images are reviewed
                against our photography guidelines.<br />

                Find out more about uploading your imagery.
              </div>
            </div>
          </div>
          <div>
            <a
              class="question btn btn-light w-100 py-3 px-4 text-left"
              data-toggle="collapse"
              href="#q5"
              role="button"
              aria-expanded="false"
              aria-controls="q5"
            >
              What’s the difference between Table Service, Pickup and Delivery?
            </a>
            <div class="collapse text-secondary" id="q5">
              <div class="p-3">
                It’s up to you which you choose, but we know that your customers
                will love having the option to get Delivery at home, or use
                Pickup to collect orders direct from you when they’re out.<br />

                Our newest product, Table Service allows customers to use the
                Deliveroo app to dine-in at your restaurant, contact-free.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="links" class="pt-4 pb-2">
      <div class="container text-white">
        <img
          src="img/complete-logo.png"
          alt="logo-image"
          class="mb-3"
          id="logo"
        />
        <div class="row">
          <div class="col" id="about">
            <ul class="list-unstyled">
              <li>
                <a href="#hero">About us</a>
              </li>
              <li><a href="#our-technology">Our Technology</a></li>
              <li>
                <a href="#faq" @click="showFaq">FAQ</a>
              </li>
              <li>
                <a href="#links"> Terms & Conditions </a>
              </li>
              <li>
                <a href="#links"> Privacy policy </a>
              </li>
              <li>
                <a href="#links"> Cookies </a>
              </li>
              <li>
                <a href="#links"
                  >Download the app<i class="mx-2 fas fa-download"></i
                ></a>
              </li>
            </ul>
          </div>
          <ul></ul>
          <div class="col" id="contacts">
            <h6 class="mb-1">Contacts</h6>
            <ul class="list-unstyled">
              <li>
                <a href="#"
                  ><i class="mx-2 fas fa-envelope"></i>support@deliveboo.it</a
                >
              </li>
              <li>
                <a href="#">
                  <i class="mx-2 fas fa-map-marker-alt"></i>Deliveboo Italy
                  S.R.L.Via Carlo Bo 11 Milano 20143
                </a>
              </li>
            </ul>
            <hr class="border-white bg-white" />

            <div id="social-networks" class="mb-4">
              <a href="#"><i class="mx-2 fab fa-facebook"></i></a>
              <a href="#"><i class="mx-2 fab fa-twitter"></i></a>
              <a href="#"><i class="mx-2 fab fa-instagram"></i></a>
            </div>

            <small><i class="mr-2 far fa-copyright"></i>2021 Deliveboo</small>
          </div>
        </div>
      </div>
    </section>
  </footer>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      isHidden: true,
    };
  },
  methods: {
    showFaq() {
      this.isHidden = !this.isHidden;
    },
    closeFaq() {
      this.isHidden = true;
    },
  },
};
</script>

<style lang="scss" scoped>
@import "../../sass/_variables.scss";
footer {
  #links {
    background: $ourIndigo;
    font-size: 14px;
    line-height: 27px;
    #logo {
      height: 80px;
    }
    #social-networks i {
      font-size: 25px;
    }
  }
}

#faq {
  i {
    font-size: 17px;
  }
  a.question {
    font-size: 17px;
    color: $oxfordBlue;
  }
  .collapse {
    font-size: 15px;
  }
}

.hidden {
  display: none;
}

</style>
