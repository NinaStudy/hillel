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
                surname
            </td>
            <td>
                <input name="surname" placeholder="text" value="<?= $data['surname'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                email
            </td>
            <td>
                <input name="email" placeholder="email" value="<?= $data['email'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                phone
            </td>
            <td>
                <input name="phone" placeholder="phone" value="<?= $data['phone'] ?>">
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