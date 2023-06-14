<template>
    <div>
      <h2>{{ pizza.name }}</h2>
      <p>Selling Price: {{ calculateSellingPrice(pizza) }}</p>
      <h3>Ingredients:</h3>
      <ul>
        <li v-for="ingredient in pizza.ingredients" :key="ingredient.id">
          {{ ingredient.name }} - {{ ingredient.price }}
          <button @click="removeIngredient(ingredient.id)">Remove</button>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    props: ['pizza'],
    methods: {
      removeIngredient(ingredientId) {
      },
      calculateSellingPrice(pizza) {
        const totalIngredientsprice = pizza.ingredients.reduce(
          (total, ingredient) => total + ingredient.price,
          0
        );
        const preparationprice = totalIngredientsprice * 0.5;
        return totalIngredientsprice + preparationprice;
      }
    }
  };
  </script>
  