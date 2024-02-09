const { createApp } = Vue;

createApp({
    data() {
        return {
            todolist: []
        };
    },
    mounted() {
        axios
            .get('http://localhost/ESERCIZIO-php-todo-list-json/php-todo-list-json/backend/todolist.php')
            .then((res) => {
                console.log(res,"we");
                this.todolist = res.data;
            });
    }
}).mount('#app');