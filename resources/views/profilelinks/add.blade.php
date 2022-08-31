@extends('layout.console')

@section('content')

        <section class="w3-padding">

            <h2>Add Profile Link</h2>

            <form method="post" action="/console/profilelinks/add" novalidate class="w3-margin-bottom">

                <?= csrf_field() ?>

                <div class="w3-margin-bottom">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="<?= old('name') ?>" required>
                    
                    <?php if($errors->first('name')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('name'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="url">URL:</label>
                    <input type="text" name="url" id="url" value="<?= old('url') ?>">

                    <?php if($errors->first('text')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('text'); ?></span>
                    <?php endif; ?>
                </div>


                <button type="submit" class="w3-button w3-green">Add Profile Link</button>

            </form>

            <a href="/console/profilelinks/list">Back to Manage Profile Link</a>

        </section>

@endsection