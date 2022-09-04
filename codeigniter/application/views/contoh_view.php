<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector("form").onsubmit = function() {
                let namee = document.querySelector("#name").value;
                alert(`Hello, ${namee}`);
            }
        })
    </script>
</head>
<body>
    <h1>Hello!</h1>
    <form>
        <input autofocus type="text" id="name" placeholder="Name">
        <input type="submit">
    </form>
</body>
</html>
