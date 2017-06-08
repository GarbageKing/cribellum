</div>
<footer>
    <div class="container">
        <p class="text-center">© Denys Vovchenko (Garbage_kinG) 2017</p>
    </div>
</footer>   

<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
            
        $('ul.navbar-nav li').removeClass('active');
        
        var path = window.location.pathname;
        
        if(path.indexOf('.php') == -1)
        path = 'index.php';
                
        $('ul.navbar-nav li a').each(function(){
            
        if (path.indexOf($(this).attr('href')) >= 0)
        {            
            $(this).parent().addClass('active');
        }
            
        });        
        
    });
</script>
    </body>
</html>


