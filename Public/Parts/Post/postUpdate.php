<form method="POST" action="">
    <fieldset>
        <legend>Update Post</legend>
        <div class="col-sm-5">
            <label for="title" class="form-label mt-4">Edit title</label>
            <input name="title" class="form-control" id="title" placeholder="Enter your title"></input>
        </div>

        <div class="col-sm-5">
            <label for="editPost" class="form-label mt-4">Edit Post</label>
            <textarea name="text" class="form-control" id="editPost" rows="4" placeholder="Edit your post"></textarea>
        </div>
        <div class="col-sm-5">
            <label for="postCategoryId" class="form-label mt-4">Post Category Id</label>
            <input name="postCategoryId" class="form-control" id="postCategoryId" placeholder="post Id"></input>
        </div>
        <div class="col-sm-5">
            <label for="userId" class="form-label mt-4">User Id</label>
            <input name="userId" class="form-control" id="userId" placeholder="user Id"></texta>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </fieldset>
</form>
