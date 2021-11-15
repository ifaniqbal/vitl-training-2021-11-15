<template>
  <div class="max-w-xs mx-auto">
    <form @submit.prevent="form.put(route('products.update', { product }))" class="flex flex-col space-y-5">
      <input v-model="form.name" type="text" placeholder="name">
      <textarea v-model="form.description" placeholder="description"></textarea>
      <button>Update</button>
    </form>
  </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'

export default {
  props: ['product'],

  setup(props) {
    const form = useForm({
      name: props.product.name,
      description: props.product.description,
    })

    return {
      form,
    }
  }
}
</script>