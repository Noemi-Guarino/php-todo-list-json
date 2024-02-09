const { createApp } = Vue;

createApp({
    data() {
        return {
            todolist: [],
            newtodo:''
        };
    },
    mounted() {
        axios
            .get('http://localhost/ESERCIZIO-php-todo-list-json/php-todo-list-json/backend/db/todolist.php')
            .then((res) => {
                console.log(res.data,"we");
                this.todolist = res.data;
            });
    },
    methods:{
        addtodo(){

        axios
            .post('http://localhost/ESERCIZIO-php-todo-list-json/php-todo-list-json/backend/db/create-todo.php',
            {
                todo: this.newtodo
            },
            {
                Headers:{
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then(res => {
                console.log(res);
            })


        }
    }
}).mount('#app');