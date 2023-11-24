document.addEventListener('DOMContentLoaded', function () { 
    displayTask();    //to load the content without reloading the page
});




function displayTask()
{
    const todoList = document.getElementById('list-data');
    todoList.innerHTML = '';

    fetch('backend.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(tasks => {
            
                const todolist = document.getElementById('list-data');

                const row = document.createElement('tr');
                const tableData = document.createElement('td');
                tableData.textContent = tasks.task_name;

                todolist.appendChild(row);
                row.appendChild(tableData);

                
            });
        });
};

function addTask()
{
    const taskInput = document.getElementById('task');
    const task = taskInput.value.trim();
    if(task !== ''){
        fetch('backend.php', {
            method: 'POST',
            headers: {
                'Content-Type' : 'application/json',
            },
            body: JSON.stringify({
                task
            }),

        })
        .then(() =>{
            taskInput.value = '';
            displayTask();
        });
    };
};