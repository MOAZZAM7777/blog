<?php
include 'partials/header.php';
?>  
    
<section class="dashboard">
    <div class="container dashboard_container">
        <aside>
            <ul>
                <li><a href="add-post.php"><i class="uil uil-pen"></i></a></li>
                <h5>Add post</h5>
            
                <li><a href="index.php"><i class="uil uil-pen"></i></a></li>
                <h5>Manage post</h5>
                <li><a href="add-user.php"><i class="uil uil-pen"></i></a></li>
                <h5>Add user</h5>
            
                <li><a href="manage-users.php" class="active"><i class="uil uil-pen"></i></a></li>
                <h5>Manage user</h5>
            
                <li><a href="add-category.php"><i class="uil uil-pen"></i></a></li>
                <h5>Add category</h5>

                <li><a href="mangae-categories.php"><i class="uil uil-pen"></i></a></li>
                <h5>Manage categories</h5>
               
            </ul>
        </aside>
        <main>
            <h2>Manage User</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ernest Achiever</td>
                        <td>achiver</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>yes</td>
                    </tr>
                    <tr>
                        <td>Ernest Achiever</td>
                        <td>achiver</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>yes</td>
                    </tr>
                    <tr>
                        <td>Ernest Achiever</td>
                        <td>achiver</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>yes</td>
                    </tr>

                </tbody>
            </table>
        </main>
    </div>
</section>