<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class QuestionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $questions= [
            [ 'intituler' => "Quel est le surnom donné à Ramsès II ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(0))],
            [ 'intituler' => "Lors de la momification, lequel de ces organes n’était pas prélevé pour être conservé dans un vase ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(0))],
            [ 'intituler' => "Quel insecte, incarnation du dieu Khepri, était un symbole sacré à l’époque des pharaons ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(0))],
            [ 'intituler' => "Comment se nomme la pierre, déchiffrée par Jean-François Champollion ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(0))],
            [ 'intituler' => "Comment appelle-t-on le symbole écrit en hiéroglyphes qui contient le nom d’un pharaon ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(0))],
            [ 'intituler' => "D’où vient l’obélisque de la place de la Concorde à Paris ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(0))],
            [ 'intituler' => "Les trois grandes pyramides de Gizeh sont Khéops, Khephren et…" , 'image' => '' , 'theme_id' => $this->getReference("theme".(0))],
            [ 'intituler' => "La double couronne portée par les pharaons égyptiens symbolise :" , 'image' => '' , 'theme_id' => $this->getReference("theme".(0))],
            [ 'intituler' => "Lequel de ces animaux n'est pas associé à un dieu dans la mythologie égyptienne ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(0))],

            [ 'intituler' => "Quel cheval de petite taille possède souvent une crinière épaisse ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(1))],
            [ 'intituler' => "Quelle expiration brusque et bruyante se faitpar le nez et la bouche ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(1))],
            [ 'intituler' => "Quel monastère de moines est placé sous la direction d'un abbé ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(1))],
            [ 'intituler' => "Dans le règne animal, quel terme désigne l'absence de symétrie ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(1))],
            [ 'intituler' => "Quel morceau de toile grossière et résistante sert à laver les sols ? " , 'image' => '' , 'theme_id' => $this->getReference("theme".(1))],
            [ 'intituler' => " Quelle femme doit obéir aux v ?ux de pauvreté, chasteté et obéissance ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(1))],
            [ 'intituler' => "Quelle sorte de papier végétal est confectionné à base de plante ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(1))],
            [ 'intituler' => "LQuelle figure de style, différente d'une comparaison, est fondée sur l'analogie ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(1))],
            [ 'intituler' => "Comment la vergeoise est-elle appelée en Belgique et en Suisse ?" , 'image' => '' , 'theme_id' => $this->getReference("theme".(1))],


        ];
        foreach ($questions as $question){
            $object = new Question();
            $object->setIntitule($question['intituler']);
            $object->setImage($question['image']);
            $object->setTheme($question['theme_id']);
            $manager->persist($object);
        }

        $manager->flush();
    }
    public function getDependencies(){
        return [
            ThemeFixtures::class
        ];
    }
}
