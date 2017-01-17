<html>
    <head>
        <title>Navbar</title>
        <meta charset="utf-8">
            <link href="https://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet">
        <style>
            
            body {width: 100%;}
            nav {background-color: red; font-family: Lato; margin: 0;}
            nav ul {background: #666; padding: 0;margin: 0; transition: all 0.3s ease-in-out; text-align: center;}

            nav ul li {list-style: none; text-align: left}
            nav ul li a {display: inline-block; width: 100px; color: white; padding: 10px 20px; text-decoration: none;}
            nav ul li:hover > a {background: rgba(255,255,255,0.2);}
            
            nav ul ul li {position: relative;}
            nav ul ul ul {position: absolute; top: 0; left: 100%;}
            
            
            nav > ul ul {position: absolute; visibility: hidden; opacity: 0;
            }
            nav ul li:hover > ul {visibility: visible; opacity: 1;}
            nav > ul > li {display:inline-block; }
            .clearfix:after {
                display: block;
                content: " ";
                clear: both;
            }
           
            .arrow {font-size:10px;}
            .red {background: #e74c3c; }
            .red ul {background: #e74c3c;}
            .blue {background: #2980b9;}
            .blue ul {background: #2980b9;}
            .green {background: #16a085; }
            .green ul {background: #16a085;}
            .refresh {background: #2c3e50;}
            
            #horizontal_scroller {}
        </style>
    </head>
    <body>
        <div id="horizontal_scroller">
        <nav>
            <ul class="clearfix">
                <li class="red"><a href="#">PLANNER <span class="arrow">&#9660;</span></a>
                    <ul>
                        <li><a href="#">Prehľad</a>
                        </li>
                        <li><a href="#">Kalendár</a>
                        </li>
                        <li><a href="#">Zdravie <span class="arrow">&#9660;</span></a>
                            <ul>
                                <li><a href="#">Aktivity</a></li>
                                <li><a href="#">Spánok (pasivity)</a></li>
                                <li><a href="#">Food &amp; Drink</a></li>
                                <li><a href="#">Medicine</a></li>
                                <li><a href="#">Sexlife</a></li>
                                <li><a href="#">Hospital records</a></li>
                            </ul>
                        </li>
                        <li><a href="/home/planner.php">Plány a ciele <span class="arrow">&#9660;</span></a>
                            <ul>
                                <li><a href="/home/planner.php#plan">Plán pôžička</a></li>
                                <li><a href="/home/planner.php#goal_increase_salary">Cieľ zvýš príjem</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Peniaze <span class="arrow">&#9660;</span></a>
                            <ul>
                                <li><a href="#">Prehľad</a></li>
                                <li><a href="#">Tranzakcie</a></li>
                                <li><a href="#">SHOPPING LIST</a></li>
                                <li><a href="#">ASSETS / STOCK</a></li>
                            </ul>
                        </li>
                    </ul>
                </li><li class="blue">
                <a href="#">WEB <span class="arrow">&#9660;</span></a>
                    <ul>
                        <li><a href="#">Motivácia <span class="arrow">&#9660;</span></a>
                            <ul>
                                <li><a href="#">video 1</a></li>
                                <li><a href="#">video 2</a></li>
                                <li><a href="#">video 3</a></li>
                                <li><a href="#">video 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#">RECENT <span class="arrow">&#9660;</span></a>
                            <ul>
                                <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
                                <li><a href="https://www.google.cz" target="_blank">Google</a></li>
                                <li><a href="https://www.macblog.sk" target="_blank">Macblog</a></li>
                                <li><a href="https://www.iboys.cz" target="_blank">iBoys</a></li>
                                <li><a href="https://m.iboys.cz/login.php" target="_blank">iBoys mobile</a></li>
                                <li><a href="https://hornetapp.com/" target="_blank">Hornet</a></li>
                            </ul>
                        </li>
                        
                        
                        <li><a href="#">--empty-- <span class="arrow">&#9660;</span></a>
                            <ul>
                                <li><a href="#">Sublist <span class="arrow">&#9660;</span></a>
                                    <ul>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sublist <span class="arrow">&#9660;</span></a>
                                    <ul>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sublist <span class="arrow">&#9660;</span></a>
                                    <ul>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sublist <span class="arrow">&#9660;</span></a>
                                    <ul>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </li><li class="green"><a href="#">WORK <span class="arrow">&#9660;</span></a>
                    <ul>
                        <li><a href="#">Work <span class="arrow">&#9660;</span></a>
                            <ul>
                                <li><a href="#">SET UP <span class="arrow">&#9660;</span></a>
                                    <ul>
                                        <li><a href="https://www.icloud.com/numbers/0Cwx0a-6PGJs7koFW7abQXZWQ#Výkazy_Etnetera&instanceId=window_0" target="_blank">Výkaz iCloud</a></li>
                                        <li><a href="#">Ticketing</a></li>
                                        <li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">Gmail Etn</a></li>
                                        <li><a href="https://mail.google.com/mail/u/1/#inbox" target="_blank">Gmail Prs</a></li>
                                        <li><a href="https://drive.google.com/drive/folders/0B0T-6BMRFS2UfkRjYzRfOTZCY0hZSGkzcy0zRHZySlZ6dkEycEFBOUtVUzJuRmJRMUpUekU" target="_blank">Google Drive</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">FAVOURITE <span class="arrow">&#9660;</span></a>
                                    <ul>
                                        <li><a href="#" target="_blank">AUDI CMS4</a></li>
                                        <li><a href="#" target="_blank">VW PKW CMS4</a></li>
                                        <li><a href="#" target="_blank">VW LNF CMS4</a></li>
                                        <li><a href="#" target="_blank">AUDI CMS5</a></li>
                                        <li><a href="#" target="_blank">VW PKW CMS5</a></li>
                                        <li><a href="#" target="_blank">VW LNF CMS5</a></li>
                                        <li><a href="#" target="_blank">DEALERNET</a></li>
                                        <li><a href="#" target="_blank">MAILONE</a></li>
                                        <li><a href="#" target="_blank">MAILKIT</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="#">Sublist <span class="arrow">&#9660;</span></a>
                                    <ul>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                </li><li class="refresh"><a href="/homemenu.html">Refresh</a></li>
                
            </ul> 
        </nav>
        </div>
        
        <!--
This navigation bar I have made thanks to this video https://www.youtube.com/watch?v=TmQm-p3wCSU

<span class="arrow">&#9660;</span>


-v-v-toto dole je jedna vetva menu-v-v-
<li><a href="#">Sublist <span class="arrow">&#9660;</span></a>
                            <ul>
                                <li><a href="#">Sublist <span class="arrow">&#9660;</span></a>
                                    <ul>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sublist <span class="arrow">&#9660;</span></a>
                                    <ul>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sublist <span class="arrow">&#9660;</span></a>
                                    <ul>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sublist <span class="arrow">&#9660;</span></a>
                                    <ul>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                        <li><a href="#">Sublist</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


-->
        
    </body>
</html>