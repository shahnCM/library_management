<template>
  <div class="absolute flex max-w-xs w-full mt-4 mr-4 top-0 right-0 bg-green-200 rounded-md shadow-md p-4">
    <div class="mr-2">
      <svg class="w-6 h-6 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
      </svg>      
    </div>
    <div class="flex-1 text-gray-600 font-semibold text-lg uppercase">
      {{toastSuccess.message}}
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
    toastSuccess: Object
  }
}
</script>
  
