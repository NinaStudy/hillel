<fieldset>
    <legend>Gallery category page</legend>
    <a href="/hillel/admin/galleryCategory/create">
        <button type="button" class="btn btn-primary">Create Gallery category</button>
    </a>
    <a href="/hillel/admin/galleryCategory/update">
        <button type="button" class="btn btn-primary">Update Gallery category</button>
    </a>
    <a href="/hillel/admin/galleryCategory/delete">
        <button type="button" class="btn btn-primary">Delete Gallery category</button>
    </a>
    <form>
        <input name="id" type="hidden" value="<?= $data['id'] ?>">
    </form>
</fieldset>