<template>
  <div class="flex flex-col items-center justify-center h-screen">
    <span>Block Relocation Puzzle Solver!</span>
    <div class="w-fit p-4 border border-black bg-gray-100 rounded">
      <div class="bg-amber-200 p-2 mb-2 border border-black flex justify-around rounded">
        <span>Tiers: 3</span>
        <span>Stacks: 6</span>
        <span>No: 5</span>
        <button class="px-2 border border-black">Start!</button>
      </div>
      <div class="px-8 py-4 bg-amber-100 border border-black rounded">
        <div class="border-x-2 border-t-2 border-black bg-white">
          <span class="">Moves: 000</span>
          <span class="">Minimum: 032</span>
        </div>
        <div class="border-x-2 border-t-2 border-black bg-white">
          <button class="">reset</button>
          <button class="">undo</button>
        </div>
        <div class="flex flex-col-reverse border-2 border-black bg-white pt-32">
          <div class="flex px-2" v-for="column in columns" :key="column">
            <div class="px-2" v-for="number in column" :key="number">
              <Block :number="number" ></Block>
            </div>
          </div>
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
        [1,2,3,4  ],    // Example column 1 with numbers
        [4, 100, 95, 32 ],    // Example column 2 with numbers
        [7, 32, 32, 33 ],
        [10, 42, 43, 44], // Example column 3 with numbers
      ]
    };
  },

}
</script>
