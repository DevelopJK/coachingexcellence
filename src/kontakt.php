<?php
    include './-hlavicka.php';
?>

                <div id="kontakt" class="section-full">
                    <div class="sub-section-bgr-text">
                        <h2 id="kontakt">KONTAKT</h2>

                    </div>
                    <div class="section-text-kontakt">

                          <div id='container'>


<div id='form'>
<form>

 <input type='text' name='name' placeholder='Jméno' />
 <!--<label class='error' id='name_error'>Vyplňte prosím Vaše jméno</label>-->

 <input type='text' name='email' placeholder='E-mail *' />
 <label class='error' id='email_error'>Vyplňte prosím Váš E-mail</label>

 <textarea placeholder='Text zprávy *' name='message' id="napiste-zpravu"></textarea>
 <label class='error' id='message_error'>Napište zprávu</label>

 <input type='hidden' name='ip' value='<?php echo $_SERVER['REMOTE_ADDR'] ?>'/>
 <input type='submit' value='Odeslat' class='submit' />

 <span>Položky označene * jsou požadovány</span>
 

</form>
</div>
</div>
                        <div style="margin-top: 3em">
                            <p><b>Mgr. Jana Kroupová</b></p>

<p>Telefon: +420 602 44 20 21<br>
jana@coachingexcellence.cz<br>
www.coachingexcellence.cz<br>
cz.linkedin.com/in/janakroupova/<br>
</p>

<p>Koučovna se nachází v Praze 9 - Vinoři</p>


                     
                        </div>
                        <p id="position-icon"><a href="http://cz.linkedin.com/in/janakroupova" target=""><img src="images/LinkedIn.png"></a>                       
    <a href="https://www.facebook.com/pages/Coaching-excellence/288989827919514?fref=ts" float="right"><img src="images/Facebook.png"></a>

<img src="images/Skype.png">&nbsp;&nbsp;coaching.excellence</p>

                        

                        

</div>








                    </div>
                </div>

                
                

            </div>
                 <?php
    include './-paticka.php';
?>
        </div>
        
        
    </body>
</html>
