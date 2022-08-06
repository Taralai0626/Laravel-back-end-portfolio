@extends('layout.console')

@section('content')

        <section class="w3-padding">

            <h2>Manage Education Entries</h2>

            <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
                <tr class="w3-red">
                    <th>Course Name</th>
                    <th>Institution Name</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th></th> <!-- 'Edit' button -->
                    <th></th> <!-- 'Delete' button -->
                </tr>
                <?php foreach($education as $education): ?>
                    <tr>
                        <td><?= $education->course_name ?></td>
                        <td><?= $education->institution_name ?></td>
                        <td><?= $education->description ?></td>
                        <td><?= $education->date ?></td>
                        <td><?= $education->created_at->format('M j, Y, G:i (T)') ?></td>
                        <td><?= $education->updated_at->format('M j, Y, G:i (T)') ?></td>
                        <!-- Documentation for format() is at https://www.php.net/manual/en/datetime.format.php -->
                        <td><a href="/console/education/edit/<?= $education->id ?>">Edit</a></td>
                        <td><a href="/console/education/delete/<?= $education->id ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/console/education/add" class="w3-button w3-green">Add New Education Entry</a>

        </section>

@endsection