<p style="text-align: center;"><img src="https://media.discordapp.net/attachments/626252895892799518/633103847165919253/elfbot-ngaa.png" alt="" /></p>
<p style="text-align: center;"><span style="font-size: medium;"><strong>Hotkeys de Suporte NTO Hard</strong></span></p>
<p style="text-align: center;"><span style="font-size: small;">&nbsp;</span></p>
<p style="text-align: center;"><span style="font-size: small;"><strong><img class="emoji" src="https://discordapp.com/assets/df0fba917be2ad5fc7939019465de627.svg" alt=":round_pushpin:" width="17" height="17" /></strong><strong>Healar : Voc&ecirc; deve configurar o 'Jutsu' de cura que deseja usar.</strong><strong><img class="emoji" src="https://discordapp.com/assets/c6b26ba81f44b0c43697852e1e1d1420.svg" alt=":white_check_mark:" width="16" height="16" /></strong></span></p>
<address style="text-align: center;"><span style="font-size: small;">auto 100 listas 'Healar' | setcolor 500 299 200 | if [$self.hppc &lt; 90] say 'Jutsu' |</span></address><address style="text-align: center;"><span style="font-size: small;">&nbsp;</span></address>
<p style="text-align: center;"><span style="font-size: small;"><strong><img class="emoji" src="https://discordapp.com/assets/df0fba917be2ad5fc7939019465de627.svg" alt=":round_pushpin:" width="17" height="17" />Anti Slow : Utilizar Kai quando estiver com status negativos.<img class="emoji" src="https://discordapp.com/assets/c6b26ba81f44b0c43697852e1e1d1420.svg" alt=":white_check_mark:" width="16" height="16" /></strong></span></p>
<address style="text-align: center;"><span style="font-size: small;">auto 100 listas 'Anti-Lyze' | healparalysis 'Kai' | wait Z</span></address><address style="text-align: center;"><span style="font-size: small;">&nbsp;</span></address>
<p style="text-align: center;"><span style="font-size: small;"><strong><img class="emoji" src="https://discordapp.com/assets/df0fba917be2ad5fc7939019465de627.svg" alt=":round_pushpin:" width="17" height="17" />Auto Jutsu Ataque : Voc&ecirc; deve configurar o 'Jutsu' que deseja usar.<img class="emoji" src="https://discordapp.com/assets/c6b26ba81f44b0c43697852e1e1d1420.svg" alt=":white_check_mark:" width="16" height="16" /></strong></span></p>
<address style="text-align: center;"><span style="font-size: small;">auto 250 listas 'Atk One Jutsu' | isattacking say 'Jutsu1'</span></address><address style="text-align: center;"><span style="font-size: small;">&nbsp;</span></address>
<p style="text-align: center;"><span style="font-size: small;"><strong><img class="emoji" src="https://discordapp.com/assets/df0fba917be2ad5fc7939019465de627.svg" alt=":round_pushpin:" width="17" height="17" />Auto Eat Food : Manter-se alimentado.<img class="emoji" src="https://discordapp.com/assets/c6b26ba81f44b0c43697852e1e1d1420.svg" alt=":white_check_mark:" width="16" height="16" /></strong></span></p>
<address style="text-align: center;"><span style="font-size: small;">auto 5000 eatfood</span></address><address style="text-align: center;"><span style="font-size: small;">&nbsp;</span></address>
<p style="text-align: center;"><span style="font-size: small;"><strong><img class="emoji" src="https://discordapp.com/assets/df0fba917be2ad5fc7939019465de627.svg" alt=":round_pushpin:" width="17" height="17" />Auto Potion : Utilizar Potion quando estiver com -70 % de Vida.&nbsp;<img class="emoji" src="https://discordapp.com/assets/c6b26ba81f44b0c43697852e1e1d1420.svg" alt=":white_check_mark:" width="16" height="16" /></strong></span></p>
<address style="text-align: center;"><span style="font-size: small;">auto 250 listas '<strong>Health Potion</strong>' | setcolor 500 002 200 | if [$hppc &lt; 70] useoncreature 10722 self</span></address><address style="text-align: center;"><span style="font-size: small;">auto 250 listas '<strong>Strong Health</strong>' | setcolor 500 002 200 | if [$hppc &lt; 70] useoncreature 1072 self</span></address><address style="text-align: center;"><span style="font-size: small;">auto 250 listas&nbsp;<strong>'Great Pill'</strong>&nbsp;| setcolor 500 002 200 | if [$hppc &lt; 70] useoncreature 10721 self</span></address><address style="text-align: center;"><span style="font-size: small;">auto 250 listas '<strong>Ultimate Pill</strong>' | setcolor 500 002 200 | if [$hppc &lt; 70] useoncreature 10810 self</span></address><address style="text-align: center;"><span style="font-size: small;"><span>auto 250 listas '</span><strong>Soldier Pill</strong><span>' | setcolor 500 002 200 | if [$hppc &lt; 25] useoncreature ITEMID self</span></span></address><address style="text-align: center;"><span style="font-size: small;">&nbsp;</span></address>
<p style="text-align: center;"><span style="font-size: small;"><strong><img class="emoji" src="https://discordapp.com/assets/df0fba917be2ad5fc7939019465de627.svg" alt=":round_pushpin:" width="17" height="17" />Auto Kawarimi : Utilizar o Jutsu quando estiver com -30 % de Vida.<img class="emoji" src="https://discordapp.com/assets/c6b26ba81f44b0c43697852e1e1d1420.svg" alt=":white_check_mark:" width="16" height="16" /></strong></span></p>
<address style="text-align: center;"><span style="font-size: small;">auto 100 if [$self.hppc &lt; 30] say 'kawarimi' |</span></address><address style="text-align: center;"><span style="font-size: small;">&nbsp;</span></address>
<p style="text-align: center;"><span style="font-size: small;"><strong><img class="emoji" src="https://discordapp.com/assets/df0fba917be2ad5fc7939019465de627.svg" alt=":round_pushpin:" width="17" height="17" />Auto Reflect Gunbai : Utilizar o Jutsu quando estiver com -20 % de Vida.<img class="emoji" src="https://discordapp.com/assets/c6b26ba81f44b0c43697852e1e1d1420.svg" alt=":white_check_mark:" width="16" height="16" /></strong></span></p>
<address style="text-align: center;"><span style="font-size: small;">auto 100 if [$self.hppc &lt; 20] say 'Reflect Gunbai' |</span></address>
<p style="text-align: center;"><span style="font-size: small;">&nbsp;</span></p>
<p style="text-align: center;"><span style="font-size: small;"><strong><img class="emoji" src="https://discordapp.com/assets/df0fba917be2ad5fc7939019465de627.svg" alt=":round_pushpin:" width="17" height="17" />Auto Buff : Utilizar o Jutsu quando estiver com -50% de Vida.<img class="emoji" src="https://discordapp.com/assets/c6b26ba81f44b0c43697852e1e1d1420.svg" alt=":white_check_mark:" width="16" height="16" /></strong></span></p>
<address style="text-align: center;"><span style="font-size: small;">auto 100 if [$self.hppc &lt; 50] say 'Jutsu Buff' |</span></address><address style="text-align: center;"><span style="font-size: small;">&nbsp;</span></address>
<p style="text-align: center;"><span style="font-size: small;"><strong><img class="emoji" src="https://discordapp.com/assets/df0fba917be2ad5fc7939019465de627.svg" alt=":round_pushpin:" width="17" height="17" />Auto Reconectar : Reconecte o seu personagem automaticamente ao deslogar.<img class="emoji" src="https://discordapp.com/assets/c6b26ba81f44b0c43697852e1e1d1420.svg" alt=":white_check_mark:" width="16" height="16" /></strong></span></p>
<address style="text-align: center;"><span style="font-size: small;">auto 250 listas 'Re-Conect' | setcolor 0 400 500 | ifnot '$connected' reconnect | wait 6000</span></address><address style="text-align: center;"><span style="font-size: small;">&nbsp;</span></address>
<p style="text-align: center;"><span style="font-size: small;"><strong><img class="emoji" src="https://discordapp.com/assets/df0fba917be2ad5fc7939019465de627.svg" alt=":round_pushpin:" width="17" height="17" />Anti RedSkull : Configure os Jutsus de Area e Target para serem utilizados no momento correto.<img class="emoji" src="https://discordapp.com/assets/c6b26ba81f44b0c43697852e1e1d1420.svg" alt=":white_check_mark:" width="16" height="16" /></strong></span></p>
<address style="text-align: center;"><span style="font-size: small;">auto 250 setcolor 2 255 128 | listas 'Ant-Red Andar' | setcolor 0 255 0 | foreach 'allplayers' $m if [$fileisline.'safelist.txt'.'$m.name' == 0 &amp;&amp; $m.name != $name] {isattacking {say 'JUTSUTARGET'}} | | if [$monstersaround.1 &gt;=1 &amp;&amp; $fileisline.'safelist.txt'.'$m.name' == 0 &amp;&amp; $m.name != $name == 0 &amp;&amp; $self.skull &lt;= 2] {say 'JUTSU DE AREA'}} | ifplayeronscreen {isattacking {say 'JUTSU TARGET'}} | if [ $self.skull == 3 &amp;&amp; ($target)] say 'ATK TARGET'</span></address>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>