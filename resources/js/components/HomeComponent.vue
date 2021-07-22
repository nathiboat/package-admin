<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="p-10" v-for="user in users">
            <!--Card 1-->
            <div class="w-full lg:max-w-full lg:flex">
              <div
                class="
                  border-r border-b border-l border-t border-gray-400
                  lg:border-t lg:border-gray-400
                  bg-white
                  rounded-b
                  lg:rounded-b-none lg:rounded-r
                  p-4
                  flex flex-col
                  justify-between
                  leading-normal
                "
              >
                <div class="mb-8">
                  <p
                    class="text-sm text-gray-600 flex items-center"
                    v-if="!user.enabled"
                  >
                    <svg
                      class="fill-current text-gray-500 w-3 h-3 mr-2"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"
                      />
                    </svg>
                    Disabled
                  </p>
                  <div class="text-gray-900 font-bold text-xl mb-2">
                    {{ user.name }}
                  </div>
                </div>
                <div class="flex items-center">
                  <div class="text-sm">
                    
                    <p class="text-gray-600"> Start date: {{ user.created_at }}</p>
                    <button
                      class="
                        bg-transparent
                        hover:bg-blue-500
                        text-blue-700
                        font-semibold
                        hover:text-white
                        py-2
                        px-4
                        border border-blue-500
                        hover:border-transparent
                        rounded
                      "
                    >
                      Edit
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      users: {},
    };
  },
  async mounted() {
    let response = await axios.get("/api/users");
    this.users = response.data.data;
  },
};
</script>
