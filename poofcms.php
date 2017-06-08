<?php include_once 'includes/header.php'; ?>

<div id="poofcms" class="row">
    <div class="col-xs-12">
        <h1>POOFCMS</h1>
        <a id="link" href="http://courage-series.cribellum.ru">See live <span class="glyphicon glyphicon-link" aria-hidden="true"></span></a>        
    </div>
    <div id="description" class="col-xs-12">
        <p>POOFCMS is a flat-file cms, which means it does not use a database. All your info is being stored in the html files.</p> 
        <p>What is it for? You can use this cms for blogging,
            maintaining simple info site, or creating small company website. If you are familiar with codeigniter, or just php, you can use it as a start,
        and then make whatever you can think of.</p>  
        <p>What you can do:</p>
        <ul>
            <li>Create pages and posts (as well as update and delete them). Now, here is a strange feature, and I didn't decide whether it's nice thing or 
            not: You can press edit on your post, then rename it, and click save, now you have a full copy of this post, if you didn't touch the content.</li>
            <li>Upload files. This part is pretty raw, you can upload an image, but if you need it in your post (of course you do), you will need to 
            add it as a link in you post editor, there is no fancy media manager at the moment.</li>
            <li>Change menu. If you want to add new item, put it in the empty inputs at the end of the items list, when you click save, this item will be added and
                new empty fields will appear</li>
            <li>Choose between the blog page, or static page as your home page.</li>
            <li>Add and delete categories</li>
            <li>Change what is written in header, footer, heading of your home page, etc.</li>
            <li>Edit styles</li>
            <li>Change themes: Find s bootstrap theme on the internet or go in here, for example - https://bootswatch.com/ and scroll to the free
            themes. Choose one, press download, copy the code and simply replace what's inside of your bootstrap.min.css with what you just copied</li>
        </ul>
        <p>Installing:</p>
        <ol>
            <li>Download the poofcms from github and upload to your server</li>
            <li>Go to the yoursite/application/config/constants.php</li>
            <li>Change at the bottom of the file define('username', 'admin'); and define('password', 'admin1'); to the username and password you want</li>
            <li>Change define('PRE_INDEX_URL', "http://your_url_until_index_here"); replacing the part http://your_url_until_index_here with 
            an url of your site until 'index.php' part, don't forget to include '/' at the end</li>
            <li>Nothing more, just go to the http://your_site/index.php/admin and do what you want!</li>
        </ol>
        <p>Features are:</p>
        <ul>
            <li>Super fast installing</li>
            <li>Simple to use</li>
            <li>Fast, because not relying on databases</li>
            <li>Secure, there is no place for sql-injections</li>
            <li>Easy to transfer (again, no db)</li>
            <li>Easy for version control (yep, look upper)</li>
            <li>Made with codeigniter and bootstrap so is highly extendable</li>
        </ul>
    </div>  
    <div id="tecs" class="col-xs-12">
        Other than pretty standard PHP, HTML, CSS, jQuery, this project uses:
        <div class="row">
            <div class="col-xs-6 text-center">
                <img src="img/ci.png" />
            </div>
            <div class="col-xs-6 text-center">
                <img src="img/bootstrap.png" />
            </div>
        </div>
    </div>
    <div id="github" class="col-xs-12 text-center">
        <a href="https://github.com/GarbageKing/POOFCMS">See on Github <i class="fa fa-github-alt fa-5x" aria-hidden="true"></i></a>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>

