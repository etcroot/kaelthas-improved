<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 11/26/2018 - 8:36 PM
 */
?>
<div class="box1">
    <h3 class="box-title">Welcome to Single Player Project - LegionV2 server!</h3>
    <hr class="divider">
    <p>1. First of all, you must create an account. The account is used to log into both the game and our website. Click
        here to open the registration page.</p>
    <p>2. Install World of Warcraft. You can download it (legally) from here: Windows or Mac. Make sure to upgrade to
        our current supported patch, which is 7.3.5 (build 26124-26972). Patch mirrors can be found here. </p>
    <p>3. Open up the "World of Warcraft" directory. The default directory is "C:\Program Files\World of Warcraft". When
        you've found it, open up the directory called "data", then go into the directory called either enUS or enGB,
        depending on your client language.</p>
    <p>5. Erase all text and change it to:<br />
    <code>set portal "<?php echo get_config('realmlist'); ?>"</code></p>
    <p>You may now start playing! If you need any help, do not hesitate to create a support ticket.</p>
</div>
