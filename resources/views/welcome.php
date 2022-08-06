
<?= view('layout.header') ?>

<section class="w3-padding">

    <section class="w3-padding w3-container">

    <h2 class="w3-text-blue">About Me!</h2>

    <?php foreach($abouts as $about): ?>

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3><?= $about->title ?></h3>

            </div>
            
            <?php if($about->image): ?>
                <div class="w3-container w3-margin-top">
                    <img src="<?= asset('storage/'.$about->image) ?>" width="200">
                </div>
            <?php endif; ?>

            <div class="w3-container w3-padding">
            <h3><?= $about->content ?></h3>
               
            </div>
        

        </div>

    <?php endforeach; ?>

</section>

    <h3>My Skills</h3>

    <ul>
        <li>PHP</li>
        <li>Laravel</li>
        <li>MySQL</li>
    </ul>

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Projects</h2>

    <?php foreach($projects as $project): ?>

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3><?= $project->title ?></h3>

            </div>
            
            <?php if($project->image): ?>
                <div class="w3-container w3-margin-top">
                    <img src="<?= asset('storage/'.$project->image) ?>" width="200">
                </div>
            <?php endif; ?>

            <div class="w3-container w3-padding">

                <?php if($project->url): ?>
                    View Project: <a href="<?= $project->url ?>"><?= $project->url ?></a>
                <?php endif; ?>

                <p>
                    Posted: <?= $project->created_at->format('M j, Y') ?>
                    <br>
                    Type: <?= $project->type->title ?>
                </p>

                <a href="/project/<?= $project->slug ?>" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    <?php endforeach; ?>

</section>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Skills</h2>

    <?php foreach($skills as $skill): ?>

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3><?= $skill->title ?></h3>

            </div>
            
            <?php if($skill->image): ?>
                <div class="w3-container w3-margin-top">
                    <img src="<?= asset('storage/'.$skill->image) ?>" width="200">
                </div>
            <?php endif; ?>

            <div class="w3-container w3-padding">

                <?php if($skill->url): ?>
                    View Project: <a href="<?= $skill->url ?>"><?= $skill->url ?></a>
                <?php endif; ?>

            </div>
        
        </div>

    <?php endforeach; ?>

</section>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Résumé</h2>

    <?php foreach($education as $education): ?>

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3><?= $education->course_name ?></h3>

            </div>

            <div class="w3-container w3-blue-grey">

                <p><?= $education->institution_name ?></p>
                <p><?= $education->description ?></p>
                <p><?= $education->date ?></p>

            </div>
        
        </div>

    <?php endforeach; ?>

</section>

<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue">Contact Me</h2>

    <p>
        Phone: 111.222.3333
        <br>
        Email: <a href="mailto:email@address.com">email@address.com</a>
    </p>

    <!-- Displays profile links (ex. GitHub, LinkedIn, etc) from database. -->
    <?php foreach($profilelinks as $profilelink): ?>
        <!-- Profile Links -->
        <a href="<?= $profilelink->url ?>" class="profile-link">
            <!-- Show profile link icon (ex. GitHub icon). -->
            <?php if($profilelink->image): ?>
                <img src="<?= asset('storage/images/'.$profilelink->image) ?>" width="200">
            <?php endif; ?>
            <!-- Show profile link name. -->
            <?= $profilelink->name ?>
        </a>
    <?php endforeach; ?>

</section>

<?= view('layout.footer') ?>
