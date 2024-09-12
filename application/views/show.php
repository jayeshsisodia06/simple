<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Page</title>
</head>
<body>
    <h1>Welcome to India</h1>
    <form action="<?= base_url('index.php/welcome/submitName') ?>" method="post">
        <label for="name">Enter Your Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
