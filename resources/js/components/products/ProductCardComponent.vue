<template>
        <div class="col-xs-12 col-sm-10 col-md-4">
            <div class="card mt-3">
                    <header class="bg-primary padding"></header>
                    <div class="card-body padding">
                    <a :href="'/productos/'+product.id">
                        <h2 class="card-title">{{product.title}}</h2>
                    </a>   
                    <p class="card-text">{{product.description}}</p>
                    <b><p class="card-subtitle">{{product.humanPrice}}</p></b>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        props:{
            product:{
                type: Object
            }
        }
};
</script>