<form action="/article/update/id/<?php echo $data['id']; ?>" method="post">
    <div class="form-group">
        <label for="title">TITLE</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $data['title']; ?>">
    </div>
    <div class="form-group">
        <textarea name="text"><?php echo $data['text']; ?></textarea>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>