<form>
    <input name="id" type="hidden" value="<?= $data['id'] ?>">
    <table>
        <tr>
            <td>
                title
            </td>
            <td>
                <input name="title" placeholder="text" value="<?= $data['title'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                text
            </td>
            <td>
                <input name="text" placeholder="text" value="<?= $data['text'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                postCategoryId
            </td>
            <td>
                <input name="postCategoryId" placeholder="int" value="<?= $data['postCategoryId'] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">
                    save
                </button>
            </td>
        </tr>
    </table>
</form>
