@extends('layout.console')

@section('content')

        <section class="w3-padding">

            <h2>Manage Profile Links</h2>

            <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
                <tr class="w3-red">
                    <th></th> <!-- Image -->
                    <th>Name</th>
                    <th>URL</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th></th> <!-- 'Image' edit image button -->
                    <th></th> <!-- 'Edit' button -->
                    <th></th> <!-- 'Delete' button -->
                </tr>
                <?php foreach($profilelinks as $profilelink): ?>
                    <tr>
                        <td>
                            <?php if($profilelink->image): ?>
                                <img src="<?= asset('storage/images/'.$profilelink->image) ?>" width="200">
                            <?php endif; ?>
                        </td>
                        <td><?= $profilelink->name ?></td>
                        <td>
                            <a href="/profilelink/<?= $profilelink->url ?>">
                                <?= $profilelink->url ?>
                            </a>
                        </td>
                        <td><?= $profilelink->created_at->format('M j, Y') ?></td>
                        <td><a href="/console/profilelinks/image/<?= $profilelink->id ?>">Image</a></td>
                        <td><a href="/console/profilelinks/edit/<?= $profilelink->id ?>">Edit</a></td>
                        <td><a href="/console/profilelinks/delete/<?= $profilelink->id ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/console/profilelinks/add" class="w3-button w3-green">Add New Profile Link</a>

        </section>

@endsection