<fieldset>
    <legend>Post category page</legend>
    <a href="/hillel/admin/postCategory/create">
        <button type="button" class="btn btn-primary">Create new post category</button>
    </a>
    <a href="/hillel/admin/postCategory/update">
        <button type="button" class="btn btn-primary">Update post category</button>
    </a>
    <a href="/hillel/admin/postCategory/delete">
        <button type="button" class="btn btn-primary">Delete post category</button>
    </a>
    <form>
        <input name="id" type="hidden" value="<?= $data['id'] ?>">
    </form>
</fieldset>
