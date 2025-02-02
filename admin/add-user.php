<?php
include 'partials/header.php';
$firstname = $_SESSION['add-user-data']['firstname'] ?? null;
$lastname = $_SESSION['add-user-data']['lastname'] ?? null;
$username = $_SESSION['add-user-data']['username'] ?? null;
$email = $_SESSION['add-user-data']['email'] ?? null;
$createpassword = $_SESSION['add-user-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['add-user-data']['confirmpassword'] ?? null;

unset($_SESSION['add-user-data'])   ;
?>  
    <section class="form_section">
        <div class="container form_section-container">
            <h2>Add User</h2>
            <?php if(isset($_SESSION['add-user'])): ?>
                <div class="alert_message error">
                    <p>
                    <?= $_SESSION['add-user'];
                    unset($_SESSION['add-user'])
                    ?>
                    </p>
                </div>

            <?php endif ?>
            
            <form action="<?= ROOT_URL ?>admin/add-user-logic.php" enctype="multipart/form-data" method="POST">
                <input type="text" name="firstname" value="<?= $firstname?>" placeholder="Firstname">
                <input type="text" name="lastname" value="<?= $lastname?>"  placeholder="Last Name">
                <input type="text" name="username" value="<?= $username?>"  placeholder="Username">
                <input type="text" name="email" value="<?= $email?>"  placeholder="Email">
                <input type="text"name="createpassword" value="<?= $createpassword?>"  placeholder="Create password">
                <input type="text" name="confirmpassword" value="<?= $confirmpassword?>"  placeholder="confirm password">
                <select name="userrole">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <div class="form_control">
                    <label for="avatar">User Avatar</label>
                    <input type="file" name="avatar"id="avatar">
                </div>
                <button type="submit" name="submit" class="btn">Add User</button>
            </form>
        </div> 
    </section>
</head>
<body>