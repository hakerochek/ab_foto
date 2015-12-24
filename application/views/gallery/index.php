<div class="row">
    <div class="col-md-12">
        <h1 class="title">Gallery</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>description</th>
                <th>img</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($row = $stmt->fetch()) : ?>
                <tr>
                    <th><?php echo $row['id']; ?></th>
                    <th><?php echo $row['title']; ?></th>
                    <th><?php echo $row['description']; ?></th>
                    <th><img src="../../images/gallery/<?php echo $row['img']; ?>" alt="1" class="img-thumbnail" width="50" height="50"></th>
                    <th><a href="/gallery/edit/id/<?php echo $row['id']; ?>">Edit</a></th>
                    <th><a href="/gallery/delete/id/<?php echo $row['id']; ?>">Delete</a></th>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</div>
<div class="tabbable tabs-left pull-right">
    <a class="btn btn-default btn-lg" href="/gallery/add"><span class="glyphicon glyphicon-plus"></span> Add</a>
</div>