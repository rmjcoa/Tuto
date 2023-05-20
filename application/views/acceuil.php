
    <main>
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-sm-12 col-md-8 block">
                            <!-- User connecter -->
                    <div class="user_connect">
                        <a href="#">
                            <img src="./public/img/7.png" alt="user1" class="user_actif">
                        </a>
                    </div>
                    <!-- navbar -->
                    <div class="navigation">
                        <h4>Discussions</h4>
                    </div>
                    <!-- recherche -->
                    <div class="recherche">
                        <form action="">
                            <span class="fas fa-search"></span>
                            <input type="search" name="" placeholder="Rechercher" id="myInput"/>
                        </form>
                    </div>
                    <div class="block-body" >
                        <section>
                            <div class="colonne">
                                <?php
                                    foreach ($user  as $row)
                                    {
                                    ?>
                                    <?php echo form_open("Edite_v") ; ?>
                                    <input type="text" value="<?php echo $row->user_id; ?>" class="d-none" name="id">
                                    <button type="submit">
                                        <div class="perso">
                                            <a href="#">
                                                <img src="public/images/<?=$row->photo;?>" alt="user1" class="utilisateur">
                                            </a>
                                        </div>
                                        <div class="nomComplet">
                                            <span class="nom"><?php echo $row->pseudo; ?></span>
                                            <span class="prenom"> <?php echo $row->prenom; ?></span>
                                        </div>
                                    </button>
                            
                            <?php
                            }
                            ?>
                            </div>
                        </section>
                    <!-- contenue -->
                        <header id="myBlock">
                            <a href="<?= base_url();?>hafatra" class="contenue">
                                <div class="">
                                    <div class="perso">
                                        
                                            <img src="./public/img/1.png" alt="user1" class="utilisateur">
                                    
                                    </div>
                                    <div class="nomComplet1">
                                        <span class="nom">Rabialahy </span>
                                        <span class="prenom"> Andry</span>
                                        <div>
                                            <span class="dernier_mssg">Bonjour les amis 😂 </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="contenue">
                                <div class="perso">
                                    <a href="#">
                                        <img src="./public/img/2.png" alt="user1" class="utilisateur">
                                    </a>
                                </div>
                                <div class="nomComplet1">
                                    <span class="nom">Fanih </span>
                                    <span class="prenom"> Ryh</span>
                                    <div>
                                        <span class="dernier_mssg">Bonjour les amis 😂</span>
                                    </div>
                                </div>
                            </div>
                            <div class="contenue">
                                <div class="perso">
                                    <a href="#">
                                        <img src="./public/img/7.png" alt="user1" class="utilisateur">
                                    </a>
                                </div>
                                <div class="nomComplet1">
                                    <span class="nom">An-Gnen </span>
                                    <span class="prenom"> Angelo</span>
                                    <div>
                                        <span class="dernier_mssg">Bonjour les amis 😂</span>
                                    </div>
                                </div>
                            </div>
                            <div class="contenue">
                                <div class="perso">
                                    <a href="#">
                                        <img src="./public/img/9.jpg" alt="user1" class="utilisateur">
                                    </a>
                                </div>
                                <div class="nomComplet1">
                                    <span class="nom">Lion </span>
                                    <span class="prenom"> Hill</span>
                                    <div>
                                        <span class="dernier_mssg">Bonjour les amis 😂</span>
                                    </div>
                                </div>
                            </div>
                            <div class="contenue">
                                <div class="perso">
                                    <a href="#">
                                        <img src="./public/img/8.jpg" alt="user1" class="utilisateur">
                                    </a>
                                </div>
                                <div class="nomComplet1">
                                    <span class="nom">Coby </span>
                                    <span class="prenom"> Kevin Smith</span>
                                    <div>
                                        <span class="dernier_mssg">Bonjour les amis 😂</span>
                                    </div>
                                </div>
                            </div>
                            <div class="contenue">
                                <div class="perso">
                                    <a href="#">
                                        <img src="./public/img/6.jpg" alt="user1" class="utilisateur">
                                    </a>
                                </div>
                                <div class="nomComplet1">
                                    <span class="nom">Amandine </span>
                                    <span class="prenom"> Amande</span>
                                    <div>
                                        <span class="dernier_mssg">Bonjour les amis 😂</span>
                                    </div>
                                </div>
                            </div>
                            <div class="contenue">
                                <div class="perso">
                                    <a href="#">
                                        <img src="./public/img/8.jpg" alt="user1" class="utilisateur">
                                    </a>
                                </div>
                                <div class="nomComplet1">
                                    <span class="nom">Coby </span>
                                    <span class="prenom"> Kevin Smith</span>
                                    <div>
                                        <span class="dernier_mssg">Bonjour les amis 😂</span>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </div>
                <footer>
                        <span class="fas fa-plus"></span>
                </footer>
            </div>
            <div class="col-2">

            </div>
        </div>
       
    </main>
  
 