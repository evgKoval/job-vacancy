<template>
    <div>
        <h1 class="text-3xl">Dashboard</h1>
        <div v-for="jobVacancy in jobVacancies" :key="jobVacancy.id"
             class="overflow-hidden mt-6 bg-white shadow rounded-lg">
            <div class="px-4 py-5 px-6">
                <a class="text-lg font-medium leading-6 text-gray-900">
                    <router-link :to="{ name: 'job-vacancy', params: { id: jobVacancy.id }}">
                        {{ jobVacancy.title }}
                    </router-link>
                </a>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ jobVacancy.description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Dashboard",
    data() {
        return {
            jobVacancies: [],
        }
    },
    mounted() {
        this.fetchJobVacancies();
    },
    methods: {
        async fetchJobVacancies() {
            const response = await axios.get("/api/job-vacancies");
            this.jobVacancies = response.data.data;
        }
    }
}
</script>
