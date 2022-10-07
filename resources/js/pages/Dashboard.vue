<template>
    <div>
        <h1 class="text-3xl">Dashboard</h1>
        <div v-for="jobVacancy in jobVacancies" class="overflow-hidden mt-6 bg-white shadow rounded-lg">
            <div class="px-4 py-5 px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ jobVacancy.title }}</h3>
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
