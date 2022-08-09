@extends('layout.console')

@section('content')

        <section class="w3-padding">

            <h2>Manage Skills</h2>

            <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
                <tr class="w3-red">
                    <th></th>
                    <th>Title</th>
                    <th>Url</th>
                    <th>Percent</th>
                    <th>Type</th>
                    <th>Created</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($skills as $skill): ?>
                    <tr>
                        <td>
                            <?php if($skill->image): ?>
                                <img src="<?= asset('storage/'.$skill->image) ?>" width="200">
                            <?php endif; ?>
                        </td>
                        <td><?= $skill->title ?></td>
                        <td><a href="<?= $skill->url ?>"><?= $skill->url ?></a></td>
                        <td><?= $skill->percent ?></td>
                        <td><?= $skill->created_at->format('M j, Y') ?></td>
                        <td><a href="/console/skills/image/<?= $skill->id ?>">Image</a></td>
                        <td><a href="/console/skills/edit/<?= $skill->id ?>">Edit</a></td>
                        <td><a href="/console/skills/delete/<?= $skill->id ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/console/skills/add" class="w3-button w3-green">New Skill</a>

        </section>

@endsection