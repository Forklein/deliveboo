<template>
  <div class="checkout d-flex align-items-center justify-content-center mt-5">
    <div class="w-75" :class="modal ? 'opacity' : ''">
      <Loader v-if="isLoading" />
      <div
        v-if="form"
        class="container bg-lightjasmine border-custom shadow-lg p-5"
      >
        <div class="row my-3">
          <div class="col-12 col-md-6 container-fluid row">
            <div class="form-group col-12">
              <label for="name">Name</label>
              <input
                type="text"
                v-model="name"
                class="form-control border-custom"
                id="name"
              />
            </div>
            <div class="form-group col-12">
              <label for="surname">Surname</label>
              <input
                type="text"
                v-model="surname"
                class="form-control border-custom"
                id="surname"
              />
            </div>
            <div class="form-group col-12">
              <label for="address">Address</label>
              <input
                type="text"
                v-model="address"
                class="form-control border-custom"
                id="address"
              />
            </div>
            <div class="form-group col-12">
              <label for="phone">Phone</label>
              <input
                type="phone"
                v-model="phone"
                class="form-control border-custom"
                id="phone"
              />
            </div>
            <div class="form-group col-12">
              <label for="email">Email address</label>
              <input
                type="email"
                v-model="mail"
                class="form-control border-custom"
                id="email"
              />
            </div>
          </div>
          <div class="col-12 col-md-6 my-auto">
            <div class="card p-4">
              <div>
                <p>Hi, {{ name }} {{ surname }}</p>
              </div>
              <div class="card-body">
                <p>{{ address }}</p>
                <p>{{ phone }}</p>
                <p>{{ mail }}</p>
                <span>You have purchashed these plates:</span>
                <div
                  class="container-fluid"
                  v-for="(plate, index) in cart"
                  :key="index"
                >
                  <div class="row">
                    <div class="col-10">{{ plate.name }}</div>
                    <div class="col-2">{{ plate.quantity }}</div>
                    <div class="col-12"><hr /></div>
                  </div>
                </div>
              </div>
              <div class="my-3 d-flex">
                <div class="col-6">Total Order:</div>
                <div class="col-6 d-flex justify-content-end">
                  {{ total.toFixed(2) }} €
                </div>
              </div>
              <img
                class="img-fluid"
                src="https://i.ibb.co/c8CQvBq/barcode.png"
                alt=""
              />
            </div>
          </div>
          <button
              type="button"
              @click="createOrder"
              class="btn rounded-pill text-white my-4"
            >
              Complete Order
            </button>
        </div>
      </div>
      <div
        v-if="payment"
        class="container d-flex justify-content-center align-items-center"
      >
        <v-braintree
          :authorization="token"
          @success="onSuccess"
          @error="onError"
          locale="it_IT"
          :card="{
            cardholderName: {
              required: true,
            },
          }"
        ></v-braintree>
      </div>
      <Thanks v-if="thanks" :order="order" :order-id="orderId" />
    </div>
    <Modal
      :class="modal ? 'd-block' : ''"
      :warning="'There are errors in the input fields'"
      @close="modal = false"
    />
  </div>
</template>

<script>
import Loader from "../utilities/Loader.vue";
import Thanks from "../utilities/Thanks.vue";
import Modal from "../utilities/Modal.vue";

export default {
  name: "checkout",
  components: {
    Loader,
    Thanks,
    Modal,
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
      modal: false,
      isLoading: false,
      form: true,
      payment: false,
      thanks: false,
    };
  },
  methods: {
    onSuccess(payload) {
      this.payment = false;
      this.isLoading = true;
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
        setTimeout(() => {
          this.isLoading = false;
          this.thanks = true;
        }, 1500);
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
      if (
        order.name &&
        order.surname &&
        order.address &&
        !isNaN(order.phone) &&
        order.phone.length > 8 &&
        order.mail.includes("@")
      ) {
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
      } else this.modal = true;
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

<style lang="scss" scoped>
@import "../../../sass/_variables.scss";
.opacity {
  opacity: 0.5;
  height: 100vh;
}
</style>