<template>
  <div class="card mb-3">
    <div class="card-header">
      <h4>Userame: {{ user.name }}</h4>
      <p>Email: {{ user.email }}</p>
    </div>
    <div class="card-body">
      <h5>Restaurant: "{{ user.restaurant_name }}"</h5>
      <address>
        Address: {{ user.address }} - {{ user.city }} - {{ user.zip }}
      </address>
      <details>Phone Number: {{ user.phone }}</details>
      <details>Vat: {{ user.vat }}</details>
    </div>
  </div>
</template>

<script>
export default {
  name: "RestaurantCard",
  data() {
    return {};
  },
  props: ["user"],
};
</script>