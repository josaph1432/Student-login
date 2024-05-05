<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login </title>
    <link rel="stylesheet" href="Student.css"
</head>
<body>
    <div class="Home">
        <div class="Home-1">
            STUDENT LOGIN
        </div>
        <div class="Home-2">
            <form action="insert.php" method="post">
                <div class="Home-3">
                    <label for="id">Student ID</label>
                    <input type="number text" id="id" name="id"/>
                </div>
                <div class="Home-4">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name"/>
                </div>
            <button type="submit">LOGIN</button>
            </form>
        </div>
    </div>
</body>
</html>