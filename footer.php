<footer>
        <div class="footer_nav">
            <a class="footer_nav_item" href="/">Home</a>/<a class="footer_nav_item" href="/trainingen">Trainingen</a>/<a class="footer_nav_item" href="/tarieven">Tarieven</a>/<a class="footer_nav_item" href="/contact">Contact</a>
        </div>
        <div class="footer_icons">
            <span>
                <a href="https://www.facebook.com/Baseline2016/?ref=br_rs" target="_blank" class="facebook_link">
                    <i class="fa fa-facebook-square"></i>
                </a>
            </span>
        </div>
    </footer>

    </body>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>


    <script>
        $(document).ready(function(){
            $('.menu-toggle').click(function() {
                $('nav').toggleClass('active');
                $('#menu-icon').toggleClass('fa-times');
                $('#menu-icon').toggleClass('fa-bars');
            })
        })
        document.write(
            '<script src="http://' +
            (location.host || '${1:localhost}').split(':')[0] +
            ':${2:35729}/livereload.js?snipver=1"></' +
            'script>'
        );
</script>
</html>