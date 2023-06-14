<template>
  <div>
    <h2>Ingredients</h2>
    <ul>
      <li v-for="ingredient in ingredients" :key="ingredient.id">
        {{ ingredient.name }} - {{ ingredient.price }}
        <button @click="removeIngredient(ingredient.id)">Remove</button>
      </li>
    </ul>
    <h3>Add Ingredient</h3>
    <form @submit.prevent="addIngredient">
      <input type="text" v-model="newIngredient.name" placeholder="Name" required>
      <input type="number" v-model="newIngredient.price" placeholder="Price" required>
      <button type="submit">Add</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      ingredients: [],
      newIngredient: {
        name: '',
        price: null,
      },
    };
  },
  created() {
    this.fetchIngredients();
  },
  methods: {
    fetchIngredients() {
      axios
        .get('/api/ingredients')
        .then((response) => {
          this.ingredients = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    removeIngredient(ingredientId) {
      axios
        .delete(`/api/ingredients/${ingredientId}`)
        .then(() => {
          this.ingredients = this.ingredients.filter(
            (ingredient) => ingredient.id !== ingredientId
          );
        })
        .catch((error) => {
          console.log(error);
        });
    },
    addIngredient() {
      axios
        .post('/api/ingredients', this.newIngredient)
        .then((response) => {
          this.ingredients.push(response.data);
          this.newIngredient.name = '';
          this.newIngredient.price = null;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
