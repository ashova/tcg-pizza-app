<template>
  <div>
    <h2>Pizzas</h2>
    <ul>
      <li v-for="pizza in pizzas" :key="pizza.id">
        <h3>{{ pizza.name }}</h3>
        <p>Selling Price: {{ calculateSellingPrice(pizza) }}</p>
        <ul>
          <li v-for="ingredient in pizza.ingredients" :key="ingredient.id">
            {{ ingredient.name }} - {{ ingredient.price }}
          </li>
        </ul>
        <button @click="removePizza(pizza.id)">Remove</button>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      pizzas: [],
    };
  },
  created() {
    this.fetchPizzas();
  },
  methods: {
    fetchPizzas() {
      axios
        .get('/api/pizzas')
        .then((response) => {
          this.pizzas = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    removePizza(pizzaId) {
      axios
        .delete(`/api/pizzas/${pizzaId}`)
        .then(() => {
          this.pizzas = this.pizzas.filter((pizza) => pizza.id !== pizzaId);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    calculateSellingPrice(pizza) {
      const totalIngredientsprice = pizza.ingredients.reduce(
        (total, ingredient) => total + ingredient.price,
        0
      );
      const preparationprice = totalIngredientsprice * 0.5;
      return totalIngredientsprice + preparationprice;
    },
  },
};
</script>
