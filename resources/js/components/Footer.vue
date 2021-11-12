<template>
  <footer class="pt-4 pb-2">
    <div class="container text-white" id="links">
      <img src="img/complete-logo.png" alt="logo-image" class="mb-3" id="logo" />
      <div class="row">
        <div class="col" id="about">
          <ul class="list-unstyled">
            <li>
              <a href="#about-us">About us</a>
            </li>
            <li><a href="#our-technology">Our Technology</a></li>
            <li><a href="#our-values">Our values</a></li>
            <li><a href="#work-with-us">Work with us</a></li>
            <li><a href="#our-company">Our Company</a></li>
            <li><a href="#">Download the app<i class="mx-2 fas fa-download"></i></a></li>
          </ul>
        </div>
        <ul></ul>
            <!-- 
            <li><a href="#">Tipi di cucina</a></li>
            <li><a href="#">Termini & Condizioni</a></li>
            <li><a href="#">Informativa sulla privacy</a></li>
            <li><a href="#">FAQ</a></li> 
            -->
        <div class="col" id="contacts">
          <h6 class="mb-1 font-weight-bold">Contacts</h6>
          <ul class="list-unstyled">
            <li>
              <a href="#"
                ><i class="mx-2 fas fa-envelope"></i>support@deliveroo.it</a
              >
            </li>
            <li>
              <a href="#">
                <i class="mx-2 fas fa-map-marker-alt"></i>Deliveroo Italy S.R.L.Via
                Carlo Bo 11 Milano 20143
              </a>
            </li>
          </ul>
          <hr class="border-white bg-white" />

          <div id="social-networks">
            <a href="#"><i class="px-3 mx-2 fab fa-facebook"></i></a>
            <a href="#"><i class="mx-2 fab fa-twitter"></i></a>
            <a href="#"><i class="mx-2 fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style lang="scss" scoped>
@import "../../sass/_variables.scss";
footer {
  background: $ourIndigo;
  font-size: 14px;
  line-height: 27px;
  #social-networks i {
    font-size: 25px;
  }
}
</style>
