const  {createApp} = Vue;

createApp({
    data() {
        return {
            myList: [],

        }

    },
methods: {
    getList() {
        axios.get("server.php").then((resp) => {
            this.myList =resp.data;
        })
    }
}


}).mount("#app");