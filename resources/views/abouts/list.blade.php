@extends('layout.console')

@section('content')

    <section class="w3-padding">

      <h2>Manage Abouts</h2>

      <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Title</th>
            <th>Content</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($abouts as $about): ?>
          <tr>
            <td>
              <?php if($about->image): ?>
                <img src="<?= asset('storage/'.$about->image) ?>" width="200">
              <?php endif; ?>
            </td>
            <td><?= $about->title ?></td>
            <td><?= $about->content ?></td>
            <td><?= $about->created_at->format('M j, Y') ?></td>
            <td><a href="/console/abouts/image/<?= $about->id ?>">Image</a></td>
            <td><a href="/console/abouts/edit/<?= $about->id ?>">Edit</a></td>
            <td><a href="/console/abouts/delete/<?= $about->id ?>">Delete</a></td>
          </tr>
        <?php endforeach; ?>
      </table>

      <a href="/console/abouts/add" class="w3-button w3-green">New About</a>

    </section>

@endsection