<script setup>
import { computed } from 'vue'

const props = defineProps({
  price: [Number, String]
})

const formattedPrice = computed(
  () => Number(props.price).toLocaleString('en-US', {
    style: 'currency',
    currency: 'PHP',
    maximumFractionDigits: 0,
  }),
)
</script>

<template>
  <h5>{{ formattedPrice }}</h5>
</template>