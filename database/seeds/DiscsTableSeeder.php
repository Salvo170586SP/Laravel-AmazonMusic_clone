<?php

use Illuminate\Database\Seeder;
use App\Disc;

class DiscsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $discs = [
            [
                'title' => 'New Jersey',
                'author' => 'Bon Jovi',
                'year' => '1988',
                'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                'genre' => 'Rock',
                'description' => 'I "Bon Jovi" sono un gruppo statunitense che suona glam metal e hard rock, formatosi nel 1983 nella città del New Jersey di Sayreville. Attualmente la band è formata dalla voce Jon Bon Jovi, il tastierista David Bryan e il batterista Tico Torres. La formazione originaria comprendeva anche il bassista Alec J.'
            ],
            [
                'title' => 'Live at Wembley 86',
                'author' => 'Queen',
                'year' => 1992,
                'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
                'genre' => 'Pop',
                'description' => 'I Queen sono un gruppo musicale rock britannico, formatosi a Londra nel 1970 dall\'incontro tra il cantante e pianista Freddie Mercury, il chitarrista Brian May e il batterista Roger Taylor; la formazione storica si completò poi nel 1971, con l\'ingresso del bassista John Deacon.'
            ],
            [
                'title' => 'Ten\'s Summoner\'s Tales',
                'author' => 'Sting',
                'year' => 1993,
                'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
                'genre' => 'Pop',
                'description' => 'Sting, pseudonimo di Gordon Matthew Thomas Sumner (Wallsend, 2 ottobre 1951), è un cantautore, polistrumentista e attore britannico, che ha esordito come membro dei Police per poi intraprendere una carriera solista di successo.'
            ],
            [
                'title' => 'Steve Gadd band',
                'author' => 'Steve Gadd Band',
                'year' => 2018,
                'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
                'genre' => 'Jazz',
                'description' => 'Steve Gadd è uno dei più influenti batteristi dell\'intera storia della musica contemporanea. Il suo "feel", la sua tecnica, la sua musicalità gli hanno permesso di firmare pagine memorabili al fianco di grandi artisti come Paul Simon, Steely Dan o Chick Corea.'
            ],
            [
                'title' => 'Brave new World',
                'author' => 'Iron Maiden',
                'year' => 2000,
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
                'genre' => 'Metal',
                'description' => 'Gli Iron Maiden sono un gruppo musicale heavy metal britannico, formatosi a Londra nel 1975 per iniziativa del bassista Steve Harris. Sono considerati uno dei gruppi più importanti ed influenti del genere e, assieme ad artisti come Saxon, Angel Witch, Samson, Def Leppard, Raven e Venom, fanno parte della New Wave of British Heavy Metal,orrente al cui sviluppo hanno fortemente contribuito'
            ],
            [
                'title' => 'One more car, one more rider',
                'author' => 'Eric Clapton',
                'year' => 2002,
                'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
                'genre' => 'Rock',
                'description' => 'Eric Clapton è uno dei cantautori e chitarristi più famosi al mondo. Nato il 30 marzo 1945 nel Surrey, nell\'Inghilterra sud-orientale, viene cresciuto dalla nonna e fin dai tempi dell\'adolescenza sviluppa un particolare interesse verso la chitarra.'
            ],
            [
                'title' => 'L.A. Woman',
                'author' => 'The Doors',
                'year' => 1971,
                'poster' => 'https://m.media-amazon.com/images/I/811ftXPQQ-L._AC_SL1437_.jpg',
                'genre' => 'Rock',
                'description' => 'The Doors furono uno dei gruppi più prolifici degli anni \'60 psichedelici, guidati dal sempre strano Jim Morrison, cantante, con Robby Krieger, alla chitarra, Ray Manzarek, alle tastiere e John Densmore alla batteria.'
            ],
            [
                'title' => 'Slip of the Tongue',
                'author' => 'The Whitesnake',
                'year' => 1989,
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/8/89/Slip_of_the_tongue.jpg',
                'genre' => 'Rock',
                'description' => 'I Whitesnake sono un gruppo musicale hard rock fondato nel 1978 a Londra, Regno Unito, in seguito all\'abbandono dei Deep Purple da parte del cantante David Coverdale. Nella fase iniziale della sua carriera, la band produsse del materiale che i critici spesso accostarono al blues rock dei Deep Purple, per spostarsi successivamente verso un rock più accessibile. Verso la fine degli anni 70, la band iniziò a conoscere il successo commerciale attraverso una serie di album che entrarono nella top 10 inglese, quali Ready.  Come an\' Get It (1981), Saints & Sinners (1982) and Slide It In (1984).'
            ],
            [
                'title' => 'Abbey Road',
                'author' => 'The Beatles',
                'year' => 1969,
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/4/42/Beatles_-_Abbey_Road.jpg',
                'genre' => 'Rock',
                'description' => 'Lo stile dei Beatles è caratteristico e facilmente riconoscibile. La musica è nuova e incontra i gusti delle giovani generazioni: i testi delle prime canzoni sono semplici, parlano per lo più d\'amore e la struttura, costituita da strofe e ritornelli,è intonata a melodie orecchiabili e pacevoli da ascoltare.'
            ],
            [
                'title' => 'Sabotage',
                'author' => 'Black Sabbath',
                'year' => 1975,
                'poster' => 'https://m.media-amazon.com/images/I/71pqd5oXKfL._AC_SX522_.jpg',
                'genre' => 'Rock',
                'description' => 'I Black Sabbath sono stati un gruppo musicale heavy metal britannico, formatosi a Birmingham nel 1968 e scioltosi dopo un tour d\'addio nel 2017. La formazione "storica" era costituita da Ozzy Osbourne (voce), Tony Iommi (chitarra), Geezer Butler (basso) e Bill Ward (batteria), rimasta invariata dal 1969 al 1978.'
            ],
            [
                'title' => 'Destroyer',
                'author' => 'The Kiss',
                'year' => 1976,
                'poster' => 'https://m.media-amazon.com/images/I/81LSTglQXLL._AC_SL1400_.jpg',
                'genre' => 'Rock',
                'description' => 'I Kiss (spesso reso graficamente come KIϟϟ) sono un gruppo musicale statunitense, formatosi a New York nel 1973 per iniziativa del bassista Gene Simmons e del chitarrista Paul Stanley.'
            ],
            [
                'title' => 'Strange Days',
                'author' => 'The Struts',
                'year' => 2020,
                'poster' => 'https://m.media-amazon.com/images/I/91XwfCxPF0L._AC_SY355_.jpg',
                'genre' => 'Rock',
                'description' => 'I The Struts sono un gruppo rock britannico fondato nel 2009 su iniziativa del cantante Luke Spiller e del chitarrista Adam Slack. Unitisi Jed Elliott al basso e Gethin Davies alla batteria tre anni dopo, il quartetto si ritaglia presto un\'eccezionale reputazione sul palcoscenico, arrivando ad aprire il concerto dei Rolling Stones allo Stade de France il 13 giugno 2014. Il loro primo album, distribuito dalla Universal Music il 28 luglio 2014, s\'intitola Everybody Wants.'
            ]
        ];
        
        foreach ($discs as $disc) {
           $new_disc =  new Disc();
           $new_disc->fill($disc);
           $new_disc->save();
        }
    }
}
