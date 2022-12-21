
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/style1.css')}}">
</head>
<body>

    <?php
        // Creating a PHP Array
        $projetMezimas= $PTMezima[0];
        $tacheMezimas=$PTMezima[1];
        // Creating a PHP Array
        $sampleArray =$projetMezimas;
        $sampleArray1 =$tacheMezimas;
    ?>

    <nav>
		<div class="logo">
			<h4>MEZIMA.PROG</h4> 
		</div>
        
        
		<ul class="nav-links">

			<li id="menu1">
				<a href="#item1"><div> Accueuil </div>
                    <div class="burger-fleche">
                        <div class="burger-fleche-sous">
                            <div class="line1"></div>
                            <div class="line3"></div>
                        </div>
                    </div>
        
                </a>   
			</li>

			<li id="menu2">
				<a href="#item2"><div> Service </div>
                    <div class="burger-fleche">
                        <div class="burger-fleche-sous">
                            <div class="line1"></div>
                            <div class="line3"></div>
                        </div>
                    </div>
        
                </a>  
			</li>

			<li id="menu3">
				<a href="#item3"><div> Zone </div>  
                    <div class="burger-fleche">
                        <div class="burger-fleche-sous">
                            <div class="line1"></div>
                            <div class="line3"></div>
                        </div>
                    </div>
        
                </a>
			</li>
            
			<li id="menu4">
				<a href="#item4"><div>+</div>
                    <div class="burger-fleche">
                        <div class="burger-fleche-sous">
                            <div class="line1"></div>
                            <div class="line3"></div>
                        </div>
                    </div>
        
                </a>
			</li>
            <li id="menu5">
				<a href="#item5">+
                <div class="burger-fleche">
                        <div class="burger-fleche-sous">
                            <div class="line1"></div>
                            <div class="line3"></div>
                        </div>
                    </div>

                </a>
			</li>
		</ul>
		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>

	</nav>
    
    <!-- <div class="imMez">
        <img src="img/mezima1.jpg" alt="">
     </div> -->

    <div class="item">
        <div id="item1" class="sous "><!-- <h1>Recherche par secteur </h1> -->
            A
        </div>
        <div id="item2" class="sous"><h1>menu2</h1>
           
        <div class="ss">  
                <div class="tabs-menu">				
                    <ul>

                        <li class="tabs"><a href="#BATIMENT">BATIMENT</a></li>
                        <li class="tabs"><a href="#ENERGIE">ENERGIE</a></li>
                        <li class="tabs"><a href="#TELECOM">TELECOM</a></li>
                        <li class="tabs"><a href="#AUTRE">AUTRES</a></li> 
                    
                    </ul>
                </div>

                <div class="sub-menus">

                    <div class="sub-menu-im " id="BATIMENT">
                        <h4>BATIMENT</h4>
                        <img src="img/ener1.jpg" alt="">
                    </div>
                    <div class="sub-menu-im" id="ENERGIE">
                        <h4>ENERGIE</h4>
                        <img src="img/ener.jpg" alt="">
                    </div>
                    <div class="sub-menu-im" id="TELECOM">
                        <h4>TELECOM</h4>
                        <img src="img/tele.jpg" alt="">
                    </div>
                    <div class="sub-menu-im" id="AUTRE">
                        <h4>AUTRE</h4>
                        <img src="img/autr.jpg" alt="">
                    </div>

                </div>
        </div>
        
        <!-- <div class="tabs-menu2">				
                    <ul>
                        <div class="pre-tabs2">
                        <li class="tabs2"><a href="#">Administration</a></li>
                        <li class="tabs2"><a href="#">Agroalimentaire</a></li>
                        <li class="tabs2"><a href="#">Construction</a></li>
                        </div>
                        <div class="pre-tabs2">
                        <li class="tabs2"><a href="#">Education</a></li> 
                        <li class="tabs2"><a href="#">Hight Tech</a></li>
                        <li><a href="#">Informatique</a></li>
                        <li class="tabs2"><a href="#">Loisirs</a></li>
                        </div>
                        <div class="pre-tabs2">
                        <li class="tabs2"><a href="#">Electromenager</a></li>
                        <li class="tabs2"><a href="#">Location</a></li>
                        <li><a href="#">Loisir</a></li>
                        <li class="tabs2"><a href="#">Reparation</a></li>
                        </div>
                        <div class="pre-tabs2">
                        <li class="tabs2"><a href="#">Urgence</a></li>            
                        </div>
                    </ul>
             </div>-->
        </div> 


        <div id="item3" class="sous"><h1>Recherche par province</h1>
            <div id="map" class="map">
                <div class="map_image">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:amcharts="http://amcharts.com/ammap" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewbox="-300 -50 1500 1500">
                        <g>
                            <a href="#" id="GA-1" xlink:title="Estuaire">
                                <path class="land" d="M95.27,205.37L94.26,205.32L94.65,205.74L95.27,205.37zM150.2,180.52L136.94,170.72L120.37,181.48L126.09,252.25L121.31,234.39L106.28,234.39L116.61,223.02L85.88,230.63L84.47,241.91L110.96,276.79L183.6,290.97L146.83,299.56L154.21,313.61L111.81,290.97L109.58,303.31L91.98,291.92L89.94,267.86L84.53,354.25L120.89,396.44L120.5,374.22L166.69,358.47L180.28,374.03L195.23,368.63L255.55,323.61L272.13,287.92L291.19,284.94L312.42,204.18L235.72,228.77L237.22,178.85L177.42,179.54L172.37,189.5L150.2,180.52z"/>
                            </a>

                            <a href="#" id="GA-2" xlink:title="Haut-Ogooué">
                                <path class="land" d="M657.73,312.3L631.88,311.25L627.74,344.59L669.89,422.82L629.6,476.11L614.9,470.56L616.14,490.24L580.69,519.36L557.48,577.22L594.27,630.38L588.87,643.6L656.33,653.06L695.47,605.66L717.91,641.86L711.85,658.56L743.22,660.99L763.1,641.19L751.21,623.26L792.62,549.06L781.06,538.84L797.98,510.93L784.81,455.78L799.54,403.72L780.21,380.37L752.82,379.52L743.96,354.94L713.95,352.72L715.42,329.53L657.73,312.3z"/>
                            </a>

                            <a href="#" id="GA-3" xlink:title="Moyen-Ogooué">
                                <path class="land" d="M291.19,284.94L272.13,287.92L255.55,323.61L195.23,368.63L180.28,374.03L166.69,358.47L120.5,374.22L120.89,396.44L135.54,432.76L169.53,446.17L167.72,476.81L189.23,489.73L207.01,474.17L229.27,476.71L271,402.98L339.69,396.07L395.22,420.6L356.33,326.68L398.01,285.17L291.19,284.94z"/>
                            </a>

                            <a href="#" id="GA-4" xlink:title="Ngounié">
                                <path class="land" d="M395.22,420.6L339.69,396.07L271,402.98L229.27,476.71L207.01,474.17L189.23,489.73L162.69,548.6L176.9,568.11L243.3,587.36L263.67,634.98L326.8,628.61L391.5,703.22L403.73,679.48L395.72,637.72L421.86,649.48L518.69,637.75L517.41,578.41L459.35,541.75L459.05,509.3L421.65,463.4L393.4,470.08L395.22,420.6z"/>
                            </a>

                            <a href="#" id="GA-5" xlink:title="Nyanga">
                                <path class="land" d="M333.46,859.34L347.02,826.28L384.21,800.35L409.45,825.47L441.36,821.98L431.74,805.69L447.79,771.92L412.43,753.69L424.94,730.89L391.5,703.22L326.8,628.61L263.67,634.98L239.29,648.81L224.91,681.14L174.8,695.01L267.56,773.36L269.08,792.43L333.46,859.34z"/>
                            </a>

                            <a href="#" id="GA-6" xlink:title="Ogooué-Ivindo">
                                <path class="land" d="M740.56,127.49L702.57,119.32L618.6,148.5L504.31,146.83L483.65,200.06L383.47,268.36L398.01,285.17L356.33,326.68L395.22,420.6L518.45,372.25L539.29,279.21L566.25,285.25L599.86,286.21L631.88,311.25L657.73,312.3L715.42,329.53L723.29,268.6L741.29,242.57L776.1,231.32L795.28,191.1L765.55,133.59L740.56,127.49z"/>
                            </a>

                            <a href="#" id="GA-7" xlink:title="Ogooué-Lolo">
                                <path class="land" d="M566.25,285.25L539.29,279.21L518.45,372.25L395.22,420.6L393.4,470.08L421.65,463.4L459.05,509.3L459.35,541.75L517.41,578.41L535.75,568.38L557.48,577.22L580.69,519.36L616.14,490.24L614.9,470.56L629.6,476.11L669.89,422.82L627.74,344.59L631.88,311.25L599.86,286.21L566.25,285.25z"/>
                            </a>

                            <a href="#" id="GA-8" xlink:title="Ogooué-Maritime">
                                <path class="land" d="M45.27,420.89L43.02,398.48L35.43,407.96L45.27,420.89zM120.89,396.44L84.53,354.25L43.96,437.28L32.61,411.48L20.96,427.04L0.46,397.62L20.3,443.87L22.68,442.97L25.51,450.93L33.53,449.52L29.68,455.73L24.13,451.38L37.79,468.93L41.58,484.9L42,475.92L46.93,481.19L47.58,484.39L44.9,486.34L45.31,493.45L57.13,502.25L62.55,500.31L64.13,508.97L67.95,511.09L88.57,493.57L81.85,532.51L105.24,519.34L119.43,538.23L80.97,547.52L78.82,528.28L64.3,519.01L53.71,501.86L49.85,499.29L47.72,499.5L45.05,496.52L40.12,486.34L44.67,498.05L61.91,522.17L72.68,534.4L77.55,569.58L113.67,582.15L117.18,602.05L106.72,581.6L79.73,575.29L124.58,640.82L202.42,669.5L176.95,678.92L158.05,655.22L139.24,653.34L174.8,695.01L224.91,681.14L239.29,648.81L263.67,634.98L243.3,587.36L176.9,568.11L162.69,548.6L189.23,489.73L167.72,476.81L169.53,446.17L135.54,432.76L120.89,396.44z"/>
                            </a>

                            <a href="#" id="GA-9" xlink:title="Wouleu-Ntem">
                                <path class="land" d="M366.18,0L364.07,179.27L237.22,178.85L235.72,228.77L312.42,204.18L291.19,284.94L398.01,285.17L383.47,268.36L483.65,200.06L504.31,146.83L618.6,148.5L626.11,120.21L610.99,97.56L630.27,6.18L423.53,2.81L366.18,0z"/>
                            </a>
                            <!-- <a href=""> -->
                                
                            <!-- </a> -->
         
                        </g>
                    </svg>
                </div>

                <div class="map_liste">
                <ul>
                    <li><a href="#Estuaire" id="liste-1">Estuaire</a></li>
                    <li><a href="#Haut-Ogooué" id="liste-2">Haut-Ogooué</a></li>
                    <li><a href="#Moyen-Ogooué" id="liste-3">Moyen-Ogooué</a></li>
                    <li><a href="#Ngounié" id="liste-4">Ngounié</a></li>
                    <li><a href="#Nyanga" id="liste-5">Nyanga</a></li>
                    <li><a href="#Ogooué-Ivindo" id="liste-6">Ogooué-Ivindo</a></li>
                    <li><a href="#Ogooué-Lolo" id="liste-7">Ogooué-Lolo</a></li>
                    <li><a href="#Ogooué-Maritime" id="liste-8">Ogooué-Maritime</a></li>
                    <li><a href="#Wouleu-Ntem" id="liste-9">Wouleu-Ntem</a></li>
                </ul>
                </div>
            </div>
           
        </div>
        <div id="item4" class="sous"><h1>menu4</h1></div>
        <div id="item5" class="sous"><h1>menu5</h1></div>
        <div></div>
    </div>

    <div class="immertion">
    <div class="tableau">
        <div class="lgd"><i> TABLE N°3 </i></div>

            <!-- Affichage de tablaux avec php -->
            <!-- @foreach($projetMezimas as $projetMezima)
                <div class="projet">
                    <div class="entete">
                        <div class="titreProjet">Projet: {{ $projetMezima->nomProjet }} </div>
                        <div class="voirDescrip">
                            <div class="burger-croix">
                                <div class="line1"></div>
                                <div class="line3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="corps">
                        <div class="descrip">Description: {{ $projetMezima->description }}</div>
                        <div class="client">Client: <i>{{ $projetMezima->nomClient }}</i> </div>
                        <div class="pourcen" ><a href="{{ route('projet.show', $projetMezima->id) }}">voir plus</a></div>
                    </div>
                </div>
            @endforeach -->


            <div class="lumen"></div>
       
        </div>


    </div>

    <form action="{{ route('tache.store') }}" method="post">
    @csrf
        <input id="proT" type="hidden" name="nomTache">
        <input type="submit" value="Subscribe!">
    </form>
    
    <script src="{{asset('/js/script1.js')}}">	</script>
    <script> 
        var projetMezimas = <?php echo json_encode($sampleArray); ?>; 
        var tacheMezimas = <?php echo json_encode($sampleArray1); ?>; 

        tabProjDes(projetMezimas,tacheMezimas)
    </script>
    
    
</body>
</html>