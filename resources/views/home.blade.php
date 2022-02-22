<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <h1 id="element"></h1>
    <input class="btn btn-primary" type="button" value="Input">
    <input class="btn btn-primary" type="submit" value="Submit">
    <input class="btn btn-primary" type="reset" value="Reset">
</body>

</html>
<script src="https://unpkg.com/typeit@8.2.0/dist/index.umd.js"></script>
<script>
    new TypeIt("#element", {
        strings: ["Welcome to the homepage", "Click the button below"],
        speed: 75,
        loop: true,
    }).go();
</script>