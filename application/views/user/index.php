<div class="row">
    <div class="col-md-12">
        <h1 class="title">User List</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID </th>
                <th>EMAIL</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>PASSWORD</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($row = $stmt->fetch()) : ?>
            <tr>
                <th><?php echo $row['id']; ?></th>
                <th><?php echo $row['email']; ?></th>
                <th><?php echo $row['name']; ?></th>
                <th><?php echo $row['age']; ?></th>
                <th><?php echo $row['password']; ?></th>
                <th><a href="/user/delete/id/<?php echo $row['id'];?>">Delete</a></th>
                <th><a href="/user/edit/id/<?php echo $row['id'];?>">Edit</a></th>
            </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>