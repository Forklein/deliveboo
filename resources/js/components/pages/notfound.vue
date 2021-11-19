<template>
    <section id="notfound">
        <div class="notfound-content">
            <a href="/" class="btn btn-primary btn-anim"
                ><i class="fas fa-arrow-left"></i
            ></a>
        </div>
    </section>
</template>

<script>
export default {
    name: "notfound",
};
</script>

<style lang="scss">
#notfound {
    background-image: url("~/img/404.png");
    background-position: center;
    background-size: 60%;
    background-repeat: no-repeat;
    padding-top: 90px;
    height: 100vh;
    position: relative;
    .notfound-content {
        position: absolute;
        bottom: 40px;
        left: 40px;
        .btn-anim {
            transition: 0.5s ease;
            &:hover {
                transform: scale(1.5);
                border-radius: 50%;
            }
            &:active {
                box-shadow: 0 5px #666;
                transform: translateY(2px);
            }
        }
    }
}
</style>
