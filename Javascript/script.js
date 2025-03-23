document.getElementById("addButton").addEventListener("click", function() {
    let input = document.getElementById("todoInput");
    let todoText = input.value.trim();

    if (todoText !== "") {
        addTask(todoText);
        input.value = ""; 
    }
});

function addTask(taskText) {
    let li = document.createElement("li");


    let taskNode = document.createTextNode(taskText);
    li.appendChild(taskNode);


    let deleteButton = document.createElement("button");
    deleteButton.textContent = "Delete";
    deleteButton.addEventListener("click", function() {
        li.remove();
    });
    li.appendChild(deleteButton);

    
    document.getElementById("todoList").appendChild(li);
}
