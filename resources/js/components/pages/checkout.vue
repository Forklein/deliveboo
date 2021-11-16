<template>
  <div class="checkout">
    <div v-if="form" class="container">
      <Loader v-if="isLoading" />
      <div v-else class="row my-3">
        <div class="col-8">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" v-model="name" class="form-control" id="name" />
          </div>
          <div class="form-group">
            <label for="surname">Surname</label>
            <input
              type="text"
              v-model="surname"
              class="form-control"
              id="surname"
            />
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input
              type="text"
              v-model="address"
              class="form-control"
              id="address"
            />
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input
              type="phone"
              v-model="phone"
              class="form-control"
              id="phone"
            />
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input
              type="email"
              v-model="mail"
              class="form-control"
              id="email"
            />
          </div>
          <button type="button" @click="createOrder" class="btn btn-primary">
            Submit
          </button>
        </div>
        <div class="col-4 my-auto">
          <div class="card">
            <div class="card-header">{{ name }}<br />{{ surname }}</div>
            <div class="card-body">
              {{ address }}<br />{{ phone }}<br />{{ mail }}
            </div>
            <div class="card-footer">Total Order: {{ total }} €</div>
          </div>
        </div>
      </div>
    </div>
    <div v-if="payment" class="container">
      <v-braintree
        :authorization="token"
        @success="onSuccess"
        @error="onError"
        locale="it_IT"
      ></v-braintree>
    </div>
    <Thanks v-if="thanks" :order="order" />
  </div>
</template>

<script>
import Loader from "../utilities/Loader.vue";
import Thanks from "../utilities/Thanks.vue";

export default {
  name: "checkout",
  components: {
    Loader,
    Thanks,
  },
  data() {
    return {
      token: "",
      name: "",
      surname: "",
      address: "",
      phone: "",
      mail: "",
      total: 0,
      orderId: "",
      cart: [],
      order: {},
      isLoading: false,
      form: true,
      payment: false,
      thanks: false,
    };
  },
  methods: {
    onSuccess(payload) {
      let nonce = payload.nonce;
      axios({
        method: "post",
        url: "http://127.0.0.1:8000/api/payments",
        data: {
          token: nonce,
          id: this.orderId,
        },
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
      }).then((res) => {
        this.payment = false;
        this.thanks = true;
        localStorage.clear();
        console.log(res);
      });
    },
    onError(error) {
      let message = error.message;
      console.log(message);
    },
    createOrder() {
      const order = {
        name: this.name,
        surname: this.surname,
        address: this.address,
        phone: this.phone,
        mail: this.mail,
        total: this.total,
      };
      let obj = {};
      this.cart.forEach((el) => {
        obj[el.plate_id] = el.quantity;
      });
      order.order_details = obj;
      this.order = order;
      this.isLoading = true;
      setTimeout(() => {
        axios({
          method: "post",
          url: "http://127.0.0.1:8000/api/orders",
          data: this.order,
        })
          .then((res) => {
            console.log(res);
            this.orderId = res.data.Order_number;
            this.form = false;
            this.payment = true;
          })
          .catch((res) => {
            console.log(res);
          })
          .then(() => {
            this.isLoading = false;
          });
      }, 2500);
    },
  },
  created() {
    this.isLoading = true;
    setTimeout(() => {
      this.cart = JSON.parse(localStorage.getItem("storedData"));
      let total = 0;
      this.cart.forEach((el) => {
        total += el.price;
      });
      this.total = total;
      axios
        .get("http://127.0.0.1:8000/api/payments")
        .then((res) => {
          this.token = res.data.clientToken;
        })
        .catch((res) => {
          console.log(res);
        });
      this.isLoading = false;
    }, 2000);
  },
};
</script>

<style>
</style>