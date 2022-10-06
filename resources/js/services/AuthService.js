import axios from "axios";

export default {
    getUser() {
        return axios.get("/api/user");
    },
    async register(payload) {
        await axios.get("/sanctum/csrf-cookie");
        return axios.post("/register", payload);
    },
    async login(payload) {
        await axios.get("/sanctum/csrf-cookie");
        return axios.post("/login", payload);
    },
    logout() {
        return axios.post("/logout");
    },
};
