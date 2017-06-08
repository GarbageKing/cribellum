<?php include_once 'includes/header.php'; ?>

<div id="snippety" class="row">
    <div class="col-xs-12">
        <h1>Snippety[ ]</h1>
        <a id="link" href="http://snippety.cribellum.ru/">See live <span class="glyphicon glyphicon-link" aria-hidden="true"></span></a>        
    </div>
    <div id="description" class="col-xs-12">
        <p>Snippety[] is a minimalistic service for storing and sharing code snippets</p>
        <p>What you can do: </p>
        <ul>
            <li>Create a snippet, then, ofcourse, update or delete it, set this snippet as private, so only you will be able to see it, or public,
            in which case everyone will be able to see it. For creating snippets user must be signed in.</li>
            <li>Comment or like/dislike a snippet (requires sign in). Code is highlighted with highlight.js</li>            
            <li>Like/dislike a comment (requires sign in)</li>
            <li>Share snippets with social buttons</li>            
        </ul>        
    </div>  
    <div id="tecs" class="col-xs-12">
        Other than pretty standard PHP, MySql, HTML, CSS, jQuery, this project uses:
        <div class="row">
            <div class="col-xs-6 text-center">
                <img src="img/yii2.png" />
            </div>
            <div class="col-xs-6 text-center">
                <img src="img/bootstrap.png" />
            </div>
        </div>
    </div>
    <div id="github" class="col-xs-12 text-center">
        <a href="https://github.com/GarbageKing/snippety">See on Github <i class="fa fa-github-alt fa-5x" aria-hidden="true"></i></a>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>

