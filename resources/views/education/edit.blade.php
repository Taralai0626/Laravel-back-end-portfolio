@extends('layout.console')

@section('content')

        <section class="w3-padding">

            <h2>Edit Education Entry</h2>

            <form method="post" action="/console/education/edit/<?= $education->id ?>" novalidate class="w3-margin-bottom">

                <?= csrf_field() ?>

                <div class="w3-margin-bottom">
                    <label for="course_name">Course Name:</label>
                    <input type="text" name="course_name" id="course_name" value="<?= old('course_name', $education->course_name) ?>" required>
                    
                    <?php if($errors->first('course_name')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('course_name'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for=institution_name">Institution Name:</label>
                    <input type="text" name="institution_name" id="institution_name" value="<?= old('institution_name', $education->institution_name) ?>" required>
                    
                    <?php if($errors->first('institution_name')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('institution_name'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for=description">Description:</label>
                    <input type="text" name="description" id="description" value="<?= old('description', $education->description) ?>" required>
                    
                    <?php if($errors->first('description')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('description'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for=date">Date Enrolled:</label>
                    <input type="date" name="date" id="date" value="<?= old('date', $education->date) ?>" required>
                    
                    <?php if($errors->first('description')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('description'); ?></span>
                    <?php endif; ?>
                </div>


                <button type="submit" class="w3-button w3-green">Edit Education Entry</button>

            </form>

            <a href="/console/education/list">Back to Manage Education Entries</a>

        </section>

@endsection