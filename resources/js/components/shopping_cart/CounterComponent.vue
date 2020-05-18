<template>
    <div>
        <a href="/carrito">
        <i class="fas fa-shopping-cart ">
        </i>
        {{productsCount}}
        </a>
    </div>
</template>
<script>
export default {
    props: ["count"],
    created(){
        window.store.commit("set", this.count);
    },
    computed:{
        productsCount(){
            return window.store.state.productsCount;
        }
    }
}
</script>