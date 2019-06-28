<?php include 'header.php' ?>

    <div class="contentContainer">

        <div class="gridContainer">
            <div class="omschrijving">
                <h3 class="contactMe">Heeft u een vraag?</h3>

                <p>Zit u bijvoorbeeld nog erg te twijfelen of Bootcamp wel echt iets voor u is. Of zit u op dit moment met klachten en ben je benieuwd of ik u daar mee kan helpen tijdens de Bootcamp. </p>
                <p>Neem dan contact met me op door middel van het contact formulier, dan krijgt u zo snel mogelijk reactie!</p>

                <div class="contact_img">
                    <img src="img/img-01.png" alt="">
                </div>
            </div>
            <div class="formulier">
                <form>
                    <h3 class="contactMe">Neem contact op</h3>

                    <div class="input_1_wrapper">
                        <input type="text" name="FullName" placeholder="Volledige Naam" class="input_1">
                    </div>

                    <div class="input_1_wrapper">
                        <input type="email" name="Email" placeholder="Email adress" class="input_1">
                    </div>

                    <div class="input_1_wrapper">
                        <input type="tel" name="Tel" placeholder="Telefoon Nummer" class="input_1">
                    </div>
                    
                    <div class="input_1_wrapper">
                        <textarea name="Message" placeholder="Uw bericht" class="input_1"></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Verstuur</button>
                </form>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function(){

            $('.contact').addClass('active');
        });
    </script>

<?php include 'footer.php' ?>