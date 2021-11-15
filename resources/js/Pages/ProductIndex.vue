<template>
  <div>
    <ul>
      <li v-for="product in products">{{ product.name }} -
        <Link :title="product.name" class="text-blue-700" :href="route('products.edit', { product })">[edit]</Link>
      </li>
    </ul>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
  components: {
    Link,
  },
  props: ['products']
}
</script>