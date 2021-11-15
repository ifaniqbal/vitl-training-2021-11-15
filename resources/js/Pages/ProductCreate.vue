<template>
  <div class="max-w-xs mx-auto">
    <form @submit.prevent="form.post(route('products.store'))" class="flex flex-col space-y-5">
      <input v-model="form.name" type="text" placeholder="name">
      <textarea v-model="form.description" placeholder="description"></textarea>
      <button>Create</button>
    </form>
  </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'

export default {
  setup() {
    const form = useForm({
      name: '',
      description: '',
    })

    return {
      form,
    }
  }
}
</script>