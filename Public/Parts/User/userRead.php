<fieldset>
    <legend>Users page</legend>
    <a href="/hillel/admin/user/create">
        <button type="button" class="btn btn-primary">Create new user</button>
    </a>
    <a href="/hillel/admin/user/update">
        <button type="button" class="btn btn-primary">Update user</button>
    </a>
    <a href="/hillel/admin/user/delete">
        <button type="button" class="btn btn-primary">Delete user</button>
    </a>
    <form>
        <input name="id" type="hidden" value="<?= $data['id'] ?>">
    </form>
</fieldset>
