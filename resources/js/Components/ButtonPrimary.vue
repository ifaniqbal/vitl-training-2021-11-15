<template>
  <Button class="bg-blue-500 text-white">
    <slot></slot>
  </Button>
</template>

<script>
import Button from './Button'
export default {
  components: {
    Button,
  }
}
</script>