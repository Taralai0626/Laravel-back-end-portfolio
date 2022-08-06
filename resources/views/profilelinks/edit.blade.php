@extends('layout.console')

@section('content')

        <section class="w3-padding">

            <h2>Edit Profile Link</h2>

            <form method="post" action="/console/profilelinks/edit/<?= $profilelink->id ?>" novalidate class="w3-margin-bottom">

                <?= csrf_field() ?>

                <div class="w3-margin-bottom">
                    <label for="name">Name:</label>
                    <input type="name" name="name" id="name" value="<?= old('name', $profilelink->name) ?>" required>
                    
                    <?php if($errors->first('name')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('name'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="url">URL:</label>
                    <input type="url" name="url" id="url" value="<?= old('url', $profilelink->url) ?>">

                    <?php if($errors->first('url')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('url'); ?></span>
                    <?php endif; ?>
                </div>


                <button type="submit" class="w3-button w3-green">Edit Profile Link</button>

            </form>

            <a href="/console/profilelinks/list">Back to Manage Profile Links</a>

        </section>

@endsection