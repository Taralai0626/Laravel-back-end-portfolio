@extends('layout.console')

@section('content')

        <section class="w3-padding">

            <h2>Edit Project</h2>

            <form method="post" action="/console/projects/edit/<?= $project->id ?>" novalidate class="w3-margin-bottom">

                <?= csrf_field() ?>

                <div class="w3-margin-bottom">
                    <label for="title">Title:</label>
                    <input type="title" name="title" id="title" value="<?= old('title', $project->title) ?>" required>
                    
                    <?php if($errors->first('title')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('title'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="url">URL:</label>
                    <input type="url" name="url" id="url" value="<?= old('url', $project->url) ?>">

                    <?php if($errors->first('url')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('url'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="slug">Slug:</label>
                    <input type="text" name="slug" id="slug" value="<?= old('slug', $project->slug) ?>" required>

                    <?php if($errors->first('slug')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('slug'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="content">Content:</label>
                    <textarea name="content" id="content" required><?= old('content', $project->content) ?></textarea>

                    <?php if($errors->first('content')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('content'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="type_id">Type:</label>
                    <select name="type_id" id="type_id">
                        <option></option>
                        <?php foreach($types as $type): ?>
                            <option value="<?= $type->id ?>"
                                <?= $type->id == old('type_id', $project->type_id) ? 'selected' : '' ?>>
                                <?= $type->title ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if($errors->first('type_id')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('type_id'); ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="w3-button w3-green">Edit Project</button>

            </form>

            <a href="/console/projects/list">Back to Project List</a>

        </section>

@endsection