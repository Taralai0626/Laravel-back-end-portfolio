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
                @foreach($profilelinks as $profilelink)
                    <tr>
                        <td>
                            @if($profilelink->image)
                                <img src="{{$profilelink->image}} width="200">
                            @endif
                        </td>
                        <td><?= $profilelink->name ?></td>
                        <td>
                            <a href="<?= $profilelink->url ?>">
                                <?= $profilelink->url ?>
                            </a>
                        </td>
                        <td><?= $profilelink->created_at->format('M j, Y, G:i (T)') ?></td>
                        <td><?= $profilelink->updated_at->format('M j, Y, G:i (T)') ?></td>
                        <!-- Documentation for format() is at https://www.php.net/manual/en/datetime.format.php -->
                        <td><a href="/console/profilelinks/image/<?= $profilelink->id ?>">Image</a></td>
                        <td><a href="/console/profilelinks/edit/<?= $profilelink->id ?>">Edit</a></td>
                        <td><a href="/console/profilelinks/delete/<?= $profilelink->id ?>">Delete</a></td>
                    </tr>
                @endforeach
            </table>

            <a href="/console/profilelinks/add" class="w3-button w3-green">Add New Profile Link</a>

        </section>

@endsection