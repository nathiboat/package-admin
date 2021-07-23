<template>
  <div
    class="
      flex
      items-center
      justify-center
      py-12
      px-4
      sm:px-6
      lg:px-8
    "
  >
    <div class="max-w-md w-full">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Create new package
        </h2>
      </div>
      <form class="mt-8 space-y-6" action="#" method="POST">
        <input type="hidden" name="remember" value="true" />
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <label for="name" class="sr-only">Name</label>
            <input
              id="name"
              name="email"
              autocomplete="email"
              required
              v-model="form.name"
              class="
                appearance-none
                rounded-none
                relative
                block
                w-full
                px-3
                py-2
                border border-gray-300
                placeholder-gray-500
                text-gray-900
                rounded-t-md
                focus:outline-none
                focus:ring-indigo-500
                focus:border-indigo-500
                focus:z-10
                sm:text-sm
              "
              placeholder="Name"
            />
          </div>
          <div>
            <label for="des" class="sr-only">Description</label>
            <input
              id="des"
              name="des"
              type="text"
              required
              v-model="form.des"
              class="
                appearance-none
                rounded-none
                relative
                block
                w-full
                px-3
                py-2
                border border-gray-300
                placeholder-gray-500
                text-gray-900
                rounded-t-md
                focus:outline-none
                focus:ring-indigo-500
                focus:border-indigo-500
                focus:z-10
                sm:text-sm
              "
              placeholder="Description"
            />
          </div>

          <div>
            <label for="des" >Commitment period</label>
            <input
              id="commitment_period"
              name="commitment_period"
              type="text"
              required
              v-model="form.commitment_period"
              class="
                appearance-none
                rounded-none
                relative
                block
                w-full
                px-3
                py-2
                border border-gray-300
                placeholder-gray-500
                text-gray-900
                rounded-t-md
                focus:outline-none
                focus:ring-indigo-500
                focus:border-indigo-500
                focus:z-10
                sm:text-sm
              "
              placeholder="Commitment period"
            />
          </div>

          <div>
            <label for="des" >Sell litmit</label>
            <input
              id="sell_limit"
              name="sell_limit"
              type="text"
              required
              v-model="form.sell_limit"
              class="
                appearance-none
                rounded-none
                relative
                block
                w-full
                px-3
                py-2
                border border-gray-300
                placeholder-gray-500
                text-gray-900
                rounded-t-md
                focus:outline-none
                focus:ring-indigo-500
                focus:border-indigo-500
                focus:z-10
                sm:text-sm
              "
              placeholder="Sell litmit"
            />
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input
              id="remember_me"
              name="remember_me"
              type="checkbox"
              v-model="form.enabled"
              class="
                h-4
                w-4
                text-indigo-600
                focus:ring-indigo-500
                border-gray-300
                rounded
              "
            />
            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
              Enable
            </label>
          </div>
        </div>

        <div>
          <button
            @click.prevent="createPackage"
            type="submit"
            class="
              group
              relative
              w-full
              flex
              justify-center
              py-2
              px-4
              border border-transparent
              text-sm
              font-medium
              rounded-md
              text-white
              bg-indigo-600
              hover:bg-indigo-700
              focus:outline-none
              focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
            "
          >
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
    import axios from 'axios'

    export default {
        data () {
            return {
                form:{
                    name: '',
                    des: '',
                    commitment_period: 0,
                    sell_limit: 0

                }
            }
        },
        methods: {
            async createPackage () {

                await axios.post('/api/packages', this.form).then(() => {
                     window.location.href = '/home'
                }).catch(function (error) {
                    console.log(error)
                })
            }

        }
    }
</script>

