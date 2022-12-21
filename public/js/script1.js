var dureeT = document.getElementById("dureeT");
var dureeProj=0
var nomT = document.getElementById("nomT");
let TableauTaches= new Array()
let TabTacheData= new Array()
var projetChoisi

function TacheData(nomT,dureeT,statuTache, tacheAnt,projet) {
    this.nomT=nomT
    this.dureeT=dureeT
    this.statuTache=statuTache
    this.tacheAnt=tacheAnt
    this.projet=projet
}

function Tache(nomT ,dureeT){
    this.nomT=nomT
    this.numeroT=0
    this.dureeT=(dureeT)/1
    this.debutT=0
    this.finT=0
    this.tacheAnt=false
    this.rangeT=false
    this.tachesAnt=new Array()
    this.NomtacheAnt="+A"
    this.boutonSup=new Suppression(this)
    this.valAnt=document.createElement('input')
    this.valAnt.classList.add('number')
    this.boutAjAnt=document.createElement('div')
    this.boutAjAnt.innerHTML="TACHES ANTERIEURS + "
    this.boutAjAnt.classList.add("boutAjAnt")
    this.boutAjAnt.addEventListener('click',()=>{
        if(this.valAnt.value>0 && TableauTaches.length>=this.valAnt.value && this.valAnt.value!=(this.numeroT+1)){
            if(this.tachesAnt.indexOf(this.valAnt.value)==(-1)){
                this.tachesAnt.push(this.valAnt.value)   
            }   
        }
        afficheT(TableauTaches)
        // Je me suis arreter ici dans la creation d'un tableau de taches Antérieur
    })
}

function Suppression(tache){
    this.tache=tache;
    this.boutSup=document.createElement('div');
}

function afficheT(tableau){

    document.querySelector('.taches').innerHTML=""

    tableau.forEach(element =>{
        element.numeroT=tableau.indexOf(element)
        var nomT1 = document.createElement('div');
        nomT1.classList.add("nomT");
        var tachesAnt=document.createElement('div');
        tachesAnt.classList.add("tachesAnt")
        var dureeT1 = document.createElement('div');
        dureeT1.classList.add("dureeT");
        var numeroT=document.createElement('div');
        numeroT.innerHTML=" NUMERO : "+(element.numeroT+1);
        var tache = document.createElement('div');
        tache.classList.add('tache');
        var newLinkText ;
    
        console.log(element.nomT);
        newLinkText = document.createTextNode(" "+element.nomT);nomT1.appendChild(newLinkText);
        newLinkText = document.createTextNode(" "+element.dureeT);dureeT1.appendChild(newLinkText);
        element.boutonSup.boutSup.innerHTML="SUPPRESSION";
        
        tache.appendChild(numeroT);
        tache.appendChild(nomT1);
        tache.appendChild(dureeT1);
        tache.appendChild(tachesAnt);
        tache.appendChild(element.boutonSup.boutSup);
        document.querySelector('.taches').appendChild(tache);

        tachesAnt.appendChild(element.boutAjAnt)
        tachesAnt.appendChild(element.valAnt)

        if(element.tachesAnt.length!=0){
            console.log("VU")
            element.tachesAnt.forEach(element1 => {
                newLinkText = document.createTextNode("  "+element1);
                var lab=document.createElement("div");
                tachesAnt.appendChild(lab);
                tachesAnt.appendChild(newLinkText);
            });
        }
        else{
            newLinkText = document.createTextNode("Aucune tache antérieur");
            var lab=document.createElement("div");
            tachesAnt.appendChild(lab);
            tachesAnt.appendChild(newLinkText);
        }
    });
}


function dessinTab() {
    dureeProj=0
    var verif=true
    while (verif) {
        verif=false 
        TableauTaches.forEach(element => {
            // Pour placer les element du tableau qui n'ont pas de taches antérieur
            if(element.tachesAnt.length==0){
                element.finT=element.dureeT
                element.rangeT=true
            }
            //Pour les elements du tableau qui ont des taches anterieurs
            else{
                var verifTAnt=true
                //Pour verifier si toutes ces taches anterieurs ont été rangé
                element.tachesAnt.forEach(element1=>{
                    if (TableauTaches[element1-1].rangeT==false) {
                            verifTAnt=false
                    }
                })
                //Si toutes ces taches antérieurs ont bien été rangé on range l'element
                if(verifTAnt){
                    //Pour placer notre tache aprés celle qui termine apres toute les autres
                    element.tachesAnt.forEach(element2=>{
                        if (TableauTaches[element2-1].finT>=element.debutT){
                            element.debutT=TableauTaches[element2-1].finT
                            element.finT=element.dureeT+element.debutT
                            element.rangeT=true
                            element.NomtacheAnt=element2.nomT
                        }
                    })
                }
            }
            //Pour définir la durée du projet à chaque fois qu'une tache y est ajoutée
            if(element.finT>dureeProj){
                dureeProj=element.finT
            }
            //Pour vérifier que toute les taches ont bien été rangé.
            if(element.rangeT==false){
                verif=true
            }
        });
    }
    // Pour creer un calendrier dans le diagramme de gantt
    var diagramme=document.querySelector('.diagramme')
    var posXX=diagramme.querySelector('.posX')
    diagramme.removeChild(posXX)
    var posX=document.createElement('div')
    posX.classList.add('posX')
    diagramme.appendChild(posX)
    datepro=new Date(projetChoisi.created_at)
    console.log("Voici la date"+datepro);
    jour=datepro.getDay()
    console.log(jour);

    for (let index = 0; index <= dureeProj; index++) {
        var posXX=document.createElement('span')
        posXX.setAttribute('id','posX')
        posXX.setAttribute('title',''+datepro)
        let sema= ['D','L','M','M','J','V','S']
        posXX.innerHTML=""+sema[jour]
        posXX.style.width=""+(100/dureeProj)+"%";
        posX.appendChild(posXX)
        datepro=new Date(Date.parse(datepro)+86400000)
        jour++
        if (jour==7) { jour=0}
        
    }

    // var posXSpan=document.querySelectorAll('#posX')

    // Pour dessiner du tableau les elements
    var nbr=0
    var nbr2=1
    document.querySelector('.lg').innerHTML=""
    TableauTaches.forEach(element => {
        element.verifTAnt=false
    nbr++
    nbr2++
    if (nbr2==8) {nbr2=1}

    var newLink = document.createElement('span');
    var newLink2 = document.createElement('div');
    var newLink3 = document.createElement('div');
    var newLinkText = document.createTextNode(" "+nbr);
    newLink.id = 'lg'+nbr2;
    // newLink.href = 'http://www.siteduzero.com';
    newLink.title = ''+1+'';
    // newLink.setAttribute('tabindex', '10');
    newLink.appendChild(newLinkText);
    newLink2.appendChild(newLink);
    newLink3.appendChild(newLink2);
    
    //Pour definir la longueur ainsi que la position de chaque elements
    document.querySelector('.lg').appendChild(newLink3);
    console.log("debut "+((element.debutT*100)/dureeProj)+"duree "+((100*element.dureeT)/dureeProj)+" "+dureeProj);
    newLink3.style.transform="translate("+((element.debutT*100)/dureeProj)+"%,0)";
    newLink2.style.width=""+((100*element.dureeT)/dureeProj)+"%";

    });
    TabTacheData= new Array()
    console.log('le tableau est rangéé')
    TableauTaches.forEach(elementTab => {
        console.log(elementTab.tacheAnt);
        console.log(elementTab.NomtacheAnt);
        console.log("VOILA");
        var dat=new TacheData(elementTab.nomT, elementTab.dureeT ,elementTab.tacheAnt ,elementTab.NomtacheAnt,projetChoisi.id )
        TabTacheData.push(dat)
   });
   var proT=document.querySelector("#proT")

   proT.value=JSON.stringify(TabTacheData)
   
   console.log(document.querySelector("#proT").value);

}



const tabProjDes=(projetMezima, tacheMezima)=>{

    
    const ecrireProjet=(element)=>{
        newLinkText = document.createTextNode("  ");
        var divProjet = document.createElement('div');
        divProjet.classList.add("projet");
        var divEntete=document.createElement('div');
        divEntete.classList.add("entete")
        var divCorps = document.createElement('div');
        divCorps.classList.add("corps");
        divProjet.appendChild(divEntete);
        divProjet.appendChild(divCorps);
    
        var divTitreProjet = document.createElement('div');
        divTitreProjet.classList.add("titreProjet");

        newLinkText = document.createTextNode(" "+element.nomProjet);
        divTitreProjet.appendChild(newLinkText)
        
        var divVoirDescrip=document.createElement('div');
        divVoirDescrip.classList.add("voirDescrip")
        divEntete.appendChild(divTitreProjet)
        divEntete.appendChild(divVoirDescrip)
    
        var divBurger = document.createElement('div');
        divBurger.classList.add("burger-croix");
        console.log(divBurger);
        var divLine1=document.createElement('div');
        divLine1.classList.add("line1")
        var divLine3=document.createElement('div');
        divLine3.classList.add("line3")
        divBurger.appendChild(divLine1)
        divBurger.appendChild(divLine3)
    
        divVoirDescrip.appendChild(divBurger)
    
        var divDescrip = document.createElement('div');
        divDescrip.classList.add("descrip");
        newLinkText = document.createTextNode(" Description  : "+element.description);
        divDescrip.appendChild(newLinkText)

        var divClient=document.createElement('div');
        divClient.classList.add("client")
        newLinkText = document.createTextNode(" Client "+element.nomClient+"   / Service :  "+element.nomService);
        divClient.appendChild(newLinkText)
        var divPourcen=document.createElement('div');
        divPourcen.classList.add("pourcen")
        divPourcen.innerHTML="voire plus"

        divPourcen.addEventListener('click',function (e) {
            TableauTaches= new Array()
            dureeProj=0
            this.element=element
            lgd=document.querySelector('.lgd')
            lgd.innerHTML=""+element.nomProjet
            var lumen=document.querySelector('.lumen')
            lumen.innerHTML=""

            formulaire=document.createElement('form')
            lumen.appendChild(formulaire)

            divFormNom=document.createElement('div')
            divFormDuree=document.createElement('div')
            divBoutonAjou=document.createElement("div")
            formulaire.appendChild(divFormNom)
            formulaire.appendChild(divFormDuree)
            formulaire.appendChild(divBoutonAjou)
            divFormNom.classList.add("formNomT")
            divFormDuree.classList.add("formDureeT")
            divBoutonAjou.setAttribute('id','boutonAjou')
            divBoutonAjou.innerHTML="Ajouter"
          
            labelNom=document.createElement("label")
            // labelNom.for="nomT"
            labelNom.innerHTML="Nom : "
            labelNom.classList.add("labelNom")
            inputNom=document.createElement('input')
            inputNom.type="text"
            inputNom.id="nomT"
            inputNom.name="user_name"

            divFormNom.appendChild(labelNom)
            divFormNom.appendChild(inputNom)
            
            labelDuree=document.createElement("label")
            // labelNom.for="nomT"
            labelDuree.innerHTML="Duree : "
            labelDuree.classList.add("labelDuree")
            inputDuree=document.createElement('input')
            inputDuree.type="text"
            inputDuree.id="dureeT"
            inputDuree.name="user_mail"

            divFormDuree.appendChild(labelDuree)
            divFormDuree.appendChild(inputDuree)


            divBoutonAjou.addEventListener('click',()=>{
                if(inputDuree.value>0){
                    var tach=new Tache(inputNom.value,inputDuree.value)//tableau de valeur
                    TableauTaches.push(tach)
                    TableauTaches.forEach(element =>{
                        // element.numeroT=TableauTaches.indexOf(element)
                        var boutonSup= new Suppression(element)
                        boutonSup.boutSup.classList.add("suppressionT")
                        boutonSup.boutSup.addEventListener('click',()=>{
                            
                            this.element=element
                            var n=TableauTaches.indexOf(this.element)
                            console.log("Supprime"+n)
                            while(n<TableauTaches.length){
                                TableauTaches[n]=TableauTaches[n+1];
                                n++
                            }
                            TableauTaches.pop();
                            afficheT(TableauTaches)
                        })
                        element.boutonSup=boutonSup
                        afficheT(TableauTaches) 
                    });
                }    
            });



            var divTaches=document.createElement('div')
            divTaches.classList.add("taches")
            lumen.appendChild(divTaches)

            divBoutonDessin=document.createElement("div")
            divBoutonDessin.classList.add('boutDessin')
            lumen.appendChild(divBoutonDessin)
            var boutDessin=document.querySelector('.boutDessin')
            boutDessin.addEventListener('click', ()=>{
                dessinTab()
            })



            divBoutonDessin.innerHTML=" Dessiner la representation de Gantt "
            var diagramme=document.createElement('div')
            diagramme.classList.add('diagramme')
            lumen.appendChild(diagramme)

            var lg=document.createElement('div')

            lg.classList.add('lg')
            var posX=document.createElement('div')
            posX.classList.add('posX')
            diagramme.appendChild(lg)
            diagramme.appendChild(posX)

            for (let index = 0; index <= 20; index++) {
                var posXX=document.createElement('span')
                posXX.setAttribute('id','posX')
                posXX.innerHTML=""+index
                posX.appendChild(posXX)
            }
            // let tabTaches= new Array()
            // var nb=0

            // Pour recueuillir l'id du proget donc on va afficher les taches
            projetChoisi=element

            // Pour afficher les taches du projet qui a été selectionné
            tacheMezima.forEach(elementTache => {
                if(elementTache.projet_mezima_id==element.id){

                    var tach=new Tache(elementTache.nomTache,elementTache.dureeTache)//tableau de valeur
                    tach.NomtacheAnt=""+elementTache.tacheAnt
                    TableauTaches.push(tach)
                    TableauTaches.forEach(element =>{
                        // element.numeroT=TableauTaches.indexOf(element)
                        var boutonSup= new Suppression(element)
                        boutonSup.boutSup.classList.add("suppressionT")
                        boutonSup.boutSup.addEventListener('click',()=>{
                            
                            this.element=element
                            var n=TableauTaches.indexOf(this.element)
                            console.log("Supprime"+n)
                            while(n<TableauTaches.length){
                                TableauTaches[n]=TableauTaches[n+1];
                                n++
                            }
                            TableauTaches.pop();
                            // afficheT(TableauTaches)
                        })
                        element.boutonSup=boutonSup
                        // afficheT(TableauTaches) 
                    });
                    dessinTab()       
                }   
            });
            TableauTaches.forEach(element =>{
                console.log("ZZZZZZZZZZZZZ");
                TableauTaches.forEach(element2 =>{
                    if (element.NomtacheAnt==element2.nomT) {
                        element.tachesAnt.push(TableauTaches.indexOf(element2))
                    }
                })
            })
            afficheT(TableauTaches)
            // var tach=new Tache(nomT.value,dureeT.value)//tableau de valeur
            // TableauTaches.push(tach)
            TableauTaches.forEach(element =>{
                // element.numeroT=TableauTaches.indexOf(element)
                var boutonSup= new Suppression(element)
                boutonSup.boutSup.classList.add("suppressionT")
                boutonSup.boutSup.addEventListener('click',()=>{
                    
                    this.element=element
                    var n=TableauTaches.indexOf(this.element)
                    console.log("Supprime"+n)
                    while(n<TableauTaches.length){
                        TableauTaches[n]=TableauTaches[n+1];
                        n++
                    }
                    TableauTaches.pop();
                    afficheT(TableauTaches)
                })
                element.boutonSup=boutonSup
                afficheT(TableauTaches) 
            });

        })

        divCorps.appendChild(divDescrip)
        divCorps.appendChild(divClient)
        divCorps.appendChild(divPourcen)
    
        var lumen=document.querySelector('.lumen')
        console.log(lumen);
        lumen.appendChild(divProjet)
    
    }

    console.log(projetMezimas);

    this.projetMezima=projetMezima
    this.projetMezima.forEach(element => {
        console.log(element.nomProjet);
        ecrireProjet(element)
    });

    const croixVu=()=>{
        const croix= document.querySelectorAll('.burger-croix');
        croix.forEach(element => {
            element.addEventListener('click',()=>{
                projet=element.parentNode.parentNode.parentNode
                console.log(projet)
                descrip=projet.querySelector('.descrip')
                descrip.classList.toggle('show')
                pourcen=projet.querySelector('.pourcen')
                pourcen.classList.toggle('show')
                element.classList.toggle('toggle');
            });
        });    
    }
    croixVu();
    
    // var divCorps = document.createElement('div');
    // var numeroT=document.createElement('div');
    // numeroT.innerHTML=" NUMERO : "+(element.numeroT+1);
    // var tache = document.createElement('div');
    // tache.classList.add('tache');
    // var newLinkText ;



    const rechercheService=(service)=>{
      
        im=document.querySelector('.lgd')
        im.innerHTML=""+service

        var lumen=document.querySelector('.lumen')
        lumen.innerHTML=""
        this.projetMezima.forEach(element => {
            if(service==element.nomService){
                console.log(element.nomProjet);
                ecrireProjet(element)
            }
        });
        croixVu();
    }
    const rechercheZone=(zone)=>{
            
        im=document.querySelector('.lgd')
        im.innerHTML=""+zone

        var lumen=document.querySelector('.lumen')
        lumen.innerHTML=""
        this.projetMezima.forEach(element => {
            if(zone==element.nomZone){
                console.log(element.nomProjet);
                ecrireProjet(element)
            }
        });
        croixVu();
    }
        
    // Pour les evenement dans le sous menu du menu1
    var submenu=document.querySelectorAll('.tabs-menu a')
    var submenus=document.querySelector(".sub-menus")
    
    for(var i=0;i<submenu.length;i++){
        submenu[i].addEventListener('click',function (e) {
            rechercheService(this.getAttribute('href').substring(1, (this.getAttribute('href')).length))
            console.log(this.getAttribute('href').substring(1, (this.getAttribute('href')).length))

            document.querySelector('.item .sous.active').classList.remove('active')
            document.querySelector('nav li.active').classList.remove('active')
                    
        })
        submenu[i].addEventListener('mouseover',function(e){
            
            // var div= this.parentNode.parentNode		
            var li=this.parentNode
            
            li.classList.add('active')
            submenus.querySelector(this.getAttribute('href')).classList.add('vu')	
        })
        submenu[i].addEventListener('mouseout',function(e){
                    
            // var div= this.parentNode.parentNode		
            var li=this.parentNode
            
            li.classList.remove('active')
            submenus.querySelector(this.getAttribute('href')).classList.remove('vu')	
        })
    }



            
        // Pour la gestions des evenements sur les elements de la map.
        var map=document.querySelector('#map')
        var paths=map.querySelectorAll('.map_image a')
        var links=map.querySelectorAll('.map_liste a')

        paths.forEach(function(path){
            // pour ajouter la class is-active sur la zone survolée
            path.addEventListener('mouseenter',function (e){
                var id=this.id.replace('GA','')
            
                document.querySelector('#liste' + id).classList.add('is-active')
                document.querySelector('#GA'+ id ).classList.add('is-active')
            })
            // pour enlever la class is-active lorsqu'on sort de la zone de survol
            path.addEventListener('mouseleave',function(e){
                map.querySelectorAll('.is-active').forEach(function(item){
                    item.classList.remove('is-active')
                })
            })
            path.addEventListener('click',function(e){
                console.log(" "+path.getAttribute('xlink:title'));
                rechercheZone(path.getAttribute('xlink:title'))

            })
        })
        links.forEach(function(link){
            // pour ajouter la class is-active sur la zone survolée
            link.addEventListener('mouseenter',function (e){
                var id=this.id.replace('liste','')
                document.querySelector('#liste' + id).classList.add('is-active')
                document.querySelector('#GA'+ id ).classList.add('is-active')
            })

            // pour enlever la class is-active losque nous sortons de la zone survolée
            link.addEventListener('mouseleave',function(e){
                map.querySelectorAll('.is-active').forEach(function(item){
                    item.classList.remove('is-active')
                })
            })
            link.addEventListener('click',function(e){
                console.log(this.getAttribute('href').substring(1, (this.getAttribute('href')).length));
                rechercheZone(this.getAttribute('href').substring(1, (this.getAttribute('href')).length))
                document.querySelector('.item .sous.active').classList.remove('active')
                document.querySelector('nav li.active').classList.remove('active')
            })
        })
}


var az=12

//Pour les elements du burger menu
const navSlide=()=>{
	const burger=document.querySelector('.burger');
	const nav=document.querySelector('.nav-links');
	const navLinks=document.querySelectorAll('.nav-links li');
	
	burger.addEventListener('click',()=>{
		nav.classList.toggle('nav-active');
	
		navLinks.forEach((link, index) => {
			if(link.style.animation){
				link.style.animation='';
			}else{
					link.style.animation=`navLinkFade 2s ease forwards ${index/5+0.3}s`;
			}
		});
		burger.classList.toggle('toggle')
	}); 
	
}
navSlide();


// cette partie du code va gerer les click sur le menu.
var navLinks=document.querySelectorAll('.nav-links a')
var item=document.querySelector('.item')
const burger=document.querySelector('.burger');
const nave=document.querySelector('.nav-links');
const navLins=document.querySelectorAll('.nav-links li');
	
for(var i=0;i<navLinks.length;i++){
    navLinks[i].addEventListener('click',function(e){
        var li=this.parentNode
        var fleche=li.querySelector('.burger-fleche')
        var div=this.parentNode.parentNode
        var verif=true
        console.log("click")
        for(var i=0;i<navLinks.length;i++){
            if(navLinks[i].parentNode.classList.contains("active")){
                verif=false
                if(!(li.classList.contains('active'))){
                    console.log("A")
                    div.querySelector('.nav-links .active').classList.remove('active')
                    li.classList.add('active')
                    
                    div.querySelector('.burger-fleche.toggle').classList.remove('toggle')
                    fleche.classList.add('toggle');

                    item.querySelector('.item .sous.active').classList.remove('active')
                    item.querySelector(this.getAttribute('href')).classList.add('active')
                    break
                }else{
                    console.log("B")
                    item.querySelector('.item .sous.active').classList.remove('active')
                    li.classList.remove('active')
                    fleche.classList.remove('toggle');
                    return false
                }
            }
        }
        if(verif){
            console.log("C")
            li.classList.add('active')
            fleche.classList.add('toggle');
            item.querySelector(this.getAttribute('href')).classList.add('active')    
        }      
		
	// cette partie va permettre de desactiver le durger menu et son icone une fois cliqué sur
	// un des éléments du burger menu.
	
		nave.classList.remove('nav-active');
		
		navLins.forEach((link) => {
			if(link.style.animation){
				link.style.animation='';
			}
		});
		burger.classList.remove('toggle');		
    })
}