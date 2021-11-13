<template>
  <div class="checkout">
    <div class="container">
      <Loader v-if="isLoading" />
      <div v-else class="row">
        <div class="col-8">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" />
          </div>
          <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" class="form-control" id="surname" />
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" />
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone" />
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" />
          </div>
          <button type="button" @click="createOrder" class="btn btn-primary">
            Submit
          </button>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-header">{{ name }}{{ surname }}</div>
            <div class="card-body">{{ address }}{{ phone }}{{ mail }}</div>
            <div class="card-footer">150€</div>
          </div>
        </div>
      </div>
    </div>
    <!-- <v-braintree
      authorization="eyJ2ZXJzaW9uIjoyLCJhdXRob3JpemF0aW9uRmluZ2VycHJpbnQiOiJleUowZVhBaU9pSktWMVFpTENKaGJHY2lPaUpGVXpJMU5pSXNJbXRwWkNJNklqSXdNVGd3TkRJMk1UWXRjMkZ1WkdKdmVDSXNJbWx6Y3lJNkltaDBkSEJ6T2k4dllYQnBMbk5oYm1SaWIzZ3VZbkpoYVc1MGNtVmxaMkYwWlhkaGVTNWpiMjBpZlEuZXlKbGVIQWlPakUyTXpZNU1UQTNNekVzSW1wMGFTSTZJalJtTVRaak1ESXdMV0psTXpjdE5EQTJaQzFpTWpFekxXSmlZVEExT0RBNE5qaGtOaUlzSW5OMVlpSTZJblI0WTNad2JYTnhNMkozT0hSbk9Hb2lMQ0pwYzNNaU9pSm9kSFJ3Y3pvdkwyRndhUzV6WVc1a1ltOTRMbUp5WVdsdWRISmxaV2RoZEdWM1lYa3VZMjl0SWl3aWJXVnlZMmhoYm5RaU9uc2ljSFZpYkdsalgybGtJam9pZEhoamRuQnRjM0V6WW5jNGRHYzRhaUlzSW5abGNtbG1lVjlqWVhKa1gySjVYMlJsWm1GMWJIUWlPbVpoYkhObGZTd2ljbWxuYUhSeklqcGJJbTFoYm1GblpWOTJZWFZzZENKZExDSnpZMjl3WlNJNld5SkNjbUZwYm5SeVpXVTZWbUYxYkhRaVhTd2liM0IwYVc5dWN5STZlMzE5LlFmVXJjYnBZV0ZjTlJhNkFYUi03RGU1am1SLVhvLTRaLTJwYVZPejJkVVc0ZkNPWUI1VzlJX0lIM3dJeUdrNmFWLTluU3R4MGRXSDB0ay1veFRrdU13IiwiY29uZmlnVXJsIjoiaHR0cHM6Ly9hcGkuc2FuZGJveC5icmFpbnRyZWVnYXRld2F5LmNvbTo0NDMvbWVyY2hhbnRzL3R4Y3ZwbXNxM2J3OHRnOGovY2xpZW50X2FwaS92MS9jb25maWd1cmF0aW9uIiwiZ3JhcGhRTCI6eyJ1cmwiOiJodHRwczovL3BheW1lbnRzLnNhbmRib3guYnJhaW50cmVlLWFwaS5jb20vZ3JhcGhxbCIsImRhdGUiOiIyMDE4LTA1LTA4IiwiZmVhdHVyZXMiOlsidG9rZW5pemVfY3JlZGl0X2NhcmRzIl19LCJjbGllbnRBcGlVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvdHhjdnBtc3EzYnc4dGc4ai9jbGllbnRfYXBpIiwiZW52aXJvbm1lbnQiOiJzYW5kYm94IiwibWVyY2hhbnRJZCI6InR4Y3ZwbXNxM2J3OHRnOGoiLCJhc3NldHNVcmwiOiJodHRwczovL2Fzc2V0cy5icmFpbnRyZWVnYXRld2F5LmNvbSIsImF1dGhVcmwiOiJodHRwczovL2F1dGgudmVubW8uc2FuZGJveC5icmFpbnRyZWVnYXRld2F5LmNvbSIsInZlbm1vIjoib2ZmIiwiY2hhbGxlbmdlcyI6W10sInRocmVlRFNlY3VyZUVuYWJsZWQiOnRydWUsImFuYWx5dGljcyI6eyJ1cmwiOiJodHRwczovL29yaWdpbi1hbmFseXRpY3Mtc2FuZC5zYW5kYm94LmJyYWludHJlZS1hcGkuY29tL3R4Y3ZwbXNxM2J3OHRnOGoifSwicGF5cGFsRW5hYmxlZCI6dHJ1ZSwicGF5cGFsIjp7ImJpbGxpbmdBZ3JlZW1lbnRzRW5hYmxlZCI6dHJ1ZSwiZW52aXJvbm1lbnROb05ldHdvcmsiOnRydWUsInVudmV0dGVkTWVyY2hhbnQiOmZhbHNlLCJhbGxvd0h0dHAiOnRydWUsImRpc3BsYXlOYW1lIjoiQm9vbGVhbiIsImNsaWVudElkIjpudWxsLCJwcml2YWN5VXJsIjoiaHR0cDovL2V4YW1wbGUuY29tL3BwIiwidXNlckFncmVlbWVudFVybCI6Imh0dHA6Ly9leGFtcGxlLmNvbS90b3MiLCJiYXNlVXJsIjoiaHR0cHM6Ly9hc3NldHMuYnJhaW50cmVlZ2F0ZXdheS5jb20iLCJhc3NldHNVcmwiOiJodHRwczovL2NoZWNrb3V0LnBheXBhbC5jb20iLCJkaXJlY3RCYXNlVXJsIjpudWxsLCJlbnZpcm9ubWVudCI6Im9mZmxpbmUiLCJicmFpbnRyZWVDbGllbnRJZCI6Im1hc3RlcmNsaWVudDMiLCJtZXJjaGFudEFjY291bnRJZCI6ImJvb2xlYW4iLCJjdXJyZW5jeUlzb0NvZGUiOiJFVVIifX0="
      @success="onSuccess"
      @error="onError"
      locale="it_IT"
    /> -->
  </div>
</template>

<script>
import Loader from "../utilities/Loader.vue";

export default {
  name: "checkout",
  components: {
    Loader,
  },
  data() {
    return {
      name: "Prova d'ordine",
      surname: "Prova d'ordine",
      address: "Prova d'ordine",
      phone: "33333333333",
      mail: "prova@prova.it",
      plate_id: "5",
      total: "55.30",
      isLoading: false,
      order: {
        name: this.name,
        surname: this.surname,
        address: this.address,
        phone: this.phone,
        mail: this.mail,
        total: this.total,
      },
    };
  },
  methods: {
    onSuccess(payload) {
      let nonce = payload.nonce;
      // Do something great with the nonce...
    },
    onError(error) {
      let message = error.message;
      // Whoops, an error has occured while trying to get the nonce
    },
    createOrder() {
      axios({
        method: "post",
        url: "http://127.0.0.1:8000/api/orders",
        data: this.order,
        headers: { "Content-Type": "multipart/form-data" },
      })
        .then(function (response) {
          //handle success
          console.log(response);
        })
        .catch(function (response) {
          //handle error
          console.log(response);
        });
    },
  },
  created() {
    this.isLoading = true;
    setTimeout(() => {
      this.isLoading = false;
    }, 1000);
    console.log(JSON.parse(localStorage.getItem("storedData")));
  },
};
</script>

<style>
</style>