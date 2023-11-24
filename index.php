<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/microsoft-sans-serif" rel="stylesheet">
    <title></title>
    <style>
        *{
            overflow-x: hidden;
        }
        body{
            font-family: 'Microsoft Sans Serif', sans-serif;
            width: 100vw;
            display: flex;
            justify-content: center;
            background-color: #141414;

        }
        .container{
            width: 80vw;
            height: auto;
            background-color: #10101000;

        }
        .card{
            width: 100%;
            margin: 20px;
            background: #10101000;
            border-radius: 5px;
            box-shadow: 0 0 5px #e3e3e300 ;
        }
        .card-header{
            width: 100;
            margin: 0;
            padding: 10px;
        }
        .text-title h1{

            color: #ffffff;
            font-weight: 600;
        }
        .text-subtitle p{
            line-height: 150%;
            color: #b9b9b9;
            font-weight: 400;
        }
        .card-body {
            margin-top: 30px;
            width: 100%;
            padding: 10px;
            
        }
        .button {
            display: inline-block;
            border-radius: 3px;
            background-color: #1e57f4;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 13px;
            width: 110px;
            height: 30px;
            transition: all 0.5s;
            cursor: pointer;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;

       }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;

        }
        .inputs input{
            height: 24px;
        }
        .outputs{
            margin-top: 30px;
            width: 100%;

        }
        .todolist{
            line-height: 100%;
            color: #b9b9b9;
            font-weight: 400;
        }
        table, td, th {
            border: 2px solid;
            border-color: #505050;
            padding: 5px;
            padding-left: 15px;
        }

        table {
            width: 95%;
            border-collapse: collapse;
        }
        th {
            text-align: left;
        }
        tr:hover {background-color: rgb(6, 6, 6);}
        
        .delete-button button{
            background-color: #f41e1e;
        }
        .done-button button{
            background-color: #c3c3c3;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="text-title">
                    <h1>📁 To-Do List</h1>
                </div>
                <div class="text-subtitle">
                    <p>📚 A to-do list is just a list of things you have to-do. <br>
                    That means basically anything and everything can be on your to-do list—but <br> just because you've written your to-dos down doesn't mean your to-do list is actually useful. <br>
                    Effectively tracking when your work is due can help you prioritize and get great work done.</p>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <div class="inputs">
                    <input placeholder="Got any schedule?" type="text" id="task"> <input placeholder="The due date" type="text">
                    <button class="button" style="vertical-align:middle" onclick="addTask()"><span>Add To List </span></button>
                </div>
                <div class="outputs">
                    <div class="todolist">
                        <table>
                            <thead>
                                <tr>
                                    <th>Tasks</th>
                                    <th>Deadline</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody id="list-data">
                                
                            </tbody>
                        </table>                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>