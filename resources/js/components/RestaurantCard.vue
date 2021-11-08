<template>
  <div class="card mb-3">
    <div class="card-header">
      <h4>Userame: {{ user.name }}</h4>
      <p>Email: {{ user.email }}</p>
    </div>
    <div class="card-body">
      <h5>Restaurant: "{{ user.restaurant_name }}"</h5>
      <address>Address: {{ user.address }} - {{ user.city }} - {{ user.zip }} </address>
      <details>Phone Number: {{ user.phone }}</details>
      <details>Vat: {{ user.vat }}</details>
    </div>
  </div>
</template>

<script>
export default {
  name: "RestaurantCard",
  data() {
      return {
      }
  },
  props: ['user'],
  /* methods: {
    getFormattedDate(date) {
      const postDate = new Date(date);
      const day = postDate.getDate();
      const month = postDate.getMonth() + 1;
      const year = postDate.getFullYear();

      if (day < 10) day = "0" + day;
      if (month < 10) month = "0" + month;

      return `${day}/${month}/${year}`;
    },
  }, */
};
</script>