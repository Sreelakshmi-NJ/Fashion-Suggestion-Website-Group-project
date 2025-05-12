<?php

include 'top_menu.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Shades!</title>
    <link rel="stylesheet" href="newstyles.css">
<script type="text/javascript" ></script>
<body>
    <div class="quiz-container">
        <h1 class="calligraphic-heading">Find Your Shades!</h1>
        <h4 class="sub-heading">A Seasonal Colour Analysis</h4>
        
        <form action="clrresult.php" method="post">

            <!-- Question 1 -->
            <div class="question">
                <br><br><p><strong> What color are your eyes?</strong></p>
                
                <div class="options">
                    <label><input type="radio" name="q1" value="Brown-Black"> Brown-Black</label>
                    <label><input type="radio" name="q1" value="Brown"> Brown</label>
                    <label><input type="radio" name="q1" value="Light Brown"> Light Brown</label>
                    <label><input type="radio" name="q1" value="Bright Blue"> Bright Blue</label>
                    <label><input type="radio" name="q1" value="Soft Blue"> Soft Blue</label>
                    <label><input type="radio" name="q1" value="Light Blue"> Light Blue</label>
                    <label><input type="radio" name="q1" value="Dark Blue"> Dark Blue</label>
                    <label><input type="radio" name="q1" value="Deep Hazel"> Deep Hazel</label>
                    <label><input type="radio" name="q1" value="Light Green"> Light Green</label>
                    <label><input type="radio" name="q1" value="Bright Green"> Bright Green</label>
                    <label><input type="radio" name="q1" value="Clear Green"> Clear Green</label>
                    <label><input type="radio" name="q1" value="Deep Green"> Deep Green</label>
                    <label><input type="radio" name="q1" value="Light Hazel"> Light Hazel</label>
                    <label><input type="radio" name="q1" value="Bright Hazel"> Bright Hazel</label>
                    <label><input type="radio" name="q1" value="Light Gray"> Light Gray</label>
                    <label><input type="radio" name="q1" value="Soft Gray"> Soft Gray (muted tone)</label>
                    <label><input type="radio" name="q1" value="Cool Gray"> Cool Gray (bright and clear)</label>
                    <label><input type="radio" name="q1" value="Deep Gray"> Deep Gray</label>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question">
               <br><br> <p><strong> What is your natural hair color?</strong></p>
     
                <div class="options">
                    <label><input type="radio" name="q2" value="Light Blonde"> Light Blonde</label>
                    <label><input type="radio" name="q2" value="Medium to Dark Blonde"> Medium to Dark Blonde</label>
                    <label><input type="radio" name="q2" value="Ashy Blonde"> Ashy Blonde</label>
                    <label><input type="radio" name="q2" value="Ashy Light Brown"> Ashy Light Brown</label>
                    <label><input type="radio" name="q2" value="Medium to Dark Ashy Brown"> Medium to Dark Ashy Brown</label>
                    <label><input type="radio" name="q2" value="Black with Blue Undertones"> Black with Blue Undertones</label>
                    <label><input type="radio" name="q2" value="Black with Warm Undertones"> Black with Warm Undertones</label>
                    <label><input type="radio" name="q2" value="Medium to Dark Brown (Cool/Blue Undertones)"> Medium to Dark Brown (Cool/Blue Undertones)</label>
                    <label><input type="radio" name="q2" value="Medium to Dark Brown (Warm/Golden Shine)"> Medium to Dark Brown (Warm/Golden Shine)</label>
                    <label><input type="radio" name="q2" value="Bright Golden Brown"> Bright Golden Brown</label>
                    <label><input type="radio" name="q2" value="Light Brown"> Light Brown</label>
                    <label><input type="radio" name="q2" value="Medium Brown"> Medium Brown</label>
                    <label><input type="radio" name="q2" value="Light Golden Blonde"> Light Golden Blonde</label>
                    <label><input type="radio" name="q2" value="Golden Blonde"> Golden Blonde</label>
                    <label><input type="radio" name="q2" value="Strawberry Blonde"> Strawberry Blonde</label>
                    <label><input type="radio" name="q2" value="Platinum Blonde"> Platinum Blonde</label>
                    <label><input type="radio" name="q2" value="Pale Copper"> Pale Copper</label>
                    <label><input type="radio" name="q2" value="Red"> Red</label>
                    <label><input type="radio" name="q2" value="Warm Auburn"> Warm Auburn</label>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question">
               <br><br> <p><strong> What is your skin undertone?</strong></p>
                <p style="font-size: 18px;" class="instruction"><i>Identify your undertone by checking the color of your veins. <br> (Greenish veins: Warm undertone,
                    Bluish or purplish veins: Cool undertone, Mix of green and blue veins: Neutral undertone)</i></p>
                <div class="options">
                    <label><input type="radio" name="q3" value="Cool"> Cool</label>
                    <label><input type="radio" name="q3" value="Warm"> Warm</label>
                    <label><input type="radio" name="q3" value="Neutralc"> Neutral-Cool</label>
                    <label><input type="radio" name="q3" value="Neutralw"> Neutral-Warm</label>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question">
                <br><br>
		<p><strong> Which best describes your skin tone?</strong></p>
                <div class="skin-tone"> 
                    <label>
                        <input type="radio" name="skin-tone" value="Cool Porcelain" id="cool-porcelain-clear">
                        <span class="color-swatch" style="background-color: #F4E1D9;"></span><b>Cool Porcelain:</b> Very fair skin with a clear, cool undertone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Bright Cool Ivory" id="bright-cool-ivory">
                        <span class="color-swatch" style="background-color: #EDE8E2;"></span><b>Bright Cool Ivory:</b> Light skin with a bright, cool ivory tone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Fair Warm" id="fair-warm">
                        <span class="color-swatch" style="background-color: #F5E3D1;"></span><b>Fair Warm:</b> Light skin with warm, clear undertones.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Warm Ivory" id="warm-ivory">
                        <span class="color-swatch" style="background-color: #F5E3D1;"></span><b>Warm Ivory:</b> Light skin with a warm, golden undertone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Fair Peachy Ivory" id="fair-peachy-ivory">
                        <span class="color-swatch" style="background-color: #F9D8D3;"></span><b>Fair Peachy Ivory:</b> Very fair skin with a soft, peachy undertone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Light Golden Beige" id="light-golden-beige">
                        <span class="color-swatch" style="background-color: #F4C8A1;"></span><b>Light Golden Beige:</b> Light skin with a soft, golden undertone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Creamy Beige" id="creamy-beige">
                        <span class="color-swatch" style="background-color: #E9D8C1;"></span><b>Creamy Beige:</b> Light to medium skin with a creamy, warm tone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Warm Peach" id="warm-peach">
                        <span class="color-swatch" style="background-color: #F7C4A2;"></span><b>Warm Peach:</b> Light to medium skin with a warm, peachy glow.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Cool Beige" id="cool-beige">
                        <span class="color-swatch" style="background-color: #d7cfc4;"></span><b>Cool Beige:</b> Light to medium skin with a cool, beige undertone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Soft Cool Tan" id="soft-cool-tan">
                        <span class="color-swatch" style="background-color: #B8A4A7;"></span><b>Soft Cool Tan:</b> Medium skin with a soft, cool tan tone.
                    </label>            
                    <label>
                        <input type="radio" name="skin-tone" value="Soft Peach Beige" id="soft-peach-beige">
                        <span class="color-swatch" style="background-color: #F7C4A2;"></span><b>Soft Peach Beige:</b> Light to medium skin with a soft, warm peach beige undertone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Light Peachy Beige" id="light-peachy-beige">
                        <span class="color-swatch" style="background-color: #F5B4A1;"></span><b>Light Peachy Beige:</b> Medium skin with a light peachy undertone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Golden Beige" id="golden-beige">
                        <span class="color-swatch" style="background-color: #F8C68C;"></span><b>Golden Beige:</b> Medium skin with a bright, golden undertone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Soft Golden Beige" id="soft-golden-beige">
                        <span class="color-swatch" style="background-color: #F3C29D;"></span><b>Soft Golden Beige:</b> Medium skin with a muted, golden beige tone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Golden Tan" id="golden-tan">
                        <span class="color-swatch" style="background-color: #D09A6D;"></span><b>Golden Tan:</b> Medium skin with a rich, warm tan tone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Muted Golden Olive" id="muted-golden-olive">
                        <span class="color-swatch" style="background-color: #C6B48A;"></span><b>Muted Golden Olive:</b> Medium to deep skin with a muted, warm olive undertone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Rich Caramel" id="rich-caramel">
                        <span class="color-swatch" style="background-color: #9C6A3C;"></span><b>Rich Caramel:</b> Medium to deep skin with a rich, warm caramel tone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Deep Warm Olive" id="deep-warm-olive">
                        <span class="color-swatch" style="background-color: #4D4B3A;"></span><b>Deep Warm Olive:</b> Deep skin with a warm, olive undertone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Deep Ash Brown" id="deep-ash-brown">
                        <span class="color-swatch" style="background-color: #4A3C36;"></span><b>Deep Ash Brown:</b> Deep skin with a cool, ashy brown tone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Deep Chocolate Brown" id="deep-chocolate-brown-2">
                        <span class="color-swatch" style="background-color: #3B2C25;"></span><b>Deep Chocolate Brown:</b> Deep skin with a cool, rich chocolate tone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Cool Espresso" id="cool-espresso">
                        <span class="color-swatch" style="background-color: #2A1B1B;"></span><b>Cool Espresso:</b> Deep skin with a cool, dark brown tone.
                    </label>
                    <label>
                        <input type="radio" name="skin-tone" value="Deep Chocolate Brown" id="deep-chocolate-brown">
                        <span class="color-swatch" style="background-color: #4E3B31;"></span><b>Deep Chocolate Brown:</b> Deep skin with a rich, warm chocolate tone.
                    </label>
                           
                    </div>
            </div>

           <br><br> <button type="submit" class="submit-btn">Analyse</button>
        </form>
    </div>
    <script>
    function goBack() {
        window.history.back();
    }
    </script>
        <button style="margin-left:48%;" onclick="goBack()">Go Back</button>
</body>
</html>
