<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nama Pengguna</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <?php foreach ($viewModel as $pengguna): ?>
                <tr>
                    <td><?php echo $pengguna->nama ?></td>
                    <td><?php echo $pengguna->email ?></td>
                </tr>
            <?php endforeach ?>
        </tr>
    </tbody>
</table>
