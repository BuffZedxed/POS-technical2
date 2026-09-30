<?= view('partials/header', ['pageTitle' => 'Customers', 'activePage' => 'customers']) ?>

<section class="page-heading">
    <p class="eyebrow">Customer accounts</p>
    <h1>Customers</h1>
    <p class="lead">A simple list of customer contact details.</p>
</section>

<section class="card list-card" aria-labelledby="customer-list-title">
    <div class="card-header">
        <h2 id="customer-list-title">Customer list</h2>
        <span class="count-label"><?= count($customers) ?> customers</span>
    </div>
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td class="name-cell"><?= esc($customer['name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= view('partials/footer') ?>
