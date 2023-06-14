<template>
  <div>
    <Ingredients />
    <Pizzas />
    <HomeComponent />
  </div>
</template>

<script>
import Ingredients from './components/Ingredients.vue';
import Pizzas from './components/Pizzas.vue';
import HomeComponent from './components/HomeComponent.vue';

export default {
  components: {
    Ingredients,
    Pizzas,
    HomeComponent
  },
};
</script>
