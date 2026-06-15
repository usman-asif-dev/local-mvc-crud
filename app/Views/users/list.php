<?= $this->include('layout/header') ?>
<h2>User List</h2>

<a href="<?= base_url('user/create') ?>" class="btn-add">Add User</a>

<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    <?php foreach($users as $user): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['name'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>
            <a href="<?= base_url('user/edit/'.$user['id']) ?>" class="btn-edit">Edit</a>

            <a href="<?= base_url('user/delete/'.$user['id']) ?>" class="btn-delete">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?= $this->include('layout/footer') ?>
