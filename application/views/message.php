
    <main>
        <nav>
                <div class="d-flex align-items-center">
                    <a href="<?= base_url();?>acceuil" class="mr-2">
                        <span class="fas fa-chevron-left color1"></span>
                    </a>
                    <?php
                        foreach ($user  as $row)
                            {
                    ?>
                    <a>
                        <img src="public/images/<?=$row->photo;?>" alt="user1" class="user_message">
                    </a>
                    
                    <div class="ml-2">
                        <span class="nom"><?php echo $row->pseudo; ?></span>
                        <span class="prenom"><?php echo $row->prenom; ?></span>
                    </div>
                        <?php
                        }
                        ?>
                </div>
                <div class="appel">
                    <span class="fas fa-phone color1"></span>
                    <span class="fas fa-video color1 ml-2"></span>
                </div>
        </nav>
        <aside>
            
        </aside>
        <form action="" class="input">
            <div>
                <span class="fas fa-plus-circle color2"></span>
                <span class="far fa-image color2"></span>
                <span class="fas fa-microphone color2"></span>
            </div>
            <div>
                <textarea name="" id=""   placeholder="Aa"></textarea>
                <span class="fas fa-plane color2"></span>
            </div>
        </form>
    </main>

