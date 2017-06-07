<?php include_once 'includes/header.php'; ?>

<div id="bugtracktor" class="row">
    <div class="col-xs-12">
        <h1>Bugtracktor</h1>
        <a id="link" href="bugtracktor.cribellum.ru">See live <span class="glyphicon glyphicon-link" aria-hidden="true"></span></a>        
    </div>
    <div id="description" class="col-xs-12">
        <p>Bugtracktor is a simple bug tracking system, where you can:</p>
        <ul>
            <li>Maintain a project: It assigns you automatically to the project when you created it, and you are marked as creator 
                (creators always shown first in the attached users list); Update project's name, Delete project, Attach and Detach users 
                (these all work when you are marked as creator)</li>
            <li>Maintain an issue (must be attached to a project): It assigns you automatically to the issue when you created it, and you are marked as 
                creator (creators always shown first in the attached users list); Update an issue, Delete an issue, Attach and Detach users 
                (these all work when you are marked as creator); Update an issue when you are not creator (you need to be attached though)</li>
            <li>Open and close issues through update, they will be faded in the grid, if closed.</li>
            <li>Set deadlines (They will be highlighted red three days before the final date)</li>
            <li>Create an issue as a bug or task with three priorities each</li>
            <li>Update your username, email or password anytime</li>
        </ul>
        <p>Features are:</p>
        <ul>
            <li>Simple to use</li>
            <li>Simple in terms of design (so your screen is not overloaded with elements)</li>
            <li>Fast enough</li>
        </ul>
    </div>    
</div>

<?php include_once 'includes/footer.php'; ?>

