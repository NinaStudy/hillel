<h2> This is Gallery page</h2>
<a href="/hillel/Admin/Gallery/create">
    Create
</a>
<table>
    <tr>
        <th>
            id
        </th>
        <th>
            name
        </th>
        <th>
            image
        </th>
        <th>
            categoryName
        </th>
        <th>
            categoryId
        </th>
        <th>
            Update
        </th>
        <th>
            Delete
        </th>
    </tr>
    <?php foreach ($data as $galleryItem): ?>
        <tr>
            <td>
                <?= $galleryItem['id'] ?>
            </td>
            <td>
                <?= $galleryItem['name'] ?>
            </td>
            <td>
                <?= $galleryItem['image'] ?>
            </td>
            <td>
                <?= $galleryItem['categoryName'] ?>
            </td>
            <td>
                <?= $galleryItem['categoryId'] ?>
            </td>
            <td>
                <a href="/hillel/Admin/Gallery/update?id=<?= $galleryItem['id'] ?>">
                    Update
                </a>
            </td>
            <td>
                <a href="/hillel/Admin/Gallery/delete?id=<?= $galleryItem['id'] ?>">
                    Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>