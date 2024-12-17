<form method="POST" action="">
    <fieldset>
        <legend>Create Gallery</legend>
        <div class="col-sm-5">
            <label for="name" class="form-label mt-4">Name</label>
            <input name="name" class="form-control" id="name" placeholder="Enter your name"></textarea>
        </div>
        <div class="col-sm-5">
            <label for="image" class="form-label mt-4">Image</label>
            <input name="image" class="form-control" id="image" placeholder="Select image"></input>
        </div>
        <div class="col-sm-5">
            <label for="categoryName" class="form-label mt-4">Category name</label>
            <input name="categoryName" class="form-control" id="categoryName" placeholder="Category name"></input>
        </div>
        <div class="col-sm-5">
            <label for="categoryId" class="form-label mt-4">Category Id</label>
            <input name="categoryId" class="form-control" id="categoryId" placeholder="Category Id"></input>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </fieldset>
</form>