<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Member Information
            </h2>            
        </template>

        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-lg">
              <!-- Detail -->
              <div :class="member.is_banned ? 'bg-red-300' : 'bg-green-300' " class=" shadow overflow-hidden sm:rounded-lg">
                <div class="w-full flex justify-between">
                  <div class="px-4 py-5 sm:px-6"> 
                    <h3 class="text-lg leading-6 font-medium text-gray-600">
                      Status: {{member.is_banned ? 'Banned' : 'Not Banned'}} 
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-600">
                      Joined at {{moment(member.created_at).format('DD-MM-YYYY')}}
                    </p> 
                  </div>

                  <div class="flex items-stretch p-2" >
                    <svg v-if="member.is_banned" class="m-1 h-6 w-6 text-gray-500 hover:text-green-600" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414l5-5a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414 0zm0-6a1 1 0 010-1.414l5-5a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L10 5.414 5.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                                                  
                    <svg v-else class="m-1 h-6 w-6 text-gray-500 hover:text-red-800" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path fill-rule="evenodd" d="M15.707 4.293a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 011.414-1.414L10 8.586l4.293-4.293a1 1 0 011.414 0zm0 6a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 111.414-1.414L10 14.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                                                  
                    <svg xmlns="http://www.w3.org/2000/svg" class="m-1 h-6 w-6 text-gray-500 hover:text-yellow-300" width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                      <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                    </svg>  

                    <svg xmlns="http://www.w3.org/2000/svg" class="m-1 h-6 w-6 text-gray-500 hover:text-red-500" width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>                                                
                  
                  </div>  
                </div>
                
                <div class="border-t border-gray-200">
                  <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">
                        Full name
                      </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{member.name}}
                      </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">
                        Phone
                      </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{member.phone}}
                      </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                      <dt class="text-sm font-medium text-gray-500">
                        Email address
                      </dt>
                      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{member.email}}
                      </dd>
                    </div>


                  </dl>
                </div>
              </div>            
            </div>
          </div>
        </div>

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout';

    export default {
        components: {
            AppLayout,
        },

        mounted () {
          console.log(this.member);
        },

        props: {
          member: Object,
        },

        data() {
          return {
            // users: this.users
          }
        },
    }
</script>

