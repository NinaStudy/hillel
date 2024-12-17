<fieldset>
    <legend>Gallery page</legend>
    <a href="/hillel/admin/gallery/create">
        <button type="button" class="btn btn-primary">Create Gallery</button>
    </a>
    <a href="/hillel/admin/gallery/update">
        <button type="button" class="btn btn-primary">Update Gallery</button>
    </a>
    <a href="/hillel/admin/gallery/delete">
        <button type="button" class="btn btn-primary">Delete Gallery</button>
    </a>
    <form>
        <input name="id" type="hidden" value="<?= $data['id'] ?>">
    </form>
</fieldset>