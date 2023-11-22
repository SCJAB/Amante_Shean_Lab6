<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Online Registration Form</title>
</head>
<body>
    <form action="process_form.php" method="post">
        <label>Last Name</label>
        <input type="text" name="last_name" required placeholder="*" class="placeholder-red"><br>
        
        <label>First Name</label>
        <input type="text" name="first_name" required placeholder="*" class="placeholder-red"><br>
        
        <label>Middle Initial</label>
        <input type="tel" name="middle_initial"><br>

        <label>Age</label>
        <input type="number" name="age" required placeholder="*" class="placeholder-red"><br>

        <label>Contact No.</label>
        <input type="tel" name="contact_no" required placeholder="*" class="placeholder-red"><br>

        <label>Email</label>
        <input type="email" name="email" required placeholder="*" class="placeholder-red"><br>

        <label>Address</label>
        <input type="text" name="address" required placeholder="*" class="placeholder-red"><br>
<a href="./index.php"></a>
        <input type="submit" value="Submit">
    </form>
</body>
</html>