<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

        </style>
    </head>
    <body>
        <div class="container" id="container">
            <p><strong>Message:</strong><h2>@{{message}} <a v-if="message.length > 0" v-on="click:remove(message)" href="#">X</a></h2></p>
            
            <form v-on="submit:addTask">
                <input type="text" v-model="task_input"/>
                <input type="submit" value="Submit"/>
            </form>
            
            
        </div>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
