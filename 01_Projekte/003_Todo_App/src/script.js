const input = document.getElementById("todo-input");

const button = document.getElementById("add-btn");

const todoList = document.getElementById("todo-list");

button.addEventListener("click", function () {

    const task = input.value;

    if (task === "") {
        return;
    }

    const listItem = document.createElement("li");

    const taskspan = document.createElement("span");

    taskspan.textContent = task;

    taskspan.addEventListener("click", function () {

        taskspan.classList.toggle("completed");

        localStorage.setItem("todos", todoList.innerHTML);

    });

    const deleteButton = document.createElement("button");

    deleteButton.textContent = "Löschen";

    deleteButton.classList.add("delete-btn");

    deleteButton.addEventListener("click", function () {

        listItem.remove();

        localStorage.setItem("todos", todoList.innerHTML);

    });

    listItem.appendChild(taskspan);

    listItem.appendChild(deleteButton);

    todoList.appendChild(listItem);

    localStorage.setItem("todos", todoList.innerHTML);

    input.value = "";

});

input.addEventListener("keydown", function(event) {

    if (event.key === "Enter") {

        button.click();

    }

});

const savedTodos = localStorage.getItem("todos");

if (savedTodos) {

    todoList.innerHTML = savedTodos;

}