<?php

namespace App\DataFixtures;

use App\Entity\Book;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    //$manager est un service injecté (injection de dépendance)
    public function load(ObjectManager $manager)
    {
        $data = [
            [
            'title' => "Respire !", 
            'cover' => "respire.jpg",
            'parution' => new DateTime('2020/01/09'),
            'resume' => "Et s'il existait un Plan ? Si tout ce que nous vivions avait été placé sur
                        notre chemin pour nous permettre de nous accomplir ?
                        Malo, 30 ans, virtuose de la stratégie, est appelé à Bangkok pour redresser une
                        entreprise en difficulté. Quelques semaines après son arrivée, il surprend une
                        conversation qui l'anéantit : il ne lui resterait que peu de temps à vivre...
                        Au moment où il perd tout espoir, une vieille dame lui propose un pacte étrange :
                        en échange de 30 jours de la vie du jeune homme, elle le met au défi. Sera-t-il
                        prêt à tenter une série d'expériences susceptibles de modifier le cours de son destin ?
                        Malo accepte et le voilà embarqué dans un incroyable périple aux saveurs et aux parfums
                        de la Thaïlande, au terme duquel il pourrait découvrir l'ultime vérité.",
            'prix' => "16,00 €",
            ],
            [
                'title' => "Féminité sacrée", 
                'cover' => "feminite_sacree.jpg",
                'parution' => new DateTime('2020/06/04'),
                'resume' => "Explorez votre féminité sacrée et révélez tous vos potentiels pour célébrer votre nature sauvage.
                            En choisissant d'ouvrir cet oracle, vous décidez de prendre en main votre destin de femme sauvage
                             en vous libérant de tous vos conditionnements, de tous vos carcans, afin de retrouver une totale
                            liberté d'être et ainsi vivre pleinement votre destinée et vos rêves. Ce coffret est une invitation
                            à relever l'un des plus grands défis de votre incarnation en dévoilant votre potentiel inexploité.
                            Laissez-vous guider par les tirages et mettez en application les ateliers de vie proposés dans le
                            livre pour avancer sur votre chemin de vie.",
            'prix' => "22,90 €",
            ],
            [
                'title' => "L'art subtil de s'en foutre", 
                'cover' => "art.jpg",
                'parution' => new DateTime('2017/06/01'),
                'resume' => "Un livre de développement personnel pour ceux qui détestent le développement personnel.
                            Le discours ambiant nous pousse sans cesse à nous améliorer. Sois plus heureux. Sois en
                            meilleure santé. Sois plus intelligent, plus rapide, plus riche, plus sexy, plus productif.
                            Mais il faut en finir avec la pensée positive, nous dit Mark Manson. 'Soyons honnêtes :
                            parfois tout va de travers, et il faut faire avec.'
                            Depuis quelques années, à travers son blog au succès phénoménal, Mark Manson explore les
                            aspirations délirantes qui déforment notre perception du monde. Il propose ici sa sagesse pratique,
                            joyeusement insolente. C'est en regardant en face nos peurs, nos défauts et nos incertitudes - en
                            arrêtant de fuir et d'éviter -, que nous pourrons trouver le courage et la confiance qui nous
                            manquent tant.",
            'prix' => "14,90 €",
            ]
            ];

            foreach ($data as $b) {
                $book = new Book;
                $book
                ->setTitle($b['title'])
                ->setCover($b['cover'])
                ->setParution($b['parution'])
                ->setResume($b['resume'])
                ->setPrix($b['prix']);


                $manager->persist(($book));
            }
            //a la fin
        $manager->flush();
    }
}
