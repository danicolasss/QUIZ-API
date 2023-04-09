<?php

namespace App\DataFixtures;
use App\Entity\Reponse;
use App\Repository\QuestionRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
class ReponseFixtures extends Fixture implements DependentFixtureInterface
{
    public static function getGroups(): array
{
    return ['group1'];
}
    private QuestionRepository $questionRepository;

    /**
     * @param QuestionRepository $questionRepository
     */
    public function __construct(QuestionRepository $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    public function load(ObjectManager $manager): void
    {


        $reponses= [
        [ 'intituler' => 'Le pharaon merveilleux' , 'correct' => '0' , 'question_id' =>"0" ],
        [ 'intituler' => 'Le pharaon bâtisseur' , 'correct' => '1' , 'question_id' => "0"],
        [ 'intituler' => 'Le pharaon sculpteur' , 'correct' => '0' , 'question_id' =>"0"],
        [ 'intituler' => 'Le phar à paupiéres' , 'correct' => '0' , 'question_id' => "0"],

        [ 'intituler' => 'Le cœur' , 'correct' => '1' , 'question_id' => "1"],
        [ 'intituler' => 'Le petit intestin' , 'correct' => '0' , 'question_id' => "1"],
        [ 'intituler' => 'Le foie' , 'correct' => '0' , 'question_id' => "1"],
        [ 'intituler' => 'Le gros intestin' , 'correct' => '0' , 'question_id' => "1"],

        [ 'intituler' => 'L’abeille' , 'correct' => '0' , 'question_id' => "2"],
        [ 'intituler' => 'Le scarabée' , 'correct' => '1' , 'question_id' => "2"],
        [ 'intituler' => 'Le phasme' , 'correct' => '0' , 'question_id' => "2"],
        [ 'intituler' => 'L’araignée' , 'correct' => '0' , 'question_id' => "2"],

        [ 'intituler' => 'La pierre de Rosette' , 'correct' => '1' , 'question_id' => "3"],
        [ 'intituler' => 'La pierre du Pharaon' , 'correct' => '0' , 'question_id' => "3"],
        [ 'intituler' => 'La pierre de Toutânkhamon' , 'correct' => '0' , 'question_id' => "3"],
        [ 'intituler' => 'La pierre d\'infinité ' , 'correct' => '0' , 'question_id' => "3"],

        [ 'intituler' => 'Une amulette ' , 'correct' => '0' , 'question_id' => "4"],
        [ 'intituler' => 'Un cartouche ' , 'correct' => '1' , 'question_id' => "4"],
        [ 'intituler' => 'Un paraphe ' , 'correct' => '0' , 'question_id' => "4"],
        [ 'intituler' => 'Une Tôutà' , 'correct' => '0' , 'question_id' => "4"],

        [ 'intituler' => 'Du temple d’Abou Simbel ' , 'correct' => '0' , 'question_id' => "5"],
        [ 'intituler' => 'Du temple de Louxor ' , 'correct' => '1' , 'question_id' => "5"],
        [ 'intituler' => 'Du temple de Karnak ' , 'correct' => '0' , 'question_id' => "5"],
        [ 'intituler' => 'Du temple Run ' , 'correct' => '0' , 'question_id' => "5"],

        [ 'intituler' => 'Sésostris' , 'correct' => '0' , 'question_id' => "6"],
        [ 'intituler' => 'Sekhemkhet' , 'correct' => '0' , 'question_id' => "6"],
        [ 'intituler' => 'Mykérinos' , 'correct' => '1' , 'question_id' => "6"],
        [ 'intituler' => 'Gypse' , 'correct' => '0' , 'question_id' => "6"],

        [ 'intituler' => 'le Soleil et la Terre' , 'correct' => '0' , 'question_id' => "7"],
        [ 'intituler' => 'la légitimité du pharaon sur la Haute et Basse-Égypte' , 'correct' => '1' , 'question_id' => "7"],
        [ 'intituler' => 'la dimension divine du pharaon, mi-homme, mi-dieu' , 'correct' => '0' , 'question_id' => "7"],
        [ 'intituler' => 'le Ying et le Yang' , 'correct' => '0' , 'question_id' => "7"],

        [ 'intituler' => 'Le chat' , 'correct' => '0' , 'question_id' => "8"],
        [ 'intituler' => 'Le chien' , 'correct' => '0' , 'question_id' => "8"],
        [ 'intituler' => 'L\'ibis' , 'correct' => '0' , 'question_id' => "8"],
        [ 'intituler' => 'L\'aigle' , 'correct' => '1' , 'question_id' => "8"],

        [ 'intituler' => 'Ponais' , 'correct' => '0' , 'question_id' => "9"],
        [ 'intituler' => 'Ponay' , 'correct' => '0' , 'question_id' => "9"],
        [ 'intituler' => 'Poney' , 'correct' => '1' , 'question_id' => "9"],
        [ 'intituler' => ' Peaunai' , 'correct' => '0' , 'question_id' => "9"],

        [ 'intituler' => 'Éternuemant' , 'correct' => '0' , 'question_id' => "10"],
        [ 'intituler' => 'Éthernuement' , 'correct' => '0' , 'question_id' => "10"],
        [ 'intituler' => 'Éternuement' , 'correct' => '1' , 'question_id' => "10"],
        [ 'intituler' => 'Éternument' , 'correct' => '0' , 'question_id' => "10"],

        [ 'intituler' => 'Abaye' , 'correct' => '0' , 'question_id' => "11"],
        [ 'intituler' => 'Abbaïe' , 'correct' => '0' , 'question_id' => "11"],
        [ 'intituler' => 'Abbaye' , 'correct' => '1' , 'question_id' => "11"],
        [ 'intituler' => 'Abbéie' , 'correct' => '0' , 'question_id' => "11"],

        [ 'intituler' => 'Assimétrie' , 'correct' => '0' , 'question_id' => "12"],
        [ 'intituler' => 'Assymétrie' , 'correct' => '0' , 'question_id' => "12"],
        [ 'intituler' => 'Asymétrie' , 'correct' => '1' , 'question_id' => "12"],
        [ 'intituler' => 'Asimétrie' , 'correct' => '0' , 'question_id' => "12"],

        [ 'intituler' => 'Serpillière' , 'correct' => '1' , 'question_id' => "13"],
        [ 'intituler' => 'Serrepillaire' , 'correct' => '0' , 'question_id' => "13"],
        [ 'intituler' => 'Serpillaire' , 'correct' => '0' , 'question_id' => "13"],
        [ 'intituler' => 'Serrepillère' , 'correct' => '0' , 'question_id' => "13"],

        [ 'intituler' => 'None' , 'correct' => '0' , 'question_id' => "14"],
        [ 'intituler' => 'Nonne' , 'correct' => '1' , 'question_id' => "14"],
        [ 'intituler' => 'Nônne' , 'correct' => '0' , 'question_id' => "14"],
        [ 'intituler' => 'Nône' , 'correct' => '0' , 'question_id' => "14"],

        [ 'intituler' => 'Papyrus' , 'correct' => '1' , 'question_id' => "15"],
        [ 'intituler' => 'Papirusse' , 'correct' => '0' , 'question_id' => "15"],
        [ 'intituler' => 'Papirus' , 'correct' => '0' , 'question_id' => "15"],
        [ 'intituler' => 'Papyrusse' , 'correct' => '0' , 'question_id' => "15"],

        [ 'intituler' => 'Métafore' , 'correct' => '0' , 'question_id' => "16"],
        [ 'intituler' => 'Métaphore' , 'correct' => '1' , 'question_id' => "16"],
        [ 'intituler' => 'Métaforre' , 'correct' => '0' , 'question_id' => "16"],
        [ 'intituler' => 'Métafort' , 'correct' => '0' , 'question_id' => "16"],

        [ 'intituler' => 'Cassonade' , 'correct' => '1' , 'question_id' => "17"],
        [ 'intituler' => 'Casonade' , 'correct' => '0' , 'question_id' => "17"],
        [ 'intituler' => 'Casonnade' , 'correct' => '0' , 'question_id' => "17"],
        [ 'intituler' => 'Cassonnade' , 'correct' => '0' , 'question_id' => "17"],




    ];

        foreach ($reponses as $reponse){
            $question = $this->questionRepository->find(intval($reponse['question_id']));

            if ($question){
            $object = new Reponse();
            $object->setIntutile($reponse['intituler']);
            $object->setCorrect($reponse['correct']);
            $object->addQuestion($question);
            $manager->persist($object);
            }
        }

        $manager->flush();
    }
    public function getDependencies(){
        return [
            QuestionFixtures::class
        ];
    }

}
