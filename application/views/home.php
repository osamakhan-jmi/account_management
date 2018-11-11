<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Home</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/desgin.css">
</head>

<body>
    <div id="container">
        <form action="<?php echo site_url('home/userValidation'); ?>" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required="required">
            <div id="lower">
                <input type="submit" value="Check">
            </div>
        </form>
    </div>
</body>
</html>