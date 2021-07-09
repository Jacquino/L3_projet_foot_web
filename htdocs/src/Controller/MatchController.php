<?php


namespace App\Controller;



use App\Entity\FootballMatch;
use App\Entity\Scores;
use App\Entity\Teams;
use DateTime;
use PHPUnit\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class MatchController extends AbstractController
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @Route("/match", name="list-match")
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function index() : Response{
        /*$response = $this->client->request(
            'GET',
            'masuperurl'
        );*/
        $json = file_get_contents("../tests/match.json");

        $obj = json_decode($json,true);
        /*foreach ($obj as $match_array){
            $current_date = date('y-m-d h:i:s');
            $match = new FootballMatch();
            $match->setDate($match_array["date"]);
            $teams = new Teams();
            $teams->setDomicile($match_array["teams"]["domicile"]);
            $teams->setExterieur($match_array["teams"]["exterieur"]);
            $match->setTeams($teams);
            if($current_date<$match_array["date"]) {
                $scores = new Scores();
                $scores->setDomicile($match_array["scores"]["domicile"]);
                $scores->setExterieur($match_array["scores"]["exterieur"]);
                $scores->setTireaubut($match_array["scores"]["tireaubut"]);
                if ($scores->getTireaubut() == true) {
                    $scores->setWinner($match_array["scores"]["winner"]);
                }
                $match->setScores($scores);
            }
        }
        print sizeof($obj);
        var_dump($obj[1]["teams"]);die;
        print $obj[1];*/
        //echo gettype($obj);

        return $this-> render("match.html.twig",['matchList' => $obj]);
    }
}