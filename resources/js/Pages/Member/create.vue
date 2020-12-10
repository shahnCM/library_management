<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Registar New Member
            </h2>            
        </template>

        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-lg">
         
            <!-- component -->
            <div class="bg-white  pt-2 ">
                <div class="container mx-auto">
                    <div class="inputs w-full max-w-5xl p-4 mx-auto">
                        <!-- <h2 class="text-2xl text-gray-500">Account Setting</h2> -->
                        <form class="pt-4 pb-4" @submit.prevent="createMember()">
                            <div class='flex flex-wrap -mx-3'>
                                <h3 class="text-gray-500 text-xl mx-auto pb-4">Enter all the information below </h3>
                                <div class="personal border-t w-full pt-4">
                                    <div class="flex items-center justify-between mt-4">
                                        <div class='w-full md:w-1/2 px-3 mb-6 bg-gray-100 rounded-lg pt-2 p-3 m-1'>
                                            <label class='block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2 ' >Full name</label>
                                            <input v-model="form.name" class=' appearance-none block w-full bg-white text-gray-500 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text'  required
                                            name="name">
                                        </div>
                                        <div class='w-full md:w-1/2 px-3 mb-6 bg-gray-100 rounded-lg pt-2 p-3 m-1'>
                                            <label class='block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2' >Phone</label>
                                            <input v-model="form.phone" class='appearance-none block w-full bg-white text-gray-500 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text'  required
                                            name="phone">
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between mt-4">
                                        <div class='w-full md:w-1/2 px-3 mb-6 bg-gray-100 rounded-lg pt-2 p-3 m-1'>
                                            <label class='block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2' >Email</label>
                                            <input v-model="form.email" class='appearance-none block w-full bg-white text-gray-500 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text'  required
                                            name="email">
                                        </div>
                                        <div class='w-full md:w-1/2 px-3 mb-6 bg-gray-100 rounded-lg pt-2 p-3 m-1'>
                                            <label class='block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2' >Password</label>
                                            <input v-model="form.password" class='appearance-none block w-full bg-white text-gray-500 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text'  required
                                            name="password">
                                        </div>
                                    </div>                                    

                                    <div class="flex justify-end pt-8">
                                        <button class="appearance-none bg-gray-200 hover:bg-green-400 hover:text-white text-gray-500 px-2 py-1 shadow-sm rounded-md mr-3" type="submit">save changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
          // console.log(this.member);
        },

        data() {
          return {
            form: {
              name: '',
              email: '',
              phone: '',
              password: '',
            }
          }
        },

        methods: {
          createMember() {
            let data = new FormData();
            data.append('name', this.form.name);
            data.append('email', this.form.email);
            data.append('phone', this.form.phone);
            data.append('password', this.form.password);

            this.$inertia.post(this.$route('member.store'), data)
          },
        }
    }
</script>

