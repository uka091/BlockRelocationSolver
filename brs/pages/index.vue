<template>
  <div class="flex flex-col items-center justify-center h-screen">

    <div class="flex flex-col-reverse p-4 border-2 border-black w-fit bg-gray-200">

      <div class="flex" v-for="column in columns" :key="column">
        <div class="px-2" v-for="number in column" :key="number">
          <Block  :number="number" ></Block>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'index',
  data() {
    return {
      columns: [
        [1, 2, 3, 4, 5, 6],    // Example column 1 with numbers
        [4, 5, 6, 7, 1, 2],    // Example column 2 with numbers
        [7, 8, 9],
        [10,11,12], // Example column 3 with numbers
      ]
    };
  },

}
</script>
