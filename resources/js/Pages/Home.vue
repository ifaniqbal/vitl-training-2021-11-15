<template>
  <div>
    <button class="btn btn-primary">Ala CSS</button>
    <ButtonPrimary>Primary</ButtonPrimary>
    <Button>Neutral</Button>
    <Button>Danger</Button>
    <Button>Warning</Button>
  </div>
</template>

<script>
import Button from './../Components/Button'
import ButtonPrimary from './../Components/ButtonPrimary'

export default {
  components: {
    Button,
    ButtonPrimary,
  },
  props: ['user', 'item']
}
</script>