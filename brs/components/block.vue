<template>
  <div class="w-16 h-16 flex items-center justify-center border border-4 border-blue-800 rounded bg-yellow-100">
    <div class="text-2xl">
      {{ number }}
    </div>
  </div>
</template>

<script>
export default {
  name: "block",
  props: {
    number: {
      type: Number,
      required: true,
    },
  },
}
</script>

<style scoped>

</style>
