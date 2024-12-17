<fieldset>
    <legend>Posts page</legend>
    <a href="/hillel/admin/post/create">
        <button type="button" class="btn btn-primary">Create new post</button>
    </a>
    <a href="/hillel/admin/post/update">
        <button type="button" class="btn btn-primary">Update post</button>
    </a>
    <a href="/hillel/admin/post/delete">
        <button type="button" class="btn btn-primary">Delete Post</button>
    </a>
    <form>
        <input name="id" type="hidden" value="<?= $data['id'] ?>">
    </form>
</fieldset>
