<template>
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">
                    Sign up to your account
                </h2>
            </div>
            <form class="mt-8 space-y-6" @submit.stop.prevent="register" method="POST">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="name" class="sr-only">Your name</label>
                        <input id="name" name="name" autocomplete="name" required
                               v-model="form.name"
                               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Your name">
                    </div>
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                               v-model="form.email"
                               class="relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Email address">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                               v-model="form.password"
                               class="relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Password">
                    </div>
                    <div>
                        <label for="password_confirmation" class="sr-only">Confirm password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password"
                               autocomplete="current-password" required
                               v-model="form.password_confirmation"
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Confirm password">
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Sign up
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import AuthService from "@/services/AuthService";

export default {
    name: "Register",
    data() {
        return {
            form: {
                name: null,
                email: null,
                password: null,
                password_confirmation: null,
            }
        }
    },
    methods: {
        async register() {
            try {
                await AuthService.register(this.form);
                this.$router.push({name: "dashboard"});
            } catch (error) {
                //
            }
        }
    }
}
</script>

<style scoped>

</style>
