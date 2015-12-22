<div class="row">
    <div class="col-md-12">
        <h1 class="title">Article list</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID </th>
                <th>TITLE</th>
                <th>TEXT</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php while ($row = $stmt->fetch()) : ?>
                <tr>
                    <th><?php echo $row['id']; ?></th>
                    <th><?php echo $row['title']; ?></th>
                    <th><?php echo $row['text']; ?></th>
                    <th><a href="/article/edit/id/<?php echo $row['id']; ?>">Edit</a></th>
                    <th><a href="/article/delete/id/<?php echo $row['id']; ?>">Delete</a></th>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</div>