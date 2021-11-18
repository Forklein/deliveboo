<template>
    <section id="contacts">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-md-6 my-margin-y"
                    v-for="contact in contacts"
                    :key="contact.id"
                >
                    <div class="contact-card shadow-lg">
                        <div class="card-head">
                            <img
                                :src="contact.img"
                                :alt="contact.name"
                                class="contact-card-img shadow-lg"
                            />
                        </div>
                        <div class="card-content">
                            <h1 class="text-center">{{ contact.name }}</h1>
                        </div>
                        <div class="card-foot">
                            <div class="d-flex justify-content-between">
                                <div class="card-icon border-right">
                                    <a :href="contact.github">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                                <div class="card-icon">
                                    <a :href="contact.linkedin">
                                        <i class="fab fa-linkedin"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import contacts from "../data/contacts";
export default {
    name: "contact",
    data() {
        return {
            contacts,
        };
    },
};
</script>

<style lang="scss" scoped></style>
