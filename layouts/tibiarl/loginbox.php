<div id="Loginbox">
  <div id="LoginTop" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-top.giif)"></div>
  <div id="BorderLeft" class="LoginBorder" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chaiin.gif)"></div>
  <div id="LoginButtonContainer" style="background-image:url(<?PHP echo $layout_name; ?>/images/loginbox/loginbox-textfield-background.png)">
    <div id="PlayNowContainer">
      <form class="MediumButtonForm" action="?subtopic=accountmanagement" method="post"><input type="hidden" name="page" value="overview">
        <div class="MediumButtonBackground" style="background-image:url(<?PHP echo $layout_name; ?>/images/buttons/mediumbutton.png)" onmouseover="MouseOverMediumButton(this);" onmouseout="MouseOutMediumButton(this);">
          <div class="MediumButtonOver" style="background-image: url(<?PHP echo $layout_name; ?>/images/buttons/mediumbutton-over.png); visibility: hidden;" onmouseover="MouseOverMediumButton(this);" onmouseout="MouseOutMediumButton(this);"></div><input class="MediumButtonText" type="image" name="Play Now" alt="Play Now" src="<?PHP echo $layout_name; ?>/images/buttons/<?PHP if (!$logged) { ?>mediumbutton_playnow.png<?PHP } else { ?>mediumbutton_myaccount.png<?PHP } ?>">
        </div>
      </form>
    </div>
  </div>
  <div class="Loginstatus" style="background-image:url(<?PHP echo $layout_name; ?>/images/loginbox/loginbox-textfield-background.giif)">
    <div id="LoginstatusText" onclick="LoginstatusTextAction(this);" onmouseover="MouseOverLoginBoxText(this);" onmouseout="MouseOutLoginBoxText(this);">
      <div id="LoginstatusText_1" class="LoginstatusText" style="background-image: url(<?PHP echo $layout_name; ?>/images/loginbox/loginbox-font-create-account.gif); visibility: visible;"></div>
      <div id="LoginstatusText_2" class="LoginstatusText" style="background-image: url(<?PHP echo $layout_name; ?>/images/loginbox/loginbox-font-create-account-over.gif); visibility: hidden;"></div>
    </div>
  </div>
  <div id="BorderRight" class="LoginBorder" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/chaiin.gif)"></div>
  <div id="LoginBottom" class="Loginstatus" style="background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.giif)"></div>
</div>