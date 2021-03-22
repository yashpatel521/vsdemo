<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax basic</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <!-- <div class="container">
        <h2 id="changedata">hello world</h2>
        <button id="btn" class="btn btn-primary">Click Me</button>.
    </div>
    <script>
        $(document).ready(function() {
            $('#btn').on("click", function() {
                $("#changedata").load("save.php", function() {
                    alert('Data changed');
                })
            })
        })
    </script> -->

    <!-- <div class="container">
        <div>
            <h2 id="loaddata">hello world</h2>
        </div>
        <button class="btn btn-primary" onclick="myfun()">Check</button>
    </div>
    <script>
        function myfun() {
            var req = new XMLHttpRequest();
            req.open('GET', 'save.php', true);
            req.send();

            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('loaddata').innerHTML = req.responseText;
                }
            }
        }
    </script> -->

    <div class="container">
        <div>
            <h2 id="loaddata">hello world</h2>
        </div>
        <button class="btn btn-primary btnclick">Check</button>
    </div>
    <script>
    $(document).ready(function() {
        $('.btnclick').click(function() {

            $.post('save.php', {

                    name: "Yash",
                    sname: "Patel"

                },
                function(data, status) {

                    $('#loaddata').html(data);
                    alert(status);

                })
        })
    })
    </script>
</body>

</html>