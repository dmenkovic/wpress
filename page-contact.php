Stranice koje formiramo za Template u nazivu MORAJU početi sa page- ...
Stranica je php pa mora početi <?php ?> tagovima i prvo zapisati obavezan komentar
<?php
/* Template Name: Kontakt */
?>
Sve što se bude iskodiralo na ovoj strani biće prikazano kada odaberemo u wp ovaj Template za stranicu neku
A samo ovaj zapis je dovoljan da se sa desne strane u wp pojavi Template sa opcijom Kontakt
Prvo pored komentara što treba da imamo na strani su heder i futer

<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>

<?php get_footer(); ?>

Strana u WP je prazna, sve treba da obrišemo jer koristimo Template koji ima sadržaj ispisan na ovoj strani
