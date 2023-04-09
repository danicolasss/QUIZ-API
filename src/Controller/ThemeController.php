<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Reponse;
use App\Repository\QuestionRepository;
use App\Repository\ThemeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\SerializerInterface;


class ThemeController extends AbstractController
{
    private ThemeRepository $themeRepository;
    private SerializerInterface $serializer;
    private QuestionRepository $questionRepository;
    private EntityManagerInterface $manager;

    /**
     * @param ThemeRepository $themeRepository
     * @param SerializerInterface $serializer
     * @param QuestionRepository $questionRepository
     */
    public function __construct(ThemeRepository $themeRepository, SerializerInterface $serializer, QuestionRepository $questionRepository,EntityManagerInterface $manager )
    {
        $this->themeRepository = $themeRepository;
        $this->serializer = $serializer;
        $this->questionRepository = $questionRepository;
        $this->manager = $manager;

    }

    #[Route('api/themes', name: 'app_theme', methods: ['GET'])]
    public function getTheme(): Response
    {
        $themes = $this->themeRepository->findAll();
        $themeJson = $this->serializer->serialize($themes, 'json' ,['groups'=>'list_theme']);

        return new Response($themeJson, Response::HTTP_OK, ['content-type' => 'application/json']);
    }

    #[Route('api/themes/{slug}/questions/{nbQuestions}', name: 'app_theme_question', methods: ['GET'])]
    public function getThemeQuestion($slug, $nbQuestions): Response
    {

        $themes = $this->themeRepository->findBy(["slug"=>$slug]);

        $questions =$this->questionRepository->findBy(["theme"=>$themes]);
        shuffle($questions);
        $randQuestion = array_slice($questions,0,$nbQuestions);
        $QuestionJson = $this->serializer->serialize($randQuestion, 'json' ,['groups'=>'get_question']);

        return new Response($QuestionJson , Response::HTTP_OK, ['content-type' => 'application/json']);
    }
    #[Route('api/getQuestions/', name: 'app_all_question', methods: ['GET'])]
    public function getAllQuestion(): Response
    {
        $questions =$this->questionRepository->findAll();
        $QuestionJson = $this->serializer->serialize($questions, 'json' ,['groups'=>'get_question']);
        return new Response($QuestionJson , Response::HTTP_OK, ['content-type' => 'application/json']);
    }
    #[Route('api/addQuestions/', name: 'app_add_question', methods: ['POST'])]
    public function getAddQuestion(\Symfony\Component\HttpFoundation\Request $request):Response
    {
        $bodyRequest = $request->getContent();
        $bodyRequest= json_decode($bodyRequest, true);

        foreach ($bodyRequest as $post){
            $this->insertQuestion($post["intitule"],$post["theme_id"],$post["image"]);
            $this->insertReponses($this->questionRepository->findOneBy(array(),array('id'=>'DESC'),1,0),$post["reponse"]);
        }
        return new Response("Insert Réussit" , Response::HTTP_CREATED, ['content-type' => 'application/json']);
    }

    private function insertQuestion(string $intitule, int $theme_id, string $imageUrl)
    {
        $object = new Question();
        $object->setIntitule($intitule);
        $object->setImage($imageUrl);
        $object->setTheme($this->themeRepository->find($theme_id));
        $this->manager->persist($object);
        $this->manager->flush();
    }

    private function insertReponses(Question $question,array $reponses)
    {
       foreach ($reponses as $reponse){
           $object = new Reponse();
           $object->setIntutile($reponse["intitule"]);
           $object->setCorrect($reponse['correct']);
           $object->addQuestion($question);
           $this->manager->persist($object);
       }
        $this->manager->flush();
    }

}
