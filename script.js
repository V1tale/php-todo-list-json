const  {createApp} = Vue;

createApp({
    data() {
        return {
            myList: [],
            newTask: "",

        }
        
    },
    methods: {
    getList() {
        axios.get("server.php").then((resp) => {
            this.myList =resp.data;
        })
    },
    addNew() {
        const item = {newTask: this.newTask};
          axios.post("server.php", item, {
              headers: {"Content-Type": "multipart/form-data" },
            }).then((resp) => {
              this.myList = resp.data;
              this.newTask = null;
    })}
}


}).mount("#app");