<template>
    <section>
        <material-transition-group tag="div" class="row">
            <product-card-components :key="product.id" v-bind:product="product" v-for="(product, index) in products" :data-index="index" >
            </product-card-components>
        </material-transition-group>
    </section>
</template>

<script>

export default {
    data(){
        return{
            name: "Products Component", 
            products: [],
            endpoint: "/productos"
        }
    },
    created(){
        this.fetchProducts();
    },
    methods: {
        fetchProducts(){
            axios.get(this.endpoint).then((response) =>{
                console.log(response.data.data);
                this.products = response.data.data;
            });
        },
    }

}
</script>