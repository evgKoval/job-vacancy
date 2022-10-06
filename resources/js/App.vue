<template>
    <div>
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex space-x-4">
                            <template v-if="user">
                                <a href="#" @click="logout"
                                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                >
                                    Logout
                                </a>
                                <div class="text-white">
                                    {{ user.email }}
                                </div>
                            </template>
                            <template v-else>
                                <router-link
                                    :to="{ name: 'login' }"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                >
                                    Login
                                </router-link>
                                <router-link
                                    :to="{ name: 'register' }"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                >
                                    Register
                                </router-link>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="mx-auto max-w-7xl px-2 py-2 sm:px-6 lg:px-8">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
    name: "App",
    computed: {
        ...mapGetters([
            "user",
        ]),
    },
    methods: {
        ...mapActions([
            "logout",
        ]),
    }
}
</script>
