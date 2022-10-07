<template>
    <div>
        <h1 class="text-3xl">{{ jobVacancy.title }}</h1>
        <p>{{ jobVacancy.description }}</p>
    </div>
</template>

<script>
export default {
    name: "JobVacancy",
    data() {
        return {
            jobVacancy: null,
        }
    },
    mounted() {
        this.fetchJobVacancy();
    },
    methods: {
        async fetchJobVacancy() {
            const jobVacancyId = this.$route.params.id;
            const response = await axios.get(`/api/job-vacancies/${jobVacancyId}`);
            this.jobVacancy = response.data.data;
        }
    }
}
</script>
