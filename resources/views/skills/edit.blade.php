@extends('layout.console')

@section('content')

        <section class="w3-padding">

            <h2>Edit Skill</h2>

            <form method="post" action="/console/skills/edit/<?= $skill->id ?>" novalidate class="w3-margin-bottom">

                <?= csrf_field() ?>

                <div class="w3-margin-bottom">
                    <label for="title">Title:</label>
                    <input type="title" name="title" id="title" value="<?= old('title', $skill->title) ?>" required>
                    
                    <?php if($errors->first('title')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('title'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="url">URL:</label>
                    <input type="url" name="url" id="url" value="<?= old('url', $skill->url) ?>">

                    <?php if($errors->first('url')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('url'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="slug">Slug:</label>
                    <input type="text" name="slug" id="slug" value="<?= old('slug', $skill->slug) ?>" required>

                    <?php if($errors->first('slug')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('slug'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="percent">Percent:</label>
                    <textarea name="percent" id="percent" required><?= old('content', $skill->percent) ?></textarea>

                    <?php if($errors->first('percent')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('percent'); ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="w3-button w3-green">Edit Skill</button>

            </form>

            <a href="/console/skills/list">Back to Skill List</a>

        </section>

@endsection