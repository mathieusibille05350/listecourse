$/jQuery("document").ready(function () {
$("#header").load ("inclure/header.html");
$("#footer").load ("inclure/footer.html");

/*cree_sommaire("#tdm","h2 ,h3");
    valide_text_area();  
    aff_nb_caractere_a_saisir("mon_txt_area");*/
    
});

function ChangeOrientation() {

    $(".container-media > div").each(function () {

        if ($(this).hasClass('vignette')) {
            $(this).removeClass('vignette').addClass('liste');
            $("#switch i").removeClass('fa-file-image').addClass('fa-list-ul');
        }
        else {
            $(this).removeClass('liste').addClass('vignette');
            $("#switch i").removeClass('fa-list-ul').addClass('fa-file-image');
        }
    });
}

function cree_sommaire(position_aff, niveau_h) {

  
    var tdm = '<ul class="tdm">';           // je debute ma liste
    var nb = 1;                             // numero de lien a partir de 1
    $(niveau_h).each(function () {          // je boucle sur les balise defini en niveau_h  
        $(this).attr('id', 't' + nb); // je modifie l'attribut pour rajouter le lien # dans les H trouvés
        tdm = tdm + '<li><a href="#t' + nb + '">' + $(this).text() + '</a></li>'; // je cree ma liste et les liens
        nb = nb + 1;                 // j'augmente mon idi pour mes liens'
        
    });

    tdm = tdm + '</ul>';                    // je ferme mon tableau

    $(position_aff).html(tdm);              // j'affiche la liste dans le div TDM

}
// fonction de lydia pour bascule vignette
$( document ).ready(function (){
    
    //Début switch vignettes/media
        $('#switcher').click(function(){

                $('.container_vignettes .row > div').each(function () {

                        if ($(this).hasClass('card')) {
                                $(this).removeClass('card').addClass('media');
                                $("#switcher").removeClass('fa-list-ul').addClass('fa-file-image-o');
                        }
                        else {
                                $(this).removeClass('media').addClass('card');
                                $("#switcher").removeClass('fa-file-image-o').addClass('fa-list-ul')
                        }

                });


        });

//Fin switch vignettes/media

});

function nom_fichier_html_affiche() {
    /*  ici je chope le nom du fichier dans le chemin de repertoire */
    $('header').load('header.html', function () {
        var mon_url = window.location.pathname; // le fichier chargé
        var mon_tab = mon_url.split('/'); // je transforme chaque dossier en données tabulaire  
        mon_url = mon_tab.pop(); // je chope avec pop la derniere données tabulaire donc le nom de fichier
        return mon_url;
    });
}

    function surbrillance_item_menu_active(l_url) {
        nom_fichier_html_affiche(); // on cherche le fichier ouvert 
        $('nav li a').each(function () { // on boucle sur chaque element a dans li dans nav
            var href_ec = $(this).attr('href'); //on verifie quel href est celui qui correspond au fichier ouvert   
            if (href_ec == l_url) { // si les deux correspondent ->
                $(this).parent().addClass('active'); // hop je lui met l'attribut attr et donc il devient actif en fonction du css
            }
        });

    }

function valide_text_area()
    {

    $("form").submit(function (event)
    {     // je recuperer le continue de form quand je click sur submit
                                                //  event.preventDefault(); // bloque le click du bouton submit afin de ne pas envoyer le formulaire et on valide 
        mon_text = $("mon_text_area").val();    //je recupere la valeur du champ mon txt area par son nom : mon_txt_area dans le form html grace a .val()


        return false;                           // je valide le click et le formulaire sera envoyé, si on met false, le formulaire ne part pas 
                                                // on peut meme ecrire return(condition a verifier); ex : verifier longueur de plus de 15 caracteres return (mon_text_area.lenght<=15)
      })
    };

function aff_nb_caractere_a_saisir(zone) {
    alert(zone);
    var long_voulue = 150;
    $(zone).keyup(function ()
        {
            var nb_caractere = $(this).val().length;
            
            console.log("il reste :" + long);
            $(longueur).txt(long);
        
        $("#longueur").text(longueur);
    }
    )
    };
