<form action="/gallery/add" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">TITLE</label>
        <input type="text" class="form-control" id="title" name="title" value="">
    </div>
    <div class="form-group">
        <textarea name="description" class="form-control" rows="6" ></textarea>
    </div>
    <div class="form-group">
        <input type="file" name="img" class="form-control" rows="6" >
    </div>
    <button type="submit" class="btn btn-default">Add</button>
</form>