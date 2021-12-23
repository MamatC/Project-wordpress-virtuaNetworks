

<main class="container">
        <!-- ============== Navigation web ============== -->
        <?php get_header(); ?>
    
        <div class="bgheader">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000" data-bs-pause="false">
        <div class="carousel-inner">
            <?php $header = get_field('header'); ?>
            <div class="carousel-item active">
                <h1 class="accroches"><?php echo $header['accroche_1']; ?></h1>
            </div>
            <div class="carousel-item">
                <h1 class="accroches"><?php echo $header['accroche_2']; ?></h1>
            </div>
            <div class="carousel-item">
                <h1 class="accroches"><?php echo $header['accroche_3']; ?></h1>
            </div>
        </div>
    </div>


<!-- 
        <h1>Un accompagnement sur-mesure pour votre infrastructure informatique</h1>
        <h1>Des services fiables et sécurisés pour votre entreprise</h1>
        <h1>Une expertise aux services des systèmes d'information</h1> -->
    </div>
        
    
    
</header>



<div id="content" class="content-area">


<section>
        <!-- ============== Presentation  ============== -->

        <section class="presentation">

        
        <?php $presentation = get_field('champs_presentation'); ?>

                <h1><?php echo $presentation['presentation']; ?></h1>
        
                <div class="textblack">
                    <p><?php echo $presentation['paragraphe_1']; ?>
                        
                    </p>
                </div>

                <div class="textgray">
                    <p>
                        <?php echo $presentation['paragraphe_2']; ?>
                    </p>
                    <p>
                        <?php echo $presentation['paragraphe_3']; ?>
                    </p>
                </div>

        </section>

        <!-- ============== Conseil & Prestations ============== -->

        <?php $presentation = get_field('champs_conseils_et_prestation'); ?>

        <section class="prestations">

            <h1 class="title-web"><?php echo $presentation['conseils']; ?></h1>
            <h1 class="title-mobile">Conseil</h1>

            <div class="flex-prestations">
                <div class="bgwhite">
                    <p><?php echo $presentation['paragraphe_1']; ?>
                    </p>
                </div>

                <h1 class="title-mobile">Prestations</h1>
                <div class="bgwhite">
                    <p>
                        <?php echo $presentation['paragraphe_2']; ?>
                    </p>
                </div>
            </div>
        </section>

        <!-- ============== Solutions ============== -->
        
        <!-- ============== Services managés ============== -->

        <section class="services">

            <h1>Solutions</h1>

            <div class="flex">
                <div class="services-img-web">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/4Slice02.jpg" alt="Cables ethernet">
                </div>
                <div class="blocktest">
                    <h2>Services managés</h2>
                    <p>La supervision et la sauvegarde des données constituent l’assurance-vie d’une entreprise. 
                    Nous vous proposons de gérer cette partie stratégique de votre système d’information 
                    avec notre gamme de services managés. Vous profitez ainsi d’une sauvegarde rapide 
                    et fiable de vos données, qui sont alors stockées dans des environnements sécurisés et maîtrisés.
                    </p>
                </div>
            </div>

            <div class="cards">
                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-usb-2-96.svg" alt="Clé USB"></img>
                    <h3>VnBackup</h3>
                    <p class="cards-text">Sauvegardez vos serveurs et vos données sur une infrastructure mutualisée 
                    ou privative selon vos besoins.

                    Qu’elles se trouvent sur un serveur physique ou une machine virtuelle, 
                    nous sauvegardons vos données dans un environnement sécurisé 
                    dans nos datacenters avec une rétention des données adaptée à vos besoins.
                    </p>
                </div>

                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-document-statistique-96.svg" alt="Document statistiques"></img>
                    <h3>VnWatch</h3>
                    <p class="cards-text">
                    Nous pouvons superviser vos environnements et mettre en place des alertes 
                    en fonction de vos demandes, vous permettant de réagir rapidement 
                    en cas de problèmes sur ceux-ci.
                    </p>
                </div>

                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-bouée-de-sauvetage-96.svg" alt="Bouée de sauvetage"></img>
                    <h3>VnRescue</h3>
                    <p class="cards-text">
                        Vous souhaitez sécuriser l’ensemble de votre infrastructure 
                        informatique en la dupliquant sur un second environnement ? 
                        Virtua-Networks vous propose d’héberger dans ses datacenters 
                        votre environnement de secours, disponible et prêt 
                        à prendre le relai dès que vous en aurez besoin.
                    </p>
                </div>
            </div>

        </section>

        <hr>

        <!-- ============== Reseaux interconnexions ============== -->

        <section class="reseaux">
            <div class="flex">
                <div class="blocktest">
                    <h2>Réseaux interconnexions</h2>
                    <p>Afin de vous connecter à l’ensemble de vos applications de 
                    manière optimale et à Internet, nous vous proposons notre gamme de services réseaux.
                    Connectez-vous grâce aux lignes xDSL, avec la Fibre Optique 
                    ou encore avec la technologie hertzienne suivant vos besoins et votre éligibilité !
                    </p>
                </div>
                <div class="reseaux-img-web">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/3Slice01.jpg" alt="Serveur informatique">
                </div>
            </div>

            <div class="cards">
                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons-1.svg" alt="Branches informatiques"></img>
                    <h3>VnAir</h3>
                    <p class="cards-text">Vous souhaitez connecter entre eux plusieurs sites sur un seul et même réseau ? 
                        Bénéficier d’un accès Internet de qualité dans une zone où l’accès aux réseaux 
                        cuivrés est partiel ou de mauvaise qualité ? 
                        Plus besoin de recourir à des connexions VPN point à point ou de faire tirer des câbles.

                        Avec sa nouvelle offre basée sur la technologie AirMax, 
                        Virtua-Networks relie vos sites dans une réseau MAN 
                        via une connexion Wi-Fi Haut Débit à 5 GHz sécurisée.
                    </p>
                </div>

                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-wi-fi-96.svg" alt="Wi-Fi"></img>
                    <h3>VnAccess</h3>
                    <p class="cards-text">
                        Mise en place de lignes ADSL, SDSL et VDSL2 pour les entreprises 
                        ayant besoin de débits professionnels, avec des liens 
                        facilement intégrables et se basant sur une technologie éprouvée.
                    </p>
                </div>
                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons-1.svg" alt="Branches informatiques"></img>
                    <h3>VnFibre</h3>
                    <p class="cards-text">
                        Pour des connexions fiables plus performantes avec des débits très élevés et stables, 
                        nous vous fournissons une connexion au réseau en Fibre Optique.

                        Vous bénéficiez ainsi d’une vitesse d’accès fulgurante, 
                        tant au réseau Internet qu’à vos applications hébergées chez Virtua-Networks.
                    </p>
                </div>
            </div>
        </section>

        <hr>

        <!-- ============== Hébergement ============== -->
        
        <section class="hebergement">
            <div class="flex">
                <div class="hebergement-img-web">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/imagesSite/2Slice01.jpg" alt="Serveur informatique">
                </div>
                <div class="blocktest">
                    <h2>Hébergement</h2>
                    <p>À l’aide d’une architecture entièrement virtualisée et redondée, 
                        Virtua-Networks vous accompagne dans le développement de votre activité 
                        en vous débarrassant des contraintes liées à la gestion quotidienne de l’IT, 
                        qu’il s’agisse de vous fournir une infrastructure complète 
                        ou des services sur mesure suivant vos besoins.
                    </p>
                </div>
            </div>

            <div class="cards">
                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-ssd-96.svg" alt="Espace de stockage"></img>
                    <h3>VnIaas</h3>
                    <p class="cards-text">Virtua-Networks met à votre disposition une <span class="red">architecture cloud complète</span> virtualisée : 
                        serveurs, espace de stockage, réseaux dédiés… 
                        Le tout est entièrement accessible et manageable depuis un accès réseau sécurisé, 
                        et l’ensemble de vos machines virtuelles est <span class="red">supervisé, 
                        sauvegardé et dupliqué</span> sur nos différents sites afin de garantir une totale sécurité à l’ensemble.
                    <span class="space">Dans cette offre <span class="red">sur mesure</span>, vous pouvez choisir le nombre de vCPU, 
                        la quantité de RAM, le volume d’espace de stockage et son type, 
                        pour chaque machine ou pour l’ensemble de celles-ci : c’est vous qui décidez !</span>
                    <span class="space">Que vous souhaitiez une infrastructure mutualisée ou des hyperviseurs dédiés, 
                        contactez-nous, notre équipe d’experts vous conseillera sur le type 
                        et le nombre de machines virtuelles qu’il vous faut.</span>
                    </p>
                </div>
                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-globe-96.svg" alt="Globe terrestre"></img>
                    <h3>VnSaas</h3>
                    <p class="cards-text">
                        Pour héberger votre serveur Web ou votre application métier afin 
                        de les rendre <span>disponibles de tout temps et en tout lieu</span>, 
                        nous vous proposons cette offre basée sur nos environnements Datacenter sécurisés.

                        Vous bénéficiez ainsi d’un <span>accès métier sur la plateforme</span>, 
                        et nous nous occupons des services managés, pour que vous puissiez 
                        vous consacrer à l’essentiel avec plus de sérénité.
                    </p>
                </div>
            </div>
        </section>

        <hr>

        <!-- ============== Cloud ============== -->

        <section class="cloud">
            <div class="flex">
                <div class="blocktest">
                    <h2>Cloud</h2>
                    <p>Virtua-Networks vous propose son offre cloud complète, 
                    incluant l’ensemble des services de ses offres afin de simplifier et 
                    optimiser la gestion de l’informatique pour les entreprises.
                    </p>
                </div>
                <div class="cables-img-web">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/1SliceRouge04.jpg" alt="Cables informatique">
                </div>
            </div>
            <div class="cards">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-cloud-96.svg" alt="Espace de stockage"></img>
                <h3>VnCloud</h3>
                <p class="cards-text">L’offre cloud complète de Virtua-Networks. Celle-ci inclut l’ensemble de nos offres, 
                    vous permettant de simplifier et d’optimiser la gestion de l’informatique 
                    dans votre entreprise. En nous appuyant sur les meilleures offres de nos partenaires 
                    et sur des technologies développées en interne, nous vous fournissons le panel 
                    complet des services informatiques dont ont besoin les entreprises d’aujourd’hui et de demain.
                    En incluant la connexion Internet, la messagerie, le travail collaboratif, 
                    l’application métier, le partage et le stockage de données, ou encore le site web 
                    institutionnel ou marchand, l’offre VnCloud se substitue de manière souple et 
                    transparente à l’ensemble de votre infrastructure informatique traditionnelle 
                    tout en vous laissant la totale maîtrise des coûts, pour un Système d’Information 
                    stable, sécurisé, puissant et disponible !
                </p>
            </div>
        </section>

        <!-- ================================ Clients & Partenaires ================================ -->
        
            


        <section class="carousel-clients">
            <h1>Clients</h1>
            <div class="slider-container">
                <div class="images-clients">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/AfriqueTelecom_Logo_positif.webp" alt="Afrique Telecom">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/CCI_Yonne.webp" alt="CCI Yonne">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/FDJ.webp" alt="FDJ">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/habiteo-logo-color-white.webp" alt="Habiteo">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/La_Chaine_Meteo.webp" alt="La chaine météo">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/ldlc.webp" alt="LDLC">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/logo1.webp" alt="LUULEN">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/logo-invoxis.webp" alt="Invoxis">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/LOGO-OTSI.webp" alt="Otsi">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/logo-ymagis.webp" alt="Ymagis">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/msimond.webp" alt="Michel Simond">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/pagesjaunes-2.webp" alt="Pages Jaunes">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/Plastic_Omnium-2.webp" alt="Plastic Omnium">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/RAMSAY-1.webp" alt="Ramsay Générale de Santé">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosReferences/RFF.webp" alt="Réseau Ferré de France">
                </div>
            </div>
        </section>

        <section class="carousel-partenaires">
            <h1>Partenaires</h1>
            <div class="images-partenaires">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosContact/269-2694616_our-partners-dell-partner-direct-logo.jpg" alt="DELL Partner">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosContact/blob.png" alt="DELL EMC">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosContact/logo_fortinet.png" alt="FORTINET">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosContact/1024px-HP_logo_2012.svg.png" alt="HP">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosContact/google-workspace-logo.png" alt="G SUITE">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosContact/1280px-Cisco_logo_blue_2016.svg.png" alt="CISCO">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosContact/veeam_logo_topaz-500.png" alt="VEEAM">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/logosContact/Vmware.svg.png" alt="VMware">
            </div>
        </section>

        <!-- ================================ Datacenter ================================ -->

        <section class="datacenter">
            <h1>Datacenter</h1>
                <img class="mobile-img" src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/datacenter1.webp" alt="Datacenter">
                <div class="black-squares">
                    <div class="equinix">
                        <img class="web-img" src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/datacenter1.webp" alt="Datacenter">
                        <h2><span>EQUINIX</span>  Saint-Denis</h2>
                        <p>Leader mondial de l’hébergement datacenter, 
                            le site de Saint-Denis est un datacenter de premier ordre, 
                            proposant le meilleur en termes de sécurité et de redondance, 
                            avec l’ensemble de la chaine technique le constituant entièrement doublée, 
                            redondée et supervisée.
                        </p>
                    </div>
                        <img class="mobile-img" src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/datacenter2.webp" alt="Datacenter">
                    <div class="virtuacenter">
                        <img class="web-img" src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/datacenter2.webp" alt="Datacenter">
                        <h2><span>VirtuaCenter</span>  Auxerre</h2>
                        <p>
                            Situé au coeur de la ville et à proximité de la gare, 
                            Virtua-Center est le nouveau Datacenter de Virtua-Networks, qui en est le propriétaire. 
                            Cette espace avec une capacité totale de 900 m² est le futur centre technologique 
                            de la région, permettant l’hébergement des infrastructures de 
                            Virtua-Networks mais aussi celle de ses clients.
                        </p>
                    </div>
                </div>
        </section>

        <!-- ================================ Contact ================================ -->

        <section class="contact">
            <h1>Contact</h1>
                <div class="main-contact">
                    <div class="info-contact">
                        <img class="logo-contact" src="<?php echo bloginfo("template_url"); ?>/assets/img/logos/logo-virtuanetwork.webp" alt="Logo Virtua Networks">
                        <ul>
                        <li>
                            <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/telephone-fill.svg" alt="Icône téléphone">
                            <p>
                                +33 (0) 1 86 95 94 95
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/at.svg" alt="Icône arobase">
                            <p>
                                info@virtua-networks.com
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/envelope-fill.svg" alt="Icône enveloppe">
                            <p>
                                24 rue des Champoulains, 89000 Auxerre
                            </p>
                        </li>
                        </ul>
                    </div>

                    <div class="form-contact">

                        <div class="top-contact">
                            <div>
                                <label for="name">
                                    Nom
                                </label>
                                <input type="text" name="name" id="name" required>
                            </div>
                            <div>
                                <label for="email">
                                    Email
                                </label>
                                <input type="email" name="email" id="email" required>
                            </div>
                        </div>

                        <div class="textarea-btn-contact">
                            <label for="story">
                                Message
                            </label>
                            <textarea name="story" id="story"></textarea>
                        </div>
                        <button>
                            Envoyer
                        </button>

                    </div>
                </div>
        </section>

        <!-- ================================ Footer ================================ -->
<?php get_footer(); ?>