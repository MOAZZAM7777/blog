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
            
                <li><a href="manage-users.php"><i class="uil uil-pen"></i></a></li>
                <h5>Manage user</h5>
            
                <li><a href="add-category.php"><i class="uil uil-pen"></i></a></li>
                <h5>Add category</h5>

                <li><a href="mangae-categories.php" class="active"><i class="uil uil-pen"></i></a></li>
                <h5>Manage categories</h5>
            </ul>
        </aside>
        <main>
            <h2>Manage categories</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Travel</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>wild</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>music</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    
                </tbody>
            </table>
        </main>
    </div>
</section>