<?php get_header(); ?>


<script>

function: getApi() {
console.log('hello');
// On prépare la configuration de la requête HTTP
let config = {
    method: 'GET',
    mode: 'cors',
    cache: 'no-cache'
};

// On déclenche la requête HTTP 
// via la fonction fetch qui va envoyer la requete pour nous
// Et revenir vers nous quand la requete sera terminée.
let promesseDeResultat = fetch('http://localhost:8080/tasks', config)

return promesseDeResultat.then(function (response) {
    // On convertit cette réponse en un objet JS et on le retourne
    print response.json();
});

</script>

<?php if (have_posts()): while(have_posts()): the_post() ?>
    <div class="about">



            <div class="photo-about">
            <?php the_post_thumbnail(); ?> </a>
            
            <h1><?php the_title(); ?></h1>
            
            <p><?php the_content(); ?></p>
            
        </div>
        
    </div>


    <?php endwhile; endif; ?>
   


<?php get_footer(); ?>

