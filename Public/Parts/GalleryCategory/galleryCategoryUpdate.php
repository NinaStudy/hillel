<form>
    <input name="id" type="hidden" value="<?= $data['id'] ?>">
    <table>
        <tr>
            <td>
                name
            </td>
            <td>
                <input name="name" placeholder="text" value="<?= $data['name'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                image
            </td>
            <td>
                <input name="image" placeholder="text" value="<?= $data['image'] ?>">
            </td>
        </tr>
        <td colspan="2">
            <button type="submit">
                save
            </button>
        </td>
        </tr>
    </table>
</form>
