<div class="title"><img src="views/images/Bdemon.gif"/></div>
<section class="sameHeightCol">
        <p>
            La boutique Démoniaque se situe au Cimetière du Crépuscule.</br>
            Vous pouvez tout de même y accéder sans avoir de Dinoz au cimetière grâce à ce lien :
            <a href="http://www.dinorpg.com/shop/demon" target:"_blank">Boutique Démoniaque</a>.
        </p>
        <p>
            Elle se débloque en réalisant les katacombes (labyrinthe).
            Cette boutique vous permettra d'acheter des Dinoz Démons avec des Tickets Démons.
            Les Tickets Démons sont des Tickets offerts en échange d'un sacrifice d'un de vos Dinoz, c'est la "monnaie" qui vous permettra d'acheter des Dinoz Démons.
        </p>
        <p>
            Une fois le labyrinthe fini et la boutique démoniaque dévérouillée, vous aurez donc la possibilité de sacrifier vos Dinoz en les amenant au cimetière du Crépuscule, en échange de quoi vous obtiendrez des Ticket Démons. Ceux-ci vous permettront d'acheter des Dinoz Démons.
            Voici ci-dessous le gain que vous rapporterons vos Dinoz à Sacrifiés (ce gain varie en fonction du niveau de votre Dinoz).
        </p>
        <p>
            Vous avez la possibilité de calculer le gain total de vos Dinoz à Sacrifier : Il suffit de taper le nombre de Dinoz à sacrifier à côté du niveau qui leur correspond.
            </br>/!\ Les données tapées ne se réinitialisent pas avec le rafraichissement de la page, pensez donc à regarder avant d'entrer vos données si toutes les cases sont vides /!\
        </p>
<p>Nombre de tickets démon : <?php echo $total ?></p>
        <form method="post" name="td[]" action="/demon">
            <div class="bunton_demons" id="bunton_demons">Gain des sacrifices de Dinoz</div>
            <div class="info_demons" style ="padding-top:15px;">
                <table id="table_infos_questions" style="margin-left:150px;margin-bottom:15px;">
                    <tr>
                        <td class="nbr_LVL"><div><div><p>LVL</p></div></div></td>
                        <td><div class="nbr_TD"><p>Gain</p><img src="views/images/ticketD.gif"/></div></td>
                    </tr>
                </table>
                <table id="table_infos_questions">
                    <tr>
                        <td class="nbr_LVL"><div><div><p>1</p></div></div></td>
                        <td><div class="nbr_TD"><p>1</p><img src="views/images/ticketD.gif"/><input type="number" name="td[0]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>2</p></div></div></td>
                        <td><div class="nbr_TD"><p>2</p><img src="views/images/ticketD.gif"/><input type="number" name="td[1]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>3</p></div></div></td>
                        <td><div class="nbr_TD"><p>3</p><img src="views/images/ticketD.gif"/><input type="number" name="td[2]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>4</p></div></div></td>
                        <td><div class="nbr_TD"><p>4</p><img src="views/images/ticketD.gif"/><input type="number" name="td[3]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>5</p></div></div></td>
                        <td><div class="nbr_TD"><p>5</p><img src="views/images/ticketD.gif"/><input type="number" name="td[4]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>6</p></div></div></td>
                        <td><div class="nbr_TD"><p>7</p><img src="views/images/ticketD.gif"/><input type="number" name="td[5]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>7</p></div></div></td>
                        <td><div class="nbr_TD"><p>8</p><img src="views/images/ticketD.gif"/><input type="number" name="td[6]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>8</p></div></div></td>
                        <td><div class="nbr_TD"><p>10</p><img src="views/images/ticketD.gif"/><input type="number" name="td[7]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>9</p></div></div></td>
                        <td><div class="nbr_TD"><p>12</p><img src="views/images/ticketD.gif"/><input type="number" name="td[8]"/></div></td>
                        <td class="nbr_LVL"><div><div class="zero"><p>10</p></div></div></td>
                        <td><div class="nbr_TD"><p>17</p><img src="views/images/ticketD.gif"/><input type="number" name="td[9]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>11</p></div></div></td>
                        <td><div class="nbr_TD"><p>18</p><img src="views/images/ticketD.gif"/><input type="number" name="td[10]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>12</p></div></div></td>
                        <td><div class="nbr_TD"><p>19</p><img src="views/images/ticketD.gif"/><input type="number" name="td[11]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>13</p></div></div></td>
                        <td><div class="nbr_TD"><p>22</p><img src="views/images/ticketD.gif"/><input type="number" name="td[12]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>14</p></div></div></td>
                        <td><div class="nbr_TD"><p>25</p><img src="views/images/ticketD.gif"/><input type="number" name="td[13]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>15</p></div></div></td>
                        <td><div class="nbr_TD"><p>28</p><img src="views/images/ticketD.gif"/><input type="number" name="td[14]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>16</p></div></div></td>
                        <td><div class="nbr_TD"><p>31</p><img src="views/images/ticketD.gif"/><input type="number" name="td[15]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>17</p></div></div></td>
                        <td><div class="nbr_TD"><p>35</p><img src="views/images/ticketD.gif"/><input type="number" name="td[16]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>18</p></div></div></td>
                        <td><div class="nbr_TD"><p>39</p><img src="views/images/ticketD.gif"/><input type="number" name="td[17]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>19</p></div></div></td>
                        <td><div class="nbr_TD"><p>43</p><img src="views/images/ticketD.gif"/><input type="number" name="td[18]"/></div></td>
                        <td class="nbr_LVL"><div><div class="zero"><p>20</p></div></div></td>
                        <td><div class="nbr_TD"><p>48</p><img src="views/images/ticketD.gif"/><input type="number" name="td[19]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>21</p></div></div></td>
                        <td><div class="nbr_TD"><p>53</p><img src="views/images/ticketD.gif"/><input type="number" name="td[20]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>22</p></div></div></td>
                        <td><div class="nbr_TD"><p>58</p><img src="views/images/ticketD.gif"/><input type="number" name="td[21]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>23</p></div></div></td>
                        <td><div class="nbr_TD"><p>64</p><img src="views/images/ticketD.gif"/><input type="number" name="td[22]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>24</p></div></div></td>
                        <td><div class="nbr_TD"><p>70</p><img src="views/images/ticketD.gif"/><input type="number" name="td[23]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>25</p></div></div></td>
                        <td><div class="nbr_TD"><p>77</p><img src="views/images/ticketD.gif"/><input type="number" name="td[24]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>26</p></div></div></td>
                        <td><div class="nbr_TD"><p>84</p><img src="views/images/ticketD.gif"/><input type="number" name="td[25]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>27</p></div></div></td>
                        <td><div class="nbr_TD"><p>92</p><img src="views/images/ticketD.gif"/><input type="number" name="td[26]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>28</p></div></div></td>
                        <td><div class="nbr_TD"><p>101</p><img src="views/images/ticketD.gif"/><input type="number" name="td[27]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>29</p></div></div></td>
                        <td><div class="nbr_TD"><p>110</p><img src="views/images/ticketD.gif"/><input type="number" name="td[28]"/></div></td>
                        <td class="nbr_LVL"><div><div class="zero"><p>30</p></div></div></td>
                        <td><div class="nbr_TD"><p>120</p><img src="views/images/ticketD.gif"/><input type="number" name="td[29]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>31</p></div></div></td>
                        <td><div class="nbr_TD"><p>131</p><img src="views/images/ticketD.gif"/><input type="number" name="td[30]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>32</p></div></div></td>
                        <td><div class="nbr_TD"><p>142</p><img src="views/images/ticketD.gif"/><input type="number" name="td[31]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>33</p></div></div></td>
                        <td><div class="nbr_TD"><p>155</p><img src="views/images/ticketD.gif"/><input type="number" name="td[32]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>34</p></div></div></td>
                        <td><div class="nbr_TD"><p>168</p><img src="views/images/ticketD.gif"/><input type="number" name="td[33]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>35</p></div></div></td>
                        <td><div class="nbr_TD"><p>183</p><img src="views/images/ticketD.gif"/><input type="number" name="td[34]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>36</p></div></div></td>
                        <td><div class="nbr_TD"><p>199</p><img src="views/images/ticketD.gif"/><input type="number" name="td[35]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>37</p></div></div></td>
                        <td><div class="nbr_TD"><p>216</p><img src="views/images/ticketD.gif"/><input type="number" name="td[36]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>38</p></div></div></td>
                        <td><div class="nbr_TD"><p>234</p><img src="views/images/ticketD.gif"/><input type="number" name="td[37]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>39</p></div></div></td>
                        <td><div class="nbr_TD"><p>254</p><img src="views/images/ticketD.gif"/><input type="number" name="td[38]"/></div></td>
                        <td class="nbr_LVL"><div><div class="zero"><p>40</p></div></div></td>
                        <td><div class="nbr_TD"><p>275</p><img src="views/images/ticketD.gif"/><input type="number" name="td[39]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>41</p></div></div></td>
                        <td><div class="nbr_TD"><p>298</p><img src="views/images/ticketD.gif"/><input type="number" name="td[40]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>42</p></div></div></td>
                        <td><div class="nbr_TD"><p>323</p><img src="views/images/ticketD.gif"/><input type="number" name="td[41]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>43</p></div></div></td>
                        <td><div class="nbr_TD"><p>350</p><img src="views/images/ticketD.gif"/><input type="number" name="td[42]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>44</p></div></div></td>
                        <td><div class="nbr_TD"><p>379</p><img src="views/images/ticketD.gif"/><input type="number" name="td[43]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>45</p></div></div></td>
                        <td><div class="nbr_TD"><p>410</p><img src="views/images/ticketD.gif"/><input type="number" name="td[44]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>46</p></div></div></td>
                        <td><div class="nbr_TD"><p>443</p><img src="views/images/ticketD.gif"/><input type="number" name="td[45]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>47</p></div></div></td>
                        <td><div class="nbr_TD"><p>479</p><img src="views/images/ticketD.gif"/><input type="number" name="td[46]"/></div></td>
                        <td class="nbr_LVL"><div><div><p>48</p></div></div></td>
                        <td><div class="nbr_TD"><p>519</p><img src="views/images/ticketD.gif"/><input type="number" name="td[47]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                    <tr>
                        <td class="nbr_LVL"><div><div><p>49</p></div></div></td>
                        <td><div class="nbr_TD"><p>563</p><img src="views/images/ticketD.gif"/><input type="number" name="td[48]"/></div></td>
                        <td class="nbr_LVL"><div><div class="zero"><p>50</p></div></div></td>
                        <td><div class="nbr_TD"><p>608</p><img src="views/images/ticketD.gif"/><input type="number" name="td[49]"/></div></td>
                    </tr>
                    <tr class="tr_separ"></tr>
                </table>
            </div>
            <div id="ButtonCalculer">
                <img src="cross.png" id="cross_Tbons"/>
                <button target="_blank">Calculer le</br>Total de Bons</button>
            </div>
        </form>
        <p>
</section>
<div>