import HomeComponent from './components/HomeComponent.vue';
import IngredientsComponent from './components/IngredientsComponent.vue';
import PizzasComponent from './components/PizzasComponent.vue';

export default [
  { path: '/', component: HomeComponent },
  { path: '/ingredients', component: IngredientsComponent },
  { path: '/pizzas', component: PizzasComponent },
];
