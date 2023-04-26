<?php

	function tinymce_add_buttons($buttons)  // Add our buttons to the editor
	{
	 $buttons[] = 'fontselect';
	 $buttons[] = 'fontsizeselect';
	
	 return $buttons;
	}
	add_filter("mce_buttons_2", "tinymce_add_buttons");
	

	function __construct() // Begin construct to save our seletions
	{
		add_action( 'admin_init', array( $this, 'admin_init' ) );
		add_action( 'content_save_pre', array( $this, 'content_save_pre'), 100 ); 
	}
	
	function admin_init()  // Add our newly created array to the tinymce initialization process
	{
		add_filter( 'theme_advanced_fonts', array( $this, 'theme_advanced_fonts' ) );
	}
	
	function content_save_pre( $content ) // Closes our construct to save our selections
	{
		if ( substr( $content, -8 ) == '</table>' )
			$content = $content . "\n<br />";
		
		return $content;
	}


	/*
     * register with hook 'wp_print_styles'
     */
    add_action('admin_print_styles', 'add_josh_stylesheet');
	add_action('wp_print_styles', 'add_josh_stylesheet');

    /*
     * Enqueue style-file, if it exists.
     */

    function add_josh_stylesheet() {  // Calls included stylesheet for the import urls of each google font.
        $myStyleUrl = plugins_url('josh-font-style.css', __FILE__); // Respects SSL, Style.css is relative to the current file
        $myStyleFile = get_bloginfo('template_url') . '/gfonts/josh-font-style.css';
        if ( file_exists($myStyleFile) ) {
            wp_register_style('myStyleSheets', $myStyleUrl);
            wp_enqueue_style( 'myStyleSheets');
        }
    }
	
	function josh_sgw_custom_options( $opt ) {  // Our custom Google options are added to the array.

	$opt['theme_advanced_fonts'] = 'Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats;Abel=Abel, sans-serif;Abril Fatface=Abril Fatface, cursive;Aclonica=Aclonica, sans-serif;Actor=Actor, sans-serif;Adamina=Adamina, serif;Aldrich=Aldrich, sans-serif;Alice=Alice, serif;Alike Angular=Alike Angular, serif;Alike=Alike, serif;Allan=Allan, cursive;Allerta Stencil=Allerta Stencil, sans-serif;Allerta=Allerta, sans-serif;Amaranth=Amaranth, sans-serif;Amatic SC=Amatic SC, cursive;Andada=Andada, serif;Andika=Andika, sans-serif;Annie Use Your Telescope=Annie Use Your Telescope, cursive;Anonymous Pro=Anonymous Pro, sans-serif;Antic=Antic, sans-serif;Anton=Anton, sans-serif;Arapey=Arapey, serif;Architects Daughter=Architects Daughter, cursive;Arimo=Arimo, sans-serif;Artifika=Artifika, serif;Arvo=Arvo, serif;Asset=Asset, cursive;Astloch=Astloch, cursive;Atomic Age=Atomic Age, cursive;Aubrey=Aubrey, cursive;Bangers=Bangers, cursive;Bentham=Bentham, serif;Bevan=Bevan, serif;Bigshot One=Bigshot One, cursive;Bitter=Bitter, serif;Black Ops One=Black Ops One, cursive;Bowlby One SC=Bowlby One SC, sans-serif;Bowlby One=Bowlby One, sans-serif;Brawler=Brawler, serif;Buda=Buda, sans-serif;Butcherman Caps=Butcherman Caps, cursive;Cabin Sketch=Cabin Sketch, cursive;Cabin=Cabin, sans-serif;Calligraffitti=Calligraffitti, cursive;Candal=Candal, sans-serif;Cantarell=Cantarell, sans-serif;Cardo=Cardo, serif;Carme=Carme, sans-serif;Carter One=Carter One, sans-serif;Caudex=Caudex, serif;Cedarville Cursive=Cedarville Cursive, cursive;Changa One=Changa One, cursive;Cherry Cream Soda=Cherry Cream Soda, cursive;Chewy=Chewy, cursive;Chivo=Chivo, sans-serif;Coda Caption=Coda Caption, sans-serif;Coda=Coda, cursive;Comfortaa=Comfortaa, cursive;Coming Soon=Coming Soon, cursive;Contrail One=Contrail One, cursive;Convergence=Convergence, sans-serif;Cookie=Cookie, cursive;Copse=Copse, serif;Corben=Corben, cursive;Cousine=Cousine, sans-serif;Coustard=Coustard, serif;Covered By Your Grace=Covered By Your Grace, cursive;Crafty Girls=Crafty Girls, cursive;Creepster Caps=Creepster Caps, cursive;Crimson Text=Crimson Text, serif;Crushed=Crushed, cursive;Cuprum=Cuprum, sans-serif;Damion=Damion, cursive;Dancing Script=Dancing Script, cursive;Dawning of a New Day=Dawning of a New Day, cursive;Days One=Days One, sans-serif;Delius Swash Caps=Delius Swash Caps, cursive;Delius Unicase=Delius Unicase, cursive;Delius=Delius, cursive;Didact Gothic=Didact Gothic, sans-serif;Dorsa=Dorsa, sans-serif;Droid Sans Mono=Droid Sans Mono, sans-serif;Droid Sans=Droid Sans, sans-serif;Droid Serif=Droid Serif, serif;Eater Caps=Eater Caps, cursive;EB Garamond=EB Garamond, serif;Expletus Sans=Expletus Sans, cursive;Fanwood Text=Fanwood Text, serif;Federant=Federant, cursive;Federo=Federo, sans-serif;Fjord One=Fjord One, serif;Fontdiner Swanky=Fontdiner Swanky, cursive;Forum=Forum, cursive;Francois One=Francois One, sans-serif;Gentium Basic=Gentium Basic, serif;Gentium Book Basic=Gentium Book Basic, serif;Geo=Geo, sans-serif;Geostar Fill=Geostar Fill, cursive;Geostar=Geostar, cursive;Give You Glory=Give You Glory, cursive;Gloria Hallelujah=Gloria Hallelujah, cursive;Goblin One=Goblin One, cursive;Gochi Hand=Gochi Hand, cursive;Goudy Bookletter 1911=Goudy Bookletter 1911, serif;Gravitas One=Gravitas One, cursive;Gruppo=Gruppo, sans-serif;Hammersmith One=Hammersmith One, sans-serif;Holtwood One SC=Holtwood One SC, serif;Homemade Apple=Homemade Apple, cursive;IM Fell Double Pica SC=IM Fell Double Pica SC, serif;IM Fell Double Pica=IM Fell Double Pica, serif;IM Fell DW Pica SC=IM Fell DW Pica SC, serif;IM Fell DW Pica=IM Fell DW Pica, serif;IM Fell English SC=IM Fell English SC, serif;IM Fell English=IM Fell English, serif;IM Fell French Canon SC=IM Fell French Canon SC, serif;IM Fell French Canon=IM Fell French Canon, serif;IM Fell Great Primer SC=IM Fell Great Primer SC, serif;IM Fell Great Primer=IM Fell Great Primer, serif;Inconsolata=Inconsolata, sans-serif;Indie Flower=Indie Flower, cursive;Irish Grover=Irish Grover, cursive;Istok Web=Istok Web, sans-serif;Jockey One=Jockey One, sans-serif;Josefin Sans=Josefin Sans, sans-serif;Josefin Slab=Josefin Slab, serif;Judson=Judson, serif;Julee=Julee, cursive;Jura=Jura, sans-serif;Just Another Hand=Just Another Hand, cursive;Just Me Again Down Here=Just Me Again Down Here, cursive;Kameron=Kameron, serif;Kelly Slab=Kelly Slab, cursive;Kenia=Kenia, sans-serif;Kranky=Kranky, cursive;Kreon=Kreon, serif;Kristi=Kristi, cursive;La Belle Aurore=La Belle Aurore, cursive;Lancelot=Lancelot, cursive;Lato=Lato, sans-serif;League Script=League Script, cursive;Leckerli One=Leckerli One, cursive;Lekton=Lekton, sans-serif;Limelight=Limelight, cursive;Linden Hill=Linden Hill, serif;Lobster Two=Lobster Two, cursive;Lobster=Lobster, cursive;Lora=Lora, serif;Love Ya Like A Sister=Love Ya Like A Sister, cursive;Loved by the King=Loved by the King, cursive;Luckiest Guy=Luckiest Guy, cursive;Maiden Orange=Maiden Orange, cursive;Mako=Mako, sans-serif;Marck Script=Marck Script, cursive;Marvel=Marvel, sans-serif;Mate SC=Mate SC, serif;Mate=Mate, serif;Maven Pro=Maven Pro, sans-serif;Meddon=Meddon, cursive;MedievalSharp=MedievalSharp, cursive;Megrim=Megrim, cursive;Merienda One=Merienda One, cursive;Merriweather=Merriweather, serif;Metrophobic=Metrophobic, sans-serif;Michroma=Michroma, sans-serif;Miltonian Tattoo=Miltonian Tattoo, cursive;Miltonian=Miltonian, cursive;Modern Antiqua=Modern Antiqua, cursive;Molengo=Molengo, sans-serif;Monofett=Monofett, cursive;Monoton=Monoton, cursive;Montez=Montez, cursive;Mountains of Christmas=Mountains of Christmas, cursive;Muli=Muli, sans-serif;Neucha=Neucha, cursive;Neuton=Neuton, serif;News Cycle=News Cycle, sans-serif;Nixie One=Nixie One, cursive;Nobile=Nobile, sans-serif;Nosifer Caps=Nosifer Caps, cursive;Nothing You Could Do=Nothing You Could Do, cursive;Nova Cut=Nova Cut, cursive;Nova Flat=Nova Flat, cursive;Nova Mono=Nova Mono, cursive;Nova Oval=Nova Oval, cursive;Nova Round=Nova Round, cursive;Nova Script=Nova Script, cursive;Nova Slim=Nova Slim, cursive;Nova Square=Nova Square, cursive;Numans=Numans, sans-serif;Nunito=Nunito, sans-serif;Old Standard TT=Old Standard TT, serif;Open Sans Condensed=Open Sans Condensed, sans-serif;Open Sans=Open Sans, sans-serif;Orbitron=Orbitron, sans-serif;Oswald=Oswald, sans-serif;Over the Rainbow=Over the Rainbow, cursive;Ovo=Ovo, serif;Pacifico=Pacifico, cursive;Passero One=Passero One, cursive;Patrick Hand=Patrick Hand, cursive;Paytone One=Paytone One, sans-serif;Permanent Marker=Permanent Marker, cursive;Petrona=Petrona, serif;Philosopher=Philosopher, sans-serif;Pinyon Script=Pinyon Script, cursive;Play=Play, sans-serif;Playfair Display=Playfair Display, serif;Podkova=Podkova, serif;Poller One=Poller One, cursive;Poly=Poly, serif;Pompiere=Pompiere, cursive;Prata=Prata, serif;Prociono=Prociono, serif;PT Sans Caption=PT Sans Caption, sans-serif;PT Sans Narrow=PT Sans Narrow, sans-serif;PT Sans=PT Sans, sans-serif;PT Serif Caption=PT Serif Caption, serif;PT Serif=PT Serif, serif;Puritan=Puritan, sans-serif;Quattrocento Sans=Quattrocento Sans, sans-serif;Quattrocento=Quattrocento, serif;Questrial=Questrial, sans-serif;Quicksand=Quicksand, sans-serif;Radley=Radley, serif;Raleway=Raleway, cursive;Rammetto One=Rammetto One, cursive;Rancho=Rancho, cursive;Rationale=Rationale, sans-serif;Redressed=Redressed, cursive;Reenie Beanie=Reenie Beanie, cursive;Rochester=Rochester, cursive;Rock Salt=Rock Salt, cursive;Rokkitt=Rokkitt, serif;Rosario=Rosario, sans-serif;Ruslan Display=Ruslan Display, cursive;Salsa=Salsa, cursive;Sancreek=Sancreek, cursive;Sansita One=Sansita One, cursive;Satisfy=Satisfy, cursive;Schoolbell=Schoolbell, cursive;Shadows Into Light=Shadows Into Light, cursive;Shanti=Shanti, sans-serif;Short Stack=Short Stack, cursive;Sigmar One=Sigmar One, sans-serif;Six Caps=Six Caps, sans-serif;Slackey=Slackey, cursive;Smokum=Smokum, cursive;Smythe=Smythe, cursive;Sniglet=Sniglet, cursive;Snippet=Snippet, sans-serif;Sorts Mill Goudy=Sorts Mill Goudy, serif;Special Elite=Special Elite, cursive;Spinnaker=Spinnaker, sans-serif;Stardos Stencil=Stardos Stencil, cursive;Sue Ellen Francisco=Sue Ellen Francisco, cursive;Sunshiney=Sunshiney, cursive;Supermercado One=Supermercado One, cursive;Swanky and Moo Moo=Swanky and Moo Moo, cursive;Syncopate=Syncopate, sans-serif;Tangerine=Tangerine, cursive;Tenor Sans=Tenor Sans, sans-serif;Terminal Dosis=Terminal Dosis, sans-serif;The Girl Next Door=The Girl Next Door, cursive;Tienne=Tienne, serif;Tinos=Tinos, serif;Tulpen One=Tulpen One, cursive;Ubuntu Condensed=Ubuntu Condensed, sans-serif;Ubuntu Mono=Ubuntu Mono, sans-serif;Ubuntu=Ubuntu, sans-serif;Ultra=Ultra, serif;UnifrakturCook=UnifrakturCook, cursive;UnifrakturMaguntia=UnifrakturMaguntia, cursive;Unkempt=Unkempt, cursive;Unna=Unna, serif;Varela Round=Varela Round, sans-serif;Varela=Varela, sans-serif;Vast Shadow=Vast Shadow, cursive;Vibur=Vibur, cursive;Vidaloka=Vidaloka, serif;Volkhov=Volkhov, serif;Vollkorn=Vollkorn, serif;Voltaire=Voltaire, sans-serif;VT323=VT323, cursive;Waiting for the Sunrise=Waiting for the Sunrise, cursive;Wallpoet=Wallpoet, cursive;Walter Turncoat=Walter Turncoat, cursive;Wire One=Wire One, sans-serif;Yanone Kaffeesatz=Yanone Kaffeesatz, sans-serif;Yellowtail=Yellowtail, cursive;Yeseva One=Yeseva One, serif;Zeyada=Zeyada, cursive';
	
	$opt['content_css'] = 'http://fonts.googleapis.com/css?family=Abel,http://fonts.googleapis.com/css?family=Abril+Fatface,http://fonts.googleapis.com/css?family=Aclonica,http://fonts.googleapis.com/css?family=Acme,http://fonts.googleapis.com/css?family=Actor,http://fonts.googleapis.com/css?family=Adamina,http://fonts.googleapis.com/css?family=Advent+Pro,http://fonts.googleapis.com/css?family=Aguafina+Script,http://fonts.googleapis.com/css?family=Aladin,http://fonts.googleapis.com/css?family=Aldrich,http://fonts.googleapis.com/css?family=Alegreya,http://fonts.googleapis.com/css?family=Alegreya+SC,http://fonts.googleapis.com/css?family=Alex+Brush,http://fonts.googleapis.com/css?family=Alfa+Slab+One,http://fonts.googleapis.com/css?family=Alice,http://fonts.googleapis.com/css?family=Alike,http://fonts.googleapis.com/css?family=Alike+Angular,http://fonts.googleapis.com/css?family=Allan,http://fonts.googleapis.com/css?family=Allerta,http://fonts.googleapis.com/css?family=Allerta+Stencil,http://fonts.googleapis.com/css?family=Allura,http://fonts.googleapis.com/css?family=Almendra,http://fonts.googleapis.com/css?family=Almendra+SC,http://fonts.googleapis.com/css?family=Amarante,http://fonts.googleapis.com/css?family=Amaranth,http://fonts.googleapis.com/css?family=Amatic+SC,http://fonts.googleapis.com/css?family=Amethysta,http://fonts.googleapis.com/css?family=Andada,http://fonts.googleapis.com/css?family=Andika,http://fonts.googleapis.com/css?family=Angkor,http://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope,http://fonts.googleapis.com/css?family=Anonymous+Pro,http://fonts.googleapis.com/css?family=Antic,http://fonts.googleapis.com/css?family=Antic+Didone,http://fonts.googleapis.com/css?family=Antic+Slab,http://fonts.googleapis.com/css?family=Anton,http://fonts.googleapis.com/css?family=Arapey,http://fonts.googleapis.com/css?family=Arbutus,http://fonts.googleapis.com/css?family=Architects+Daughter,http://fonts.googleapis.com/css?family=Arimo,http://fonts.googleapis.com/css?family=Arizonia,http://fonts.googleapis.com/css?family=Armata,http://fonts.googleapis.com/css?family=Artifika,http://fonts.googleapis.com/css?family=Arvo,http://fonts.googleapis.com/css?family=Asap,http://fonts.googleapis.com/css?family=Asset,http://fonts.googleapis.com/css?family=Astloch,http://fonts.googleapis.com/css?family=Asul,http://fonts.googleapis.com/css?family=Atomic+Age,http://fonts.googleapis.com/css?family=Aubrey,http://fonts.googleapis.com/css?family=Audiowide,http://fonts.googleapis.com/css?family=Average,http://fonts.googleapis.com/css?family=Averia+Gruesa+Libre,http://fonts.googleapis.com/css?family=Averia+Libre,http://fonts.googleapis.com/css?family=Averia+Sans+Libre,http://fonts.googleapis.com/css?family=Averia+Serif+Libre,http://fonts.googleapis.com/css?family=Bad+Script,http://fonts.googleapis.com/css?family=Balthazar,http://fonts.googleapis.com/css?family=Bangers,http://fonts.googleapis.com/css?family=Basic,http://fonts.googleapis.com/css?family=Battambang,http://fonts.googleapis.com/css?family=Baumans,http://fonts.googleapis.com/css?family=Bayon,http://fonts.googleapis.com/css?family=Belgrano,http://fonts.googleapis.com/css?family=Belleza,http://fonts.googleapis.com/css?family=Bentham,http://fonts.googleapis.com/css?family=Berkshire+Swash,http://fonts.googleapis.com/css?family=Bevan,http://fonts.googleapis.com/css?family=Bigshot+One,http://fonts.googleapis.com/css?family=Bilbo,http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps,http://fonts.googleapis.com/css?family=Bitter,http://fonts.googleapis.com/css?family=Black+Ops+One,http://fonts.googleapis.com/css?family=Bokor,http://fonts.googleapis.com/css?family=Bonbon,http://fonts.googleapis.com/css?family=Boogaloo,http://fonts.googleapis.com/css?family=Bowlby+One,http://fonts.googleapis.com/css?family=Bowlby+One+SC,http://fonts.googleapis.com/css?family=Brawler,http://fonts.googleapis.com/css?family=Bree+Serif,http://fonts.googleapis.com/css?family=Bubblegum+Sans,http://fonts.googleapis.com/css?family=Bubbler+One,http://fonts.googleapis.com/css?family=Buda,http://fonts.googleapis.com/css?family=Buenard,http://fonts.googleapis.com/css?family=Butcherman,http://fonts.googleapis.com/css?family=Butterfly+Kids,http://fonts.googleapis.com/css?family=Cabin,http://fonts.googleapis.com/css?family=Cabin+Condensed,http://fonts.googleapis.com/css?family=Cabin+Sketch,http://fonts.googleapis.com/css?family=Caesar+Dressing,http://fonts.googleapis.com/css?family=Cagliostro,http://fonts.googleapis.com/css?family=Calligraffitti,http://fonts.googleapis.com/css?family=Cambo,http://fonts.googleapis.com/css?family=Candal,http://fonts.googleapis.com/css?family=Cantarell,http://fonts.googleapis.com/css?family=Cantata+One,http://fonts.googleapis.com/css?family=Cantora+One,http://fonts.googleapis.com/css?family=Capriola,http://fonts.googleapis.com/css?family=Cardo,http://fonts.googleapis.com/css?family=Carme,http://fonts.googleapis.com/css?family=Carter+One,http://fonts.googleapis.com/css?family=Caudex,http://fonts.googleapis.com/css?family=Cedarville+Cursive,http://fonts.googleapis.com/css?family=Ceviche+One,http://fonts.googleapis.com/css?family=Changa+One,http://fonts.googleapis.com/css?family=Chango,http://fonts.googleapis.com/css?family=Chau+Philomene+One,http://fonts.googleapis.com/css?family=Chelsea+Market,http://fonts.googleapis.com/css?family=Chenla,http://fonts.googleapis.com/css?family=Cherry+Cream+Soda,http://fonts.googleapis.com/css?family=Chewy,http://fonts.googleapis.com/css?family=Chicle,http://fonts.googleapis.com/css?family=Chivo,http://fonts.googleapis.com/css?family=Coda,http://fonts.googleapis.com/css?family=Coda+Caption,http://fonts.googleapis.com/css?family=Codystar,http://fonts.googleapis.com/css?family=Comfortaa,http://fonts.googleapis.com/css?family=Coming+Soon,http://fonts.googleapis.com/css?family=Concert+One,http://fonts.googleapis.com/css?family=Condiment,http://fonts.googleapis.com/css?family=Content,http://fonts.googleapis.com/css?family=Contrail+One,http://fonts.googleapis.com/css?family=Convergence,http://fonts.googleapis.com/css?family=Cookie,http://fonts.googleapis.com/css?family=Copse,http://fonts.googleapis.com/css?family=Corben,http://fonts.googleapis.com/css?family=Courgette,http://fonts.googleapis.com/css?family=Cousine,http://fonts.googleapis.com/css?family=Coustard,http://fonts.googleapis.com/css?family=Covered+By+Your+Grace,http://fonts.googleapis.com/css?family=Crafty+Girls,http://fonts.googleapis.com/css?family=Creepster,http://fonts.googleapis.com/css?family=Crete+Round,http://fonts.googleapis.com/css?family=Crimson+Text,http://fonts.googleapis.com/css?family=Crushed,http://fonts.googleapis.com/css?family=Cuprum,http://fonts.googleapis.com/css?family=Cutive,http://fonts.googleapis.com/css?family=Damion,http://fonts.googleapis.com/css?family=Dancing+Script,http://fonts.googleapis.com/css?family=Dangrek,http://fonts.googleapis.com/css?family=Dawning+of+a+New+Day,http://fonts.googleapis.com/css?family=Days+One,http://fonts.googleapis.com/css?family=Delius,http://fonts.googleapis.com/css?family=Delius+Swash+Caps,http://fonts.googleapis.com/css?family=Delius+Unicase,http://fonts.googleapis.com/css?family=Della+Respira,http://fonts.googleapis.com/css?family=Devonshire,http://fonts.googleapis.com/css?family=Didact+Gothic,http://fonts.googleapis.com/css?family=Diplomata,http://fonts.googleapis.com/css?family=Diplomata+SC,http://fonts.googleapis.com/css?family=Doppio+One,http://fonts.googleapis.com/css?family=Dorsa,http://fonts.googleapis.com/css?family=Dosis,http://fonts.googleapis.com/css?family=Dr+Sugiyama,http://fonts.googleapis.com/css?family=Droid+Sans,http://fonts.googleapis.com/css?family=Droid+Sans+Mono,http://fonts.googleapis.com/css?family=Droid+Serif,http://fonts.googleapis.com/css?family=Duru+Sans,http://fonts.googleapis.com/css?family=Dynalight,http://fonts.googleapis.com/css?family=EB+Garamond,http://fonts.googleapis.com/css?family=Eagle+Lake,http://fonts.googleapis.com/css?family=Eater,http://fonts.googleapis.com/css?family=Economica,http://fonts.googleapis.com/css?family=Electrolize,http://fonts.googleapis.com/css?family=Emblema+One,http://fonts.googleapis.com/css?family=Emilys+Candy,http://fonts.googleapis.com/css?family=Engagement,http://fonts.googleapis.com/css?family=Enriqueta,http://fonts.googleapis.com/css?family=Erica+One,http://fonts.googleapis.com/css?family=Esteban,http://fonts.googleapis.com/css?family=Euphoria+Script,http://fonts.googleapis.com/css?family=Ewert,http://fonts.googleapis.com/css?family=Exo,http://fonts.googleapis.com/css?family=Expletus+Sans,http://fonts.googleapis.com/css?family=Fanwood+Text,http://fonts.googleapis.com/css?family=Fascinate,http://fonts.googleapis.com/css?family=Fascinate+Inline,http://fonts.googleapis.com/css?family=Fasthand,http://fonts.googleapis.com/css?family=Federant,http://fonts.googleapis.com/css?family=Federo,http://fonts.googleapis.com/css?family=Felipa,http://fonts.googleapis.com/css?family=Fjord+One,http://fonts.googleapis.com/css?family=Flamenco,http://fonts.googleapis.com/css?family=Flavors,http://fonts.googleapis.com/css?family=Fondamento,http://fonts.googleapis.com/css?family=Fontdiner+Swanky,http://fonts.googleapis.com/css?family=Forum,http://fonts.googleapis.com/css?family=Francois+One,http://fonts.googleapis.com/css?family=Fredericka+the+Great,http://fonts.googleapis.com/css?family=Fredoka+One,http://fonts.googleapis.com/css?family=Freehand,http://fonts.googleapis.com/css?family=Fresca,http://fonts.googleapis.com/css?family=Frijole,http://fonts.googleapis.com/css?family=Fugaz+One,http://fonts.googleapis.com/css?family=GFS+Didot,http://fonts.googleapis.com/css?family=GFS+Neohellenic,http://fonts.googleapis.com/css?family=Galdeano,http://fonts.googleapis.com/css?family=Galindo,http://fonts.googleapis.com/css?family=Gentium+Basic,http://fonts.googleapis.com/css?family=Gentium+Book+Basic,http://fonts.googleapis.com/css?family=Geo,http://fonts.googleapis.com/css?family=Geostar,http://fonts.googleapis.com/css?family=Geostar+Fill,http://fonts.googleapis.com/css?family=Germania+One,http://fonts.googleapis.com/css?family=Give+You+Glory,http://fonts.googleapis.com/css?family=Glass+Antiqua,http://fonts.googleapis.com/css?family=Glegoo,http://fonts.googleapis.com/css?family=Gloria+Hallelujah,http://fonts.googleapis.com/css?family=Goblin+One,http://fonts.googleapis.com/css?family=Gochi+Hand,http://fonts.googleapis.com/css?family=Gorditas,http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911,http://fonts.googleapis.com/css?family=Graduate,http://fonts.googleapis.com/css?family=Gravitas+One,http://fonts.googleapis.com/css?family=Great+Vibes,http://fonts.googleapis.com/css?family=Griffy,http://fonts.googleapis.com/css?family=Gruppo,http://fonts.googleapis.com/css?family=Gudea,http://fonts.googleapis.com/css?family=Habibi,http://fonts.googleapis.com/css?family=Hammersmith+One,http://fonts.googleapis.com/css?family=Handlee,http://fonts.googleapis.com/css?family=Hanuman,http://fonts.googleapis.com/css?family=Happy+Monkey,http://fonts.googleapis.com/css?family=Headland+One,http://fonts.googleapis.com/css?family=Henny+Penny,http://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff,http://fonts.googleapis.com/css?family=Holtwood+One+SC,http://fonts.googleapis.com/css?family=Homemade+Apple,http://fonts.googleapis.com/css?family=Homenaje,http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica,http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC,http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica,http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica+SC,http://fonts.googleapis.com/css?family=IM+Fell+English,http://fonts.googleapis.com/css?family=IM+Fell+English+SC,http://fonts.googleapis.com/css?family=IM+Fell+French+Canon,http://fonts.googleapis.com/css?family=IM+Fell+French+Canon+SC,http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer,http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC,http://fonts.googleapis.com/css?family=Iceberg,http://fonts.googleapis.com/css?family=Iceland,http://fonts.googleapis.com/css?family=Imprima,http://fonts.googleapis.com/css?family=Inconsolata,http://fonts.googleapis.com/css?family=Inder,http://fonts.googleapis.com/css?family=Indie+Flower,http://fonts.googleapis.com/css?family=Inika,http://fonts.googleapis.com/css?family=Irish+Grover,http://fonts.googleapis.com/css?family=Istok+Web,http://fonts.googleapis.com/css?family=Italiana,http://fonts.googleapis.com/css?family=Italianno,http://fonts.googleapis.com/css?family=Jacques+Francois,http://fonts.googleapis.com/css?family=Jacques+Francois+Shadow,http://fonts.googleapis.com/css?family=Jim+Nightshade,http://fonts.googleapis.com/css?family=Jockey+One,http://fonts.googleapis.com/css?family=Jolly+Lodger,http://fonts.googleapis.com/css?family=Josefin+Sans,http://fonts.googleapis.com/css?family=Josefin+Slab,http://fonts.googleapis.com/css?family=Judson,http://fonts.googleapis.com/css?family=Julee,http://fonts.googleapis.com/css?family=Junge,http://fonts.googleapis.com/css?family=Jura,http://fonts.googleapis.com/css?family=Just+Another+Hand,http://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here,http://fonts.googleapis.com/css?family=Kameron,http://fonts.googleapis.com/css?family=Karla,http://fonts.googleapis.com/css?family=Kaushan+Script,http://fonts.googleapis.com/css?family=Kelly+Slab,http://fonts.googleapis.com/css?family=Kenia,http://fonts.googleapis.com/css?family=Khmer,http://fonts.googleapis.com/css?family=Knewave,http://fonts.googleapis.com/css?family=Kotta+One,http://fonts.googleapis.com/css?family=Koulen,http://fonts.googleapis.com/css?family=Kranky,http://fonts.googleapis.com/css?family=Kreon,http://fonts.googleapis.com/css?family=Kristi,http://fonts.googleapis.com/css?family=Krona+One,http://fonts.googleapis.com/css?family=La+Belle+Aurore,http://fonts.googleapis.com/css?family=Lancelot,http://fonts.googleapis.com/css?family=Lato,http://fonts.googleapis.com/css?family=League+Script,http://fonts.googleapis.com/css?family=Leckerli+One,http://fonts.googleapis.com/css?family=Ledger,http://fonts.googleapis.com/css?family=Lekton,http://fonts.googleapis.com/css?family=Lemon,http://fonts.googleapis.com/css?family=Life+Savers,http://fonts.googleapis.com/css?family=Lilita+One,http://fonts.googleapis.com/css?family=Limelight,http://fonts.googleapis.com/css?family=Linden+Hill,http://fonts.googleapis.com/css?family=Lobster,http://fonts.googleapis.com/css?family=Lobster+Two,http://fonts.googleapis.com/css?family=Londrina+Outline,http://fonts.googleapis.com/css?family=Londrina+Shadow,http://fonts.googleapis.com/css?family=Londrina+Sketch,http://fonts.googleapis.com/css?family=Londrina+Solid,http://fonts.googleapis.com/css?family=Lora,http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister,http://fonts.googleapis.com/css?family=Loved+by+the+King,http://fonts.googleapis.com/css?family=Lovers+Quarrel,http://fonts.googleapis.com/css?family=Luckiest+Guy,http://fonts.googleapis.com/css?family=Lusitana,http://fonts.googleapis.com/css?family=Lustria,http://fonts.googleapis.com/css?family=Macondo,http://fonts.googleapis.com/css?family=Macondo+Swash+Caps,http://fonts.googleapis.com/css?family=Magra,http://fonts.googleapis.com/css?family=Maiden+Orange,http://fonts.googleapis.com/css?family=Mako,http://fonts.googleapis.com/css?family=Marck+Script,http://fonts.googleapis.com/css?family=Marko+One,http://fonts.googleapis.com/css?family=Marmelad,http://fonts.googleapis.com/css?family=Marvel,http://fonts.googleapis.com/css?family=Mate,http://fonts.googleapis.com/css?family=Mate+SC,http://fonts.googleapis.com/css?family=Maven+Pro,http://fonts.googleapis.com/css?family=McLaren,http://fonts.googleapis.com/css?family=Meddon,http://fonts.googleapis.com/css?family=MedievalSharp,http://fonts.googleapis.com/css?family=Medula+One,http://fonts.googleapis.com/css?family=Megrim,http://fonts.googleapis.com/css?family=Meie+Script,http://fonts.googleapis.com/css?family=Merienda+One,http://fonts.googleapis.com/css?family=Merriweather,http://fonts.googleapis.com/css?family=Metal,http://fonts.googleapis.com/css?family=Metal+Mania,http://fonts.googleapis.com/css?family=Metamorphous,http://fonts.googleapis.com/css?family=Metrophobic,http://fonts.googleapis.com/css?family=Michroma,http://fonts.googleapis.com/css?family=Miltonian,http://fonts.googleapis.com/css?family=Miltonian+Tattoo,http://fonts.googleapis.com/css?family=Miniver,http://fonts.googleapis.com/css?family=Miss+Fajardose,http://fonts.googleapis.com/css?family=Modern+Antiqua,http://fonts.googleapis.com/css?family=Molengo,http://fonts.googleapis.com/css?family=Monofett,http://fonts.googleapis.com/css?family=Monoton,http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise,http://fonts.googleapis.com/css?family=Montaga,http://fonts.googleapis.com/css?family=Montez,http://fonts.googleapis.com/css?family=Montserrat,http://fonts.googleapis.com/css?family=Moul,http://fonts.googleapis.com/css?family=Moulpali,http://fonts.googleapis.com/css?family=Mountains+of+Christmas,http://fonts.googleapis.com/css?family=Mr+Bedfort,http://fonts.googleapis.com/css?family=Mr+Dafoe,http://fonts.googleapis.com/css?family=Mr+De+Haviland,http://fonts.googleapis.com/css?family=Mrs+Saint+Delafield,http://fonts.googleapis.com/css?family=Mrs+Sheppards,http://fonts.googleapis.com/css?family=Muli,http://fonts.googleapis.com/css?family=Mystery+Quest,http://fonts.googleapis.com/css?family=Neucha,http://fonts.googleapis.com/css?family=Neuton,http://fonts.googleapis.com/css?family=News+Cycle,http://fonts.googleapis.com/css?family=Niconne,http://fonts.googleapis.com/css?family=Nixie+One,http://fonts.googleapis.com/css?family=Nobile,http://fonts.googleapis.com/css?family=Nokora,http://fonts.googleapis.com/css?family=Norican,http://fonts.googleapis.com/css?family=Nosifer,http://fonts.googleapis.com/css?family=Nothing+You+Could+Do,http://fonts.googleapis.com/css?family=Noticia+Text,http://fonts.googleapis.com/css?family=Nova+Cut,http://fonts.googleapis.com/css?family=Nova+Flat,http://fonts.googleapis.com/css?family=Nova+Mono,http://fonts.googleapis.com/css?family=Nova+Oval,http://fonts.googleapis.com/css?family=Nova+Round,http://fonts.googleapis.com/css?family=Nova+Script,http://fonts.googleapis.com/css?family=Nova+Slim,http://fonts.googleapis.com/css?family=Nova+Square,http://fonts.googleapis.com/css?family=Numans,http://fonts.googleapis.com/css?family=Nunito,http://fonts.googleapis.com/css?family=Odor+Mean+Chey,http://fonts.googleapis.com/css?family=Old+Standard+TT,http://fonts.googleapis.com/css?family=Oldenburg,http://fonts.googleapis.com/css?family=Oleo+Script,http://fonts.googleapis.com/css?family=Open+Sans,http://fonts.googleapis.com/css?family=Open+Sans+Condensed,http://fonts.googleapis.com/css?family=Oranienbaum,http://fonts.googleapis.com/css?family=Orbitron,http://fonts.googleapis.com/css?family=Oregano,http://fonts.googleapis.com/css?family=Orienta,http://fonts.googleapis.com/css?family=Original+Surfer,http://fonts.googleapis.com/css?family=Oswald,http://fonts.googleapis.com/css?family=Over+the+Rainbow,http://fonts.googleapis.com/css?family=Overlock,http://fonts.googleapis.com/css?family=Overlock+SC,http://fonts.googleapis.com/css?family=Ovo,http://fonts.googleapis.com/css?family=Oxygen,http://fonts.googleapis.com/css?family=Oxygen+Mono,http://fonts.googleapis.com/css?family=PT+Mono,http://fonts.googleapis.com/css?family=PT+Sans,http://fonts.googleapis.com/css?family=PT+Sans+Caption,http://fonts.googleapis.com/css?family=PT+Sans+Narrow,http://fonts.googleapis.com/css?family=PT+Serif,http://fonts.googleapis.com/css?family=PT+Serif+Caption,http://fonts.googleapis.com/css?family=Pacifico,http://fonts.googleapis.com/css?family=Parisienne,http://fonts.googleapis.com/css?family=Passero+One,http://fonts.googleapis.com/css?family=Passion+One,http://fonts.googleapis.com/css?family=Patrick+Hand,http://fonts.googleapis.com/css?family=Patua+One,http://fonts.googleapis.com/css?family=Paytone+One,http://fonts.googleapis.com/css?family=Peralta,http://fonts.googleapis.com/css?family=Permanent+Marker,http://fonts.googleapis.com/css?family=Petit+Formal+Script,http://fonts.googleapis.com/css?family=Petrona,http://fonts.googleapis.com/css?family=Philosopher,http://fonts.googleapis.com/css?family=Piedra,http://fonts.googleapis.com/css?family=Pinyon+Script,http://fonts.googleapis.com/css?family=Plaster,http://fonts.googleapis.com/css?family=Play,http://fonts.googleapis.com/css?family=Playball,http://fonts.googleapis.com/css?family=Playfair+Display,http://fonts.googleapis.com/css?family=Podkova,http://fonts.googleapis.com/css?family=Poiret+One,http://fonts.googleapis.com/css?family=Poller+One,http://fonts.googleapis.com/css?family=Poly,http://fonts.googleapis.com/css?family=Pompiere,http://fonts.googleapis.com/css?family=Pontano+Sans,http://fonts.googleapis.com/css?family=Port+Lligat+Sans,http://fonts.googleapis.com/css?family=Port+Lligat+Slab,http://fonts.googleapis.com/css?family=Prata,http://fonts.googleapis.com/css?family=Preahvihear,http://fonts.googleapis.com/css?family=Press+Start+2P,http://fonts.googleapis.com/css?family=Princess+Sofia,http://fonts.googleapis.com/css?family=Prociono,http://fonts.googleapis.com/css?family=Prosto+One,http://fonts.googleapis.com/css?family=Puritan,http://fonts.googleapis.com/css?family=Quando,http://fonts.googleapis.com/css?family=Quantico,http://fonts.googleapis.com/css?family=Quattrocento,http://fonts.googleapis.com/css?family=Quattrocento+Sans,http://fonts.googleapis.com/css?family=Questrial,http://fonts.googleapis.com/css?family=Quicksand,http://fonts.googleapis.com/css?family=Qwigley,http://fonts.googleapis.com/css?family=Racing+Sans+One,http://fonts.googleapis.com/css?family=Radley,http://fonts.googleapis.com/css?family=Raleway,http://fonts.googleapis.com/css?family=Raleway+Dots,http://fonts.googleapis.com/css?family=Rammetto+One,http://fonts.googleapis.com/css?family=Ranchers,http://fonts.googleapis.com/css?family=Rancho,http://fonts.googleapis.com/css?family=Rationale,http://fonts.googleapis.com/css?family=Redressed,http://fonts.googleapis.com/css?family=Reenie+Beanie,http://fonts.googleapis.com/css?family=Revalia,http://fonts.googleapis.com/css?family=Ribeye,http://fonts.googleapis.com/css?family=Ribeye+Marrow,http://fonts.googleapis.com/css?family=Righteous,http://fonts.googleapis.com/css?family=Rochester,http://fonts.googleapis.com/css?family=Rock+Salt,http://fonts.googleapis.com/css?family=Rokkitt,http://fonts.googleapis.com/css?family=Romanesco,http://fonts.googleapis.com/css?family=Ropa+Sans,http://fonts.googleapis.com/css?family=Rosario,http://fonts.googleapis.com/css?family=Rosarivo,http://fonts.googleapis.com/css?family=Rouge+Script,http://fonts.googleapis.com/css?family=Ruda,http://fonts.googleapis.com/css?family=Ruge+Boogie,http://fonts.googleapis.com/css?family=Ruluko,http://fonts.googleapis.com/css?family=Ruslan+Display,http://fonts.googleapis.com/css?family=Russo+One,http://fonts.googleapis.com/css?family=Ruthie,http://fonts.googleapis.com/css?family=Rye,http://fonts.googleapis.com/css?family=Sail,http://fonts.googleapis.com/css?family=Salsa,http://fonts.googleapis.com/css?family=Sancreek,http://fonts.googleapis.com/css?family=Sansita+One,http://fonts.googleapis.com/css?family=Sarina,http://fonts.googleapis.com/css?family=Satisfy,http://fonts.googleapis.com/css?family=Schoolbell,http://fonts.googleapis.com/css?family=Seaweed+Script,http://fonts.googleapis.com/css?family=Sevillana,http://fonts.googleapis.com/css?family=Shadows+Into+Light,http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two,http://fonts.googleapis.com/css?family=Shanti,http://fonts.googleapis.com/css?family=Share,http://fonts.googleapis.com/css?family=Shojumaru,http://fonts.googleapis.com/css?family=Short+Stack,http://fonts.googleapis.com/css?family=Siemreap,http://fonts.googleapis.com/css?family=Sigmar+One,http://fonts.googleapis.com/css?family=Signika,http://fonts.googleapis.com/css?family=Signika+Negative,http://fonts.googleapis.com/css?family=Simonetta,http://fonts.googleapis.com/css?family=Sirin+Stencil,http://fonts.googleapis.com/css?family=Six+Caps,http://fonts.googleapis.com/css?family=Skranji,http://fonts.googleapis.com/css?family=Slackey,http://fonts.googleapis.com/css?family=Smokum,http://fonts.googleapis.com/css?family=Smythe,http://fonts.googleapis.com/css?family=Sniglet,http://fonts.googleapis.com/css?family=Snippet,http://fonts.googleapis.com/css?family=Sofia,http://fonts.googleapis.com/css?family=Sonsie+One,http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy,http://fonts.googleapis.com/css?family=Source+Sans+Pro,http://fonts.googleapis.com/css?family=Special+Elite,http://fonts.googleapis.com/css?family=Spicy+Rice,http://fonts.googleapis.com/css?family=Spinnaker,http://fonts.googleapis.com/css?family=Spirax,http://fonts.googleapis.com/css?family=Squada+One,http://fonts.googleapis.com/css?family=Stardos+Stencil,http://fonts.googleapis.com/css?family=Stint+Ultra+Condensed,http://fonts.googleapis.com/css?family=Stint+Ultra+Expanded,http://fonts.googleapis.com/css?family=Stoke,http://fonts.googleapis.com/css?family=Sue+Ellen+Francisco,http://fonts.googleapis.com/css?family=Sunshiney,http://fonts.googleapis.com/css?family=Supermercado+One,http://fonts.googleapis.com/css?family=Suwannaphum,http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo,http://fonts.googleapis.com/css?family=Syncopate,http://fonts.googleapis.com/css?family=Tangerine,http://fonts.googleapis.com/css?family=Taprom,http://fonts.googleapis.com/css?family=Telex,http://fonts.googleapis.com/css?family=Tenor+Sans,http://fonts.googleapis.com/css?family=The+Girl+Next+Door,http://fonts.googleapis.com/css?family=Tienne,http://fonts.googleapis.com/css?family=Tinos,http://fonts.googleapis.com/css?family=Titan+One,http://fonts.googleapis.com/css?family=Trade+Winds,http://fonts.googleapis.com/css?family=Trocchi,http://fonts.googleapis.com/css?family=Trochut,http://fonts.googleapis.com/css?family=Trykker,http://fonts.googleapis.com/css?family=Tulpen+One,http://fonts.googleapis.com/css?family=Ubuntu,http://fonts.googleapis.com/css?family=Ubuntu+Condensed,http://fonts.googleapis.com/css?family=Ubuntu+Mono,http://fonts.googleapis.com/css?family=Ultra,http://fonts.googleapis.com/css?family=Uncial+Antiqua,http://fonts.googleapis.com/css?family=UnifrakturCook,http://fonts.googleapis.com/css?family=UnifrakturMaguntia,http://fonts.googleapis.com/css?family=Unkempt,http://fonts.googleapis.com/css?family=Unlock,http://fonts.googleapis.com/css?family=Unna,http://fonts.googleapis.com/css?family=VT323,http://fonts.googleapis.com/css?family=Varela,http://fonts.googleapis.com/css?family=Varela+Round,http://fonts.googleapis.com/css?family=Vast+Shadow,http://fonts.googleapis.com/css?family=Vibur,http://fonts.googleapis.com/css?family=Vidaloka,http://fonts.googleapis.com/css?family=Viga,http://fonts.googleapis.com/css?family=Voces,http://fonts.googleapis.com/css?family=Volkhov,http://fonts.googleapis.com/css?family=Vollkorn,http://fonts.googleapis.com/css?family=Voltaire,http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise,http://fonts.googleapis.com/css?family=Wallpoet,http://fonts.googleapis.com/css?family=Walter+Turncoat,http://fonts.googleapis.com/css?family=Warnes,http://fonts.googleapis.com/css?family=Wellfleet,http://fonts.googleapis.com/css?family=Wire+One,http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz,http://fonts.googleapis.com/css?family=Yellowtail,http://fonts.googleapis.com/css?family=Yeseva+One,http://fonts.googleapis.com/css?family=Yesteryear,http://fonts.googleapis.com/css?family=Zeyada';
	
	return $opt;
		
	}
	add_filter('tiny_mce_before_init', 'josh_sgw_custom_options');

?>