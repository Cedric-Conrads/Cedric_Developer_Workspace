const input = document.getElementById("todoInput");
const addButton = document.getElementById("addButton");
const message = document.getElementById("message");
const todoList = document.getElementById("todoList");

addButton.addEventListener("click", function() {
    const todoText = input.value.trim();

    if (todoText === "") {
        message.textContent = "Bitte geben Sie eine Aufgabe ein.";
        return;
    }

    const todoItem = document.createElement("li");
    todoItem.textContent = todoText;

    const deleteButton = document.createElement("button");
    deleteButton.textContent = "Löschen";

    todoItem.appendChild(deleteButton);

    deleteButton.addEventListener("click", function() {
        todoItem.remove();
        message.textContent = todoText + " wurde gelöscht.";
    });

    todoList.appendChild(todoItem);

    input.value = "";
    message.textContent = todoText + " wurde hinzugefügt.";
});