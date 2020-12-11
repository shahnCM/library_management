<template>
  <div class="absolute flex max-w-xs w-full mt-4 mr-4 top-0 right-0 bg-red-200 rounded-md shadow-md p-4">
    <div class="mr-2">
      <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
      </svg>   
    </div>
    <div class="flex-1 text-gray-600 text-lg font-semibold uppercase">
      {{toastFail.message}}
    </div>
    <div class="ml-2">
      <button class="align-top text-gray-500 hover:text-gray-700 focus:outline-none focus:text-indigo-600">
        <svg class="w-6 h-6 text-red-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>        
      </button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    toastFail: Object
  }  
}
</script>
 
  
