<template>
  <div class="flex flex-col items-center justify-center h-screen">
    <span class="font-bold text-2xl">BRS</span>
    <div class="w-fit p-4 border border-black bg-gray-100 rounded">
      <div class="bg-amber-200 p-2 mb-2 border border-black flex justify-around rounded items-center">
        <div>
          <span>Tiers:</span>
          <select v-model="selectedTier" class="px-2 py-1 border-2 border-blue-500 rounded-lg">
            <option v-for="tier in tiers" :key="tier" :value="tier">{{ tier }}</option>
          </select>
        </div>
        <div>
          <span>Stacks:</span>
          <select v-model="selectedStack" class="px-2 py-1 border-2 border-blue-500 rounded-lg">
            <option v-for="stack in stacks" :key="stack" :value="stack">{{ stack }}</option>
          </select>
        </div>
        
        <div>
          <span>No:</span>
          <select v-model="selectedTier" class="px-2 py-1 border-2 border-blue-500 rounded-lg">
            <option v-for="tier in tiers" :key="tier" :value="tier">{{ tier }}</option>
          </select>
        </div>
        <button class="px-2 py-1 bg-white border-2 border-blue-500 rounded-lg shadow-md hover:bg-blue-500 hover:text-white hover:shadow-lg">Start!</button>
      </div>
      <div class="px-8 py-4 bg-amber-100 border border-black rounded">
        <div class="border-x-2 border-t-2 border-black bg-white">
          <span class="">Moves: {{ moves }}</span>
          <span class="">Minimum: {{ min }}</span>
        </div>
        <div class="border-x-2 border-t-2 border-black bg-white flex justify-around">
          <button class="px-2 py-1 border-2 border-red-500 rounded-lg shadow-md hover:bg-red-500 hover:text-white hover:shadow-lg">RESET</button>
          <button class="px-2 py-1 border-2 border-green-500 rounded-lg shadow-md hover:bg-green-500 hover:text-white hover:shadow-lg">UNDO</button>
        </div>
        <div class="flex flex-col-reverse border-2 border-black bg-white pt-32">
          <div class="flex px-2" v-for="column in columns" :key="column">
            <div class="px-2" v-for="number in column" :key="number">
              <Block :number="number"></Block>
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
      tiers: [1,2,3,4],
      stacks: [1,2,3,4],
      no: [1,2,3,4],
      moves: 0,
      min: 0,
      columns: [
        [1, 2, 3, 4],    
        [4, 100, 95, 32],
        [7, 32, 32, 33],
        [10, 42, 43, 44], 
      ]
    };
  },

}
</script>
