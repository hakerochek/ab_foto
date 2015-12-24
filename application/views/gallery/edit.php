<form action="/gallery/edit/id/<?php echo $data['id']; ?>" method="post">
    <div class="form-group">
        <label for="title">TITLE</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $data['title']; ?>"/>
    </div>
    <div class="form-group">
        <label for="description">description</label>
        <textarea name="description" class="form-control" rows="6" ><?php echo $data['description']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="img">img</label>
        <input type="file" class="form-control" id="img" name="img" value="<?php echo $data['img']; ?>">
    </div>
    <button type="submit" class="btn btn-default">Save</button>
</form>