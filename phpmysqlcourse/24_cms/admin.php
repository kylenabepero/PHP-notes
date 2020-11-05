<?php require 'templates/adminheader.inc.php'; ?>

<h1>Admin Area</h1>
<br>
<h3>View Pages</h3>
<br>
<p><a class="btn btn-info" href="add_page.php">Add a new page</a></p>

<table border="0" class="table table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $q = "select * from pages order by id asc";
        $r = mysqli_query($dbc, $q);
        
        while ($row = mysqli_fetch_assoc($r)) :

        ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><a href="edit_page.php?id=<?= $row['id'] ?>">Edit</a></td>
                <?php if ($row['id'] == 1): ?>
                <td></td>
                <?php else: ?>
                <td><a href="delete_page.php?id=<?= $row['id'] ?>">Delete</a></td>
                <?php endif; ?>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>


<?php require 'templates/adminfooter.inc.php'; ?>

