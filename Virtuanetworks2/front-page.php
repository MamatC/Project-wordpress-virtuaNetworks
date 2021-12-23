<main class="container">

    </div>
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

        <section class="presentation" id="presentation">

        
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

        <section class="prestations"  id="conseil">

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

        <section class="section"  id="solutions">

            <h1>Solutions</h1>

            <div class="flex">
                <div class="solutions-img-web">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/4Slice02.jpg" alt="Cables ethernet">
                </div>
                <div class="blocktest">
                <?php $solution = get_field('champs_solutions'); ?>
                    <h2><?php echo $solution['solutions_titre']; ?></h2>
                    <p><?php echo $solution['solutions_paragraphe']; ?>
                    </p>
                </div>
            </div>

            <div class="cards">
                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-usb-2-96.svg" alt="Clé USB"></img>
                    <h3><?php echo $solution['vnbackup_titre']; ?></h3>
                    <p class="cards-text"><?php echo $solution['vnbackup_paragraphe']; ?>
                    </p>
                </div>

                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-document-statistique-96.svg" alt="Document statistiques"></img>
                    <h3><?php echo $solution['vnwatch_titre']; ?></h3>
                    <p class="cards-text">
                    <?php echo $solution['vnwatch_paragraphe']; ?>
                    </p>
                </div>

                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-bouée-de-sauvetage-96.svg" alt="Bouée de sauvetage"></img>
                    <h3><?php echo $solution['vnrescue_titre']; ?></h3>
                    <p class="cards-text">
                    <?php echo $solution['vnrescue_paragraphe']; ?>
                    </p>
                </div>
            </div>

        </section>

        <hr>

        <!-- ============== Reseaux interconnexions ============== -->

        <section class="section"  id="presentation">
        <?php $reseaux = get_field('champs_reseaux_interconnexions'); ?>
            <div class="flex">
                <div class="blocktest">
                    <h2><?php echo $reseaux['reseaux_interconnexions_titre']; ?></h2>
                    <p><?php echo $reseaux['reseaux_interconnexions_paragraphe']; ?>
                    </p>
                </div>
                <div class="solutions-img-web">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/3Slice01.jpg" alt="Serveur informatique">
                </div>
            </div>

            <div class="cards">
                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons-1.svg" alt="Branches informatiques"></img>
                    <h3><?php echo $reseaux['vnair_titre']; ?></h3>
                    <p class="cards-text">
                    <?php echo $reseaux['vnair_paragraphe']; ?>
                    </p>
                </div>

                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-wi-fi-96.svg" alt="Wi-Fi"></img>
                    <h3><?php echo $reseaux['vnaccess_titre']; ?></h3>
                    <p class="cards-text">
                        <?php echo $reseaux['vnaccess_paragraphe']; ?>
                    </p>
                </div>
                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons-1.svg" alt="Branches informatiques"></img>
                    <h3><?php echo $reseaux['vnfibre_titre']; ?></h3>
                    <p class="cards-text">
                        <?php echo $reseaux['vnfibre_paragraphe']; ?>
                    </p>
                </div>
            </div>
        </section>

        <hr>

        <!-- ============== Hébergement ============== -->
        
        <section class="section">
        <?php $hebergement = get_field('champs_hebergement'); ?>
            <div class="flex">
                <div class="solutions-img-web">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/imagesSite/2Slice01.jpg" alt="Serveur informatique">
                </div>
                <div class="blocktest">
                    <h2><?php echo $hebergement['hebergement_titre']; ?></h2>
                    <p><?php echo $hebergement['hebergement_paragraphe']; ?>
                    </p>
                </div>
            </div>

            <div class="cards">
                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-ssd-96.svg" alt="Espace de stockage"></img>
                    <h3><?php echo $hebergement['vniaas_titre']; ?></h3>
                    <p class="cards-text"><?php echo $hebergement['vniaas_paragraphe']; ?>
                    </p>
                </div>
                <div>
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-globe-96.svg" alt="Globe terrestre"></img>
                    <h3><?php echo $hebergement['vnsaas_titre']; ?></h3>
                    <p class="cards-text">
                    <?php echo $hebergement['vnsaas_paragraphe']; ?>
                    </p>
                </div>
            </div>
        </section>

        <hr>

        <!-- ============== Cloud ============== -->

        <section class="section">
        <?php $cloud = get_field('champs_cloud'); ?>
            <div class="flex">
                <div class="blocktest">
                    <h2><?php echo $cloud['cloud_titre']; ?></h2>
                    <p><?php echo $cloud['cloud_paragraphe']; ?>
                    </p>
                </div>
                <div class="solutions-img-web">
                    <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/1SliceRouge04.jpg" alt="Cables informatique">
                </div>
            </div>
            <div class="card">
                <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/icons8-cloud-96.svg" alt="Espace de stockage"></img>
                <h3><?php echo $cloud['vncloud_titre']; ?></h3>
                <p class="cards-text"><?php echo $cloud['vncloud_paragraphe']; ?>
                </p>
            </div>
        </section>

        <!-- ================================ Clients & Partenaires ================================ -->
        
            


        <section class="carousel-clients"  id="references">
            <h1>Clients</h1>
            <div class="slider-container">
            <?php echo do_shortcode('[logocarousel id="320"]'); ?>
                <div class="images-clients flavoursContainer">
                    <!-- <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/AfriqueTelecom_Logo_positif.webp" alt="Afrique Telecom">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/CCI_Yonne.webp" alt="CCI Yonne">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/FDJ.webp" alt="FDJ">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/logo-habiteo.png" alt="Habiteo">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/La_Chaine_Meteo.webp" alt="La chaine météo">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/ldlc.webp" alt="LDLC">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/logo1.webp" alt="LUULEN">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/logo-invoxis.webp" alt="Invoxis">
                    <img src="<?php // echo bloginfo("template_url"); ?>/assets/img/logosReferences/LOGO-OTSI.webp" alt="Otsi">
                    <img src="<?php // echo bloginfo("template_url"); ?>/assets/img/logosReferences/logo-ymagis.webp" alt="Ymagis">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/msimond.webp" alt="Michel Simond">
                    <img src="<?php // echo bloginfo("template_url"); ?>/assets/img/logosReferences/pagesjaunes-2.webp" alt="Pages Jaunes">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/Plastic_Omnium-2.webp" alt="Plastic Omnium">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/RAMSAY-1.webp" alt="Ramsay Générale de Santé">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosReferences/RFF.webp" alt="Réseau Ferré de France"> -->
                </div>
            </div>

        </section>

        <section class="carousel-partenaires">
            <h1>Partenaires</h1>
            <div class="slider-container">
                <?php echo do_shortcode('[logo_carousel_slider]'); ?>
                <div class="images-partenaires">

                    <!-- <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosContact/269-2694616_our-partners-dell-partner-direct-logo.jpg" alt="DELL Partner">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosContact/blob.png" alt="DELL EMC">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosContact/logo_fortinet.png" alt="FORTINET">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosContact/1024px-HP_logo_2012.svg.png" alt="HP">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosContact/google-workspace-logo.png" alt="G SUITE">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosContact/1280px-Cisco_logo_blue_2016.svg.png" alt="CISCO">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosContact/veeam_logo_topaz-500.png" alt="VEEAM">
                    <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/logosContact/Vmware.svg.png" alt="VMware"> -->
                </div>
            </div>
            <div class="slider-control">
            </div>
        </section>

        <!-- ================================ Datacenter ================================ -->

        <section class="datacenter" id="datacenters">
        <?php $cloud = get_field('champs_datacenter'); ?>
            <h1><?php echo $cloud['datacenter_titre']; ?></h1>
            <div class="black-squares">
                <div class="equinix">
                        <img class="mobile-img" src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/datacenter1.webp" alt="Datacenter">
                        <img class="web-img" src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/datacenter1.webp" alt="Datacenter">
                        <h2><span><?php echo $cloud['equinix_titre']; ?></span><?php echo $cloud['equinix_ville']; ?></h2>
                        <p><?php echo $cloud['equinix_description']; ?>
                        </p>
                    </div>
                    <div class="virtuacenter">
                        <img class="mobile-img" src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/datacenter2.webp" alt="Datacenter">
                        <img class="web-img" src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/datacenter2.webp" alt="Datacenter">
                        <h2><span><?php echo $cloud['virtuacenter_titre']; ?></span> <?php echo $cloud['virtuacenter_ville']; ?></h2>
                        <p><?php echo $cloud['virtuacenter_description']; ?>
                        </p>
                    </div>
                </div>
        </section>

        <!-- ================================ Contact ================================ -->

        <section class="contact" id="contact">
        <?php $contact= get_field('coordonnees'); ?>
            <h1><?php echo $contact['contact_titre']; ?></h1>
                <div class="main-contact">
                    <div class="info-contact">
                        <img class="logo-contact" src="<?php echo bloginfo("template_url"); ?>/assets/img/logos/logo-virtuanetwork.webp" alt="Logo Virtua Networks">
                        <ul>
                        <li>
                            <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/telephone-fill.svg" alt="Icône téléphone">
                            <p>
                                <?php echo $contact['telephone']; ?>
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/at.svg" alt="Icône arobase">
                            <p>
                                <?php echo $contact['email']; ?>
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/envelope-fill.svg" alt="Icône enveloppe">
                            <p>
                                <?php echo $contact['adresse']; ?>
                            </p>
                        </li>
                        </ul>
                    </div>

                    
                    <form class="form-contact" method="post">

                        <div class="top-contact">
                            <div>
                                <label for="name">
                                    Nom
                                </label>
                                <input type="text" name="name" id="name"  class="input" required>
                            </div>
                            <div>
                                <label for="email">
                                    Email
                                </label>
                                <input type="email" name="email" id="email" class="input" required>
                            </div>
                        </div>

                        <div class="textarea-btn-contact">
                            <label for="story">
                                Message
                            </label>
                            <textarea name="story" id="story"></textarea>
                            <input type="text" class="verif" name="verif">
                        </div>
                        <input type="submit" value="Envoyer" name="submit" class="button">

                    </form> 
                </div>
        </section>

        <!-- ================================ Footer ================================ -->
<?php get_footer(); ?>