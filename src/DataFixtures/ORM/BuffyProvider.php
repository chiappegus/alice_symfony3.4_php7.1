<?php
 
namespace App\DataFixtures\ORM;
 
use Faker\Provider\Base as BaseProvider;
use Faker\Generator;
 
class BuffyProvider extends BaseProvider
{
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
    }
 
    public function buffyQuote()
    {
        $key = array_rand($this->quotes);
        return $this->quotes[$key];
    }
    
   /* public function gustavoName()
    {
        $key = array_rand($this->quotes);
        return $this->quotes[$key];
    }*/

       public function gustavoNmujereslatinas()
    {
        $key = array_rand($this->mujeres);
        return $this->mujeres[$key];
    }



       public function gustavoNHombrelatinos()
    {
        $key = array_rand($this->hombres);
        return $this->hombres[$key];
    }

    public function gustavoNombreslatinos()
    {   $Seleccion = array_rand($sexo=["mujeres","Hombres"]);
        if ($Seleccion=="mujeres") {
             return $this-> gustavoNmujereslatinas();
        }else {
            return $this->gustavoNHombrelatinos();
        }
       
    }

#https://listas.20minutos.es/lista/las-comidas-mas-populares-y-sencillas-del-mundo-por-paises-425492/
    public function gustavoPComidas()
    {    $Seleccion = array_rand($sexo=["TORTILLA DE PATATAS",
        "PIZZA(Italia)",
        "HUEVOS FRITOS CON CHORIZO(España)",
        "BOCATA DE CALAMARES(España)",
        "SPAGUETTI CARBONARA (Italia)",
        "SÁNDWICH(Inglaterra)",
        "SAN JACOBO (Suiza)",
        "TARTA SACHER (Austria)",
        "SUSHI (Japón)",
        "ROLLITOS DE PRIMAVERA (China)",
        "MOUSSAKA (Grecia)",
        "LA FONDUE (Suiza)",
        "SARDINHAS ASSADAS (Portugal)",
        "CREPES (Francia)",
        "FALAFEL (Egipto)",
        "FISH AND CHIPS (Inglaterra)",
        "CHORIPÁN (Argentina)",
        "CEVICHE DE CAMARÓN (Ecuador)",
        "AREPAS (Colombia)"

        ]);
     
            return $sexo[$Seleccion];
        
       
    }



    

    


 
    // src: https://thoughtcatalog.com/jayson-flores/2014/06/the-25-best-buffy-the-vampire-slayer-quotes/
    private $quotes = [
        "The hardest thing in this world is to live in it. Be brave. Live.",
        "Out. For. A. Walk. Bitch.",
        "I owe you pain.",
        "[On life] Yes, it’s terribly simple. The good guys are always stalwart and true, the bad guys are easily distinguished by their pointy horns or black hats, and, uh, we always defeat them and save the day. No one ever dies, and everybody lives happily ever after.",
        "I may be dead, but I’m still pretty.",
        "Passion...it lies in all of us. Sleeping, waiting, and though unwanted, unbidden, it will stir, open its jaws, and howl. It speaks to us, guides us... passion rules us all. And we obey. What other choice do we have? Passion is the source of our finest moments; the joy of love, the clarity of hatred, and the ecstasy of grief. It hurts sometimes more than we can bear. If we could live without passion, maybe we’d truly know some kind of peace. But we would be hollow. Empty rooms, shuttered and dank... without passion, we’d truly be dead.",
        "No, she was never gone. She was with me. We should have been forever, and I – I let her be dead. She’s really dead. And I killed her.",
        "So, either you hit her, or you did your wacky mime routine for her.",
        "You’re not friends. You’ll never be friends. Love isn’t brains, children, it’s blood. Blood screaming inside you to work its will. I may be love’s bitch, but at least I’m man enough to admit it.",
        "Seize the moment, ‘cause tomorrow you might be dead.",
        "I’ve seen honest faces before. They’re usually attached to liars.",
        "Strong is fighting. It’s hard and it’s painful and it’s every day. It’s what we have to do, and we can do it together, but if you’re too much of a coward for that, then burn.",
        "You still my girl?",
        "Don’t be ridiculous. Martha Stewart isn’t a demon. She’s a witch. Nobody could do that much decoupage without calling on the powers of darkness.",
        "[To Xander] It must be really hard when all your friends have, like superpowers; Slayer, werewolf, witch, vampires; and you’re, like, this little nothing.",
        "Funny. ‘Cause I look around at this world you’re so eager to be a part of, and all I see is six billion lunatics looking for the fastest ride out. Who’s not crazy? Look around. Everyone’s drinking, smoking, shooting up, shooting each other, or just plain screwing their brains out ‘cause they don’t want ‘em anymore. I’m crazy? Honey, I’m the original one-eyed chicklet in the kingdom of the blind. ‘Cause at least I admit the world makes me nuts.",
        "If the apocalypse comes, beep me.",
        "[On humans] I guess I just realized how amazingly screwed up they all are. I mean, really, really screwed up, in a monumental fashion. And they have no purpose that unites them so they just drift around, blundering through life until they die... which they... they know is coming, yet every single one of them is surprised when it happens to them. They’re incapable of thinking about what they want beyond the moment. They kill each other, which is clearly insane. And yet, here’s the thing – when it’s something that really matters, they fight. I mean, they’re lame morons for fighting, but they do. They never... never quit. So I guess I will keep fighting too.",
        "I want to take comfort in you, and I know it will cost me my soul, and a part of me doesn’t care.",
        "When are you going to this, B? Life for a Slayer is very simple — want...take...have.",
        "The Earth is doomed.",
        "When I say ‘I love you,’ it’s not because I want you or because I can’t have you. It has nothing to do with me. I love what you are, what you do, how you try. I’ve seen your kindness and your strength. I’ve seen the best and worst of you. And I understand with perfect clarity exactly what you are. You’re a hell of a woman. You’re the one, Buffy.",
        "[To Angel] My diary? You read my diary? That is not okay! A diary is like a person’s most private place! You don’t even know what I was writing about! ‘Hunk’ can mean a lot of things, bad things. And, when it says that your eyes are ‘penetrating’, I meant to write ‘bulging’. And ‘A’ doesn’t even stand for Angel for that matter, it stands for Achmed, a charming foreign exchange student, so that whole fantasy part has nothing to even do with you at all...",
        "[To Angel] We’re not friends. We never were. And I can fool Giles, and I can fool my friends, but I can’t fool myself. Or Spike, for some reason. What I want from you I can never have.",
        "I’m the thing that monsters have nightmares about. And right now, you and me are gonna show ‘em why.",
    ];
    private $mujeres = [
    "Abigail", "Abril", "Agustina", "Alaia", "Alana", "Alba Luz", "Alejandra", "Alicia", "Altagracia", "Alma", "Antonella", "Antonia", "Ariana", "Ashley", "Bárbara", "Beatriz", "Belén", "Briana", "Brithany", "Camila", "Caridad", "Carmen", "Carmen Luisa", "Carolina", "Catalina", "Celeste", "Claudia", "Concepción", "Daniela", "Danna", "Dayana", "Del Carmen", "Delfina", "Domenica", "Dulce María", "Elizabeth", "Emilia", "Emily", "Emma", "Esmeralda", "Evelyn", "Florencia", "Francesca/Francisca", "Gabriela", "Génesis", "Guadalupe", "Isabella", "Isidora", "Jimena", "Josefa", "Josefina", "Juana", "Julia", "Julieta", "Kamila", "Karla", "Karla Patricia", "Kiara", "Kimberly", "Laura", "Leticia", "Lidia", "Lisandra", "Liz", "Luana", "Lucía", "Luciana", "Luisa", "Luisa Fernanda", "Luz", "Luz María", "Mabel", "Maite", "Margarita", "María", "María Ángeles", "María Carmen", "María Celeste", "María del Carmen", "María Dolores", "María Elena", "María Fernanda", "María Isabel", "María Jesús", "María José", "María Luisa", "María Paula", "María Teresa", "Mariana", "Mariangel", "Mariapaz", "Maritza", "Martha", "Martina", "Mayelin", "Melany", "Mercedes", "Mia", "Mikaela", "Morena", "Noemí", "Odalys", "Olga Marina", "Olivia", "Patricia", "Paula", "Ramona", "Raquel", "Reina Isabel", "Rosa", "Rosmery", "Roxana", "Salomé", "Samantha", "Sara Sofía", "Sara Valentina", "Silvia", "Sofía", "Sonia", "Sophia", "Tania", "Teresa", "Trinidad", "Valentina", "Valeria", "Vanessa", "Verónica", "Victoria", "Ximena", "Yadira", "Yaima", "Yamileth", "Yanelis", "Yanet", "Zoe",];

    private  $hombres = ["Adrián", "Agustín", "Alberto", "Alejandro", "Alexander", "Alexis", "Alonso", "Andrés Felipe", "Ángel", "Anthony", "Antonio", "Bautista", "Benicio", "Benjamín", "Carlos", "Carlos Alberto", "Carlos Eduardo", "Carlos Roberto", "César", "Cristóbal", "Daniel", "David", "Diego", "Dylan", "Eduardo", "Emiliano", "Emmanuel", "Enrique", "Erik", "Ernesto", "Ethan", "Fabián", "Facundo", "Felipe", "Félix", "Félix María", "Fernando", "Francisco", "Francisco Javier", "Gabriel", "Gaspar", "Gustavo Adolfo", "Hugo", "Ian", "Iker", "Isaac", "Jacob", "Javier", "Jayden", "Jeremy", "Jerónimo", "Jesús", "Jesús Antonio", "Jesús Víctor", "Joaquín", "Jorge", "Jorge Alberto", "Jorge Luis", "José", "José Antonio", "José Daniel", "José David", "José Francisco", "José Gregorio", "José Luis", "José Manuel", "José Pablo", "Josué", "Juan", "Juan Ángel", "Juan Carlos", "Juan David", "Juan Esteban", "Juan Ignacio", "Juan José", "Juan Manuel", "Juan Pablo", "Juan Sebastián", "Julio", "Julio Cesar", "Justin", "Kevin", "Lautaro", "Liam", "Lian", "Lorenzo", "Lucas", "Luis", "Luis Alberto", "Luis Emilio", "Luis Fernando", "Manuel", "Manuel Antonio", "Marco Antonio", "Mario", "Martín", "Mateo", "Matías", "Maximiliano", "Maykel", "Miguel", "Miguel Ángel", "Nelson", "Noah", "Oscar", "Pablo", "Pedro", "Rafael", "Ramón", "Raúl", "Ricardo", "Rigoberto", "Roberto", "Rolando", "Samuel", "Samuel David", "Santiago", "Santino", "Santos", "Sebastián", "Thiago", "Thiago Benjamín", "Tomás", "Valentino", "Vicente", "Víctor", "Víctor Hugo", ];
}

