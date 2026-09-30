<?= view('partials/header', ['pageTitle' => 'Users', 'activePage' => 'users']) ?>

<section class="page-heading">
    <p class="eyebrow">User accounts</p>
    <h1>Users</h1>
    <p class="lead">People and roles in the POS system.</p>
</section>

<section class="card list-card" aria-labelledby="user-list-title">
    <div class="card-header">
        <h2 id="user-list-title">User list</h2>
        <span class="count-label"><?= count($users) ?> users</span>
    </div>
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td class="name-cell"><?= esc($user['username']) ?></td>
                        <td><?= esc($user['name']) ?></td>
                        <td><span class="role-label"><?= esc($user['role']) ?></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= view('partials/footer') ?>
