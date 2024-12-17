<form method="POST" action="">
    <fieldset>
        <legend>Update Post category</legend>
        <div class="col-sm-5">
            <label for="title" class="form-label mt-4">Edit title</label>
            <input name="title" class="form-control" id="title" placeholder="Enter the title"></input>
        </div>

        <div class="col-sm-5">
            <label for="editPostCategory" class="form-label mt-4">Edit Post category</label>
            <input name="text" class="form-control" id="editPostCategory" placeholder="Edit your post category"></input>
        </div>
        <div class="col-sm-5">
            <label for="postCategoryId" class="form-label mt-4">Post Category Id</label>
            <input name="postCategoryId" class="form-control" id="postCategoryId"
                   placeholder="Post category Id"></input>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </fieldset>
</form>