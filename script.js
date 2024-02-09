const { createApp } = Vue;

createApp({
    data() {
        return {
            todolist: []
        };
    },
    mounted() {
        axios
            .get('http://localhost/ESERCIZIO-php-todo-list-json/php-todo-list-json/backend/db/todolist.php')
            .then((res) => {
                console.log(res.data,"we");
                this.todolist = res.data;
            });
    }
}).mount('#app');