<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Members
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl rounded-lg">

                  <!-- component -->
                  <div class="bg-white pb-4 px-4 rounded-md w-full">
                    <div class="w-full flex justify-between px-2 mt-2 pt-6">
                      <div class="pr-5">
                        
                        <inertia-link :href="$route('member.create')">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                          </svg>
                        </inertia-link>
                                                 
                      </div>
                      <div class="w-full sm:w-64 inline-block relative">
                        <input type="" name="" class="leading-snug border border-gray-300 block w-full appearance-none bg-gray-100 text-sm text-gray-600 py-1 px-4 pl-8 rounded-lg" placeholder="Search" />

                        <div class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-300">

                          <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
                            <path d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="overflow-x-auto mt-6">

                      <table class="table-auto border-collapse w-full">
                        <thead>
                          <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                            <th class=" px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">#ID</th>
                            <th class=" px-4 py-2 " style="background-color:#f8f8f8">Name</th>
                            <th class=" px-4 py-2 " style="background-color:#f8f8f8">Phone</th>
                            <th class=" px-4 py-2 " style="background-color:#f8f8f8">E-mail</th>
                            <th class=" px-4 py-2 " style="background-color:#f8f8f8">Status</th>
                            <th class=" px-4 py-2 " style="background-color:#f8f8f8">Joined@</th>
                            <th class=" px-4 py-2 text-center" style="background-color:#f8f8f8">Action</th>
                          </tr>
                        </thead>
                        <tbody class="text-sm font-normal text-gray-700">
                          <tr v-for="member in members.data" :key="member.id" 
                              class="hover:bg-gray-100 border-b border-gray-200 py-10">
                            <td class="px-4 py-4">{{member.id}}</td>
                            <td class="px-4 py-4">{{member.name}}</td>
                            <td class="px-4 py-4">{{member.phone}}</td>
                            <td class="px-4 py-4">{{member.email}}</td>
                            <td class="px-4 py-4" >
                              <span v-if="member.is_banned">Banned</span>
                              <span v-else>Not Banned</span>
                            </td>
                            <td class="px-4 py-4">{{moment(member.created_at).format('DD-MM-YYYY')}}</td>
                            <td class="px-4 py-4">
                              <div class="grid lg:grid-cols-4 md:grid-cols-2" >

                                <svg v-if="member.is_banned" class="h-6 w-6 text-gray-500 hover:text-green-600" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                  <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414l5-5a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414 0zm0-6a1 1 0 010-1.414l5-5a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L10 5.414 5.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                                              
                                <svg v-else class="h-6 w-6 text-gray-500 hover:text-red-800" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                  <path fill-rule="evenodd" d="M15.707 4.293a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 011.414-1.414L10 8.586l4.293-4.293a1 1 0 011.414 0zm0 6a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 111.414-1.414L10 14.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                              
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-red-500" width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                                  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg> 
                                                              
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-yellow-300" width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                                  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg>                             
                              
                                <inertia-link :href="$route('member.show', {member: member.id})">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 hover:text-blue-600" width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                  </svg>
                                </inertia-link>

                              </div>                              
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <SimplePagination :data="members"/>
                  
                  </div>

                  

                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout';
    import SimplePagination from '@/Components/Common/SimplePagination';

    export default {
        components: {
            AppLayout,
            SimplePagination,
        },

        mounted () {
          console.log(this.members);
        },

        props: {
          members: Object,
        },

        data() {
          return {
            // users: this.users
          }
        },
    }
</script>

<style scoped>
  
thead tr th:first-child { border-top-left-radius: 10px; border-bottom-left-radius: 10px;}
thead tr th:last-child { border-top-right-radius: 10px; border-bottom-right-radius: 10px;}

tbody tr td:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 0px;}
tbody tr td:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 0px;}


</style>