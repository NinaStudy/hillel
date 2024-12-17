<form method="POST" action="">
    <fieldset>
        <legend>Create Post</legend>
        <div class="col-sm-5">
            <label for="title" class="form-label mt-4">Title</label>
            <input name="title" class="form-control" id="title" placeholder="Enter the title"></input>
        </div>

        <div class="col-sm-5">
            <label for="writeYourPost" class="form-label mt-4">Post</label>
            <textarea name="text" class="form-control" id="writeYourPost" rows="4"
                      placeholder="Write your post"></textarea>
        </div>
        <div class="col-sm-5">
            <label for="postCategoryId" class="form-label mt-4">Post Category Id</label>
            <input name="postCategoryId" class="form-control" id="postCategoryId" placeholder="post Id"></input>
        </div>
        <div class="col-sm-5">
            <label for="userId" class="form-label mt-4">User Id</label>
            <input name="userId" class="form-control" id="userId" placeholder="user Id"></input>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </fieldset>
</form>