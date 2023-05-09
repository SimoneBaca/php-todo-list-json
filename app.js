const { createApp } = Vue
createApp({
    data() {
        return {

            tasks: [],
            api_url: 'php/server.php',
            newTask: '',
        }
    },
    methods: {
        readTasksList(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(response);
                    this.tasks = response.data
                })
        },
        addTask() {
            const data = {
                newTask: this.newTask,
            };
            axios
            .post('php/addTask.php', data, {
                    headers: { "Content-Type": "multipart/form-data" } 
                    
                })
                .then(response => {
                 //   console.log(response);
                    this.tasks = response.data;
                    this.newTask = '';
                })
            },
            changeStatus(index) {
                const data = {
                    'taskIndex': index,
                    'done': true
                };
                axios
                    .post('php/changeStatus.php', data, {
                        headers: { "Content-Type": "multipart/form-data" }
                    })
                    .then(response => {
                        //console.log(response);
                        this.tasks = response.data;
                    })
            },
            taskDone(index) {
                const data = {
                    'taskIndex': index
                };
                axios
                    .post('php/taskDone.php', data, {
                        headers: { "Content-Type": "multipart/form-data" }
                    })
                    .then(response => {
                        //console.log(response);
                        this.tasks = response.data;
                    })
         
        }
    },
    mounted() {
        this.readTasksList(this.api_url);
    }
}).mount('#app')