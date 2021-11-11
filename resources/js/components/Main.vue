<template>
  <main>
    <section id="restaurants">
      <RestaurantsList />
    </section>
    <section id="about-us">
      <div class="d-flex">
        <div class="col-4 d-flex flex-column">
          <h2>Rider</h2>
          <img src="img/rider.png" alt="rider-image" />
          <p id="rider">
            Deliveroo è orgogliosa di offrire un lavoro ben retribuito e
            flessibile ai rider, che sono il cuore del nostro servizio. Il loro
            lavoro alimenta la nostra crescita, e senza di loro non potremmo
            consegnare ai nostri clienti i piatti migliori e aiutare i
            ristoranti locali a crescere. I rider hanno accesso
            all’assicurazione, ma vogliamo fare di più. Deliveroo è stata la
            prima società tech a chiedere la fine del compromesso tra
            flessibilità e sicurezza che esiste attualmente nel diritto del
            lavoro. Vogliamo collaborare con i governi in tutti i Paesi per
            raggiungere questo obiettivo.
          </p>
        </div>
        <div class="col-4 d-flex flex-column">
          <h2>Our Company</h2>
          <img src="img/our-company.jpg" alt="our-company-image" />
          <p id="our-company">
            When Deliveroo founder and CEO Will Shu moved to London in 2013, he
            found a city full of great restaurants, but few delivered. So, he
            decided that his personal mission would be to bring the best
            restaurants in town straight into people's homes. Food is at the
            heart of every Deliveroo business and his mission is to give
            customers more choice. There are great restaurants that we believe
            everyone should be able to order from. But Deliveroo's goal is not
            just to make sure that restaurants in your area are available when
            and where you want. We want to go further and bring new restaurants
            to your area to expand your choice. Deliveroo Editions is a project
            that was created to bring the dishes of great chefs, created
            exclusively for Deliveroo, to all homes. Editions allows chefs and
            restaurants to create new concepts and reach new food enthusiasts.
          </p>
        </div>
        <div class="col-4 d-flex flex-column">
          <h2>Work with us</h2>
          <img src="img/work-with-us.png" alt="work-with-us-image" />
          <h4>Perché lavorare con noi?</h4>
          <ul>
            <li v-for="(work, index) in works" :key="index">
              {{ work.paragraph }}
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section id="our-values">
      <div class="container">
        <h2>Our values</h2>
        <p>
          Everything we do revolves around our values. They guide us every day
          to work as a team and make important decisions, from the choices that
          have an impact on hiring and staff development, to those that write
          the future of Deliveroo products.
        </p>
        <img src="img/our-values-image.jpg" alt="our-values-image" />
      </div>
    </section>
  </main>
</template>

<script>
import RestaurantsList from "./restaurants/RestaurantsList.vue";
import works from "./data/works.js";

export default {
  name: "Main",
  components: {
    RestaurantsList,
  },
  data() {
    return {
      works,
    };
  },
};
</script>

<style lang="scss" scoped>
#our-values {
  h2 {
    font-size: 38px;
    margin-bottom: 14.5px;
    color: #440264;
  }
  img {
    margin: 30px 12.5%;
    width: 75%;
  }
}
</style>