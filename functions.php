Ovaj php fajl će nam služiti da pišemo funcije. Naravno između <?php ?> tag je obavezan
Funkcija za pravljenje pozicije za widget:
function custom_widgets_init() {
   register_sidebar( array(
      'name' => 'Ime widgeta',
      'id' => 'id-widgeta',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="rounded">',
      'after_title' => '</h2>',
   ) );
}
add_action( 'widgets_init', 'custom_widgets_init' );
Pozivanje funkcije na mestu u kodu gde želimo vidljivost tj. da postavimo vidžet: <?php dynamic_sidebar('id-widgeta') ?>

Preko funcije u ovom fajlu pravimo mesto u Wpressu za vidžet. Na tom mestu u wp možemo ubaciti potrebne vidžet
e i pozvati funciju u kodu gde želimo da se prikaže: heder, futer...

Plugin: Easy Social Icons - instal i aktiv ovaj plagin da bismo mogli u widget da ubacimo socijalne mreže
all icons već ima neke predefinisane, možemo ih obrisati jer imamo mogućnost da sami unesemo naš dizajn ikonica
Tu ćemo dodeliti i id ili klasu preko kojih ćemo ih stilizovati
