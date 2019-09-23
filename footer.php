<footer>
        <div class="footer_nav">
            <a class="footer_nav_item" href="index.php">Home</a>/<a class="footer_nav_item" href="trainingen.php">Trainingen</a>/<a class="footer_nav_item" href="tarieven.php">Tarieven</a>/<a class="footer_nav_item" href="contact.php">Contact</a>
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
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <script>
        $(document).ready(function(){
            $('.menu-toggle').click(function() {
                $('nav').toggleClass('active');
                $('#menu-icon').toggleClass('fa-times');
                $('#menu-icon').toggleClass('fa-bars');
            });
            
            $('.count').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).delay(400).animate({ Counter: $this.attr('data-stop') }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                    this.text(Math.ceil(now));
                    }
                });
            });
        });
</script>

</html>