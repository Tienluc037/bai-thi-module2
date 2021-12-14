
<table border="1px">
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>sectors</th>
    </tr>
    <?php if (isset($products) || !empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['id'] ?></td>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['sectors'] ?></td>
                <td><a onclick="return confirm('bạn có muốn xóa?')"
                       href="index.php?page=product-delete&id=<?php echo $product['id'] ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3"> Không có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>
