<?php

namespace App\Http\Controllers;

use App\Models\GuzzleModel;
use App\Models\taskwork;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use NunoMaduro\Collision\Writer;

class WordController extends Controller
{

    public function tickets()
    {
        global $t, $agents, $sum;


        $agents = [['agent_id' => 23, 'agentName' => 'abdula'],
            ['agent_id' => 24, 'agentName' => 'aladin'],
            ['agent_id' => 25, 'agentName' => 'ahmad'],
        ];
//        for ($i = 0; $i < count($agents); $i++) {
//            echo $i;
//        }
        $tickets = [['id' => 1, 'agent' => 22],
            ['id' => 2, 'agent' => 23],
            ['id' => 3, 'agent' => 24],
        ];
        foreach ($tickets as $ticket) {
            $t = $ticket['agent'];
            foreach ($agents as $agent) {
                $a = $agent['agent_id'];
                     for($i = 0; $i=1;) {
                if ($t == $a) {
                    $sum++;
                               echo $i;
                }
            }
                if ($sum = 0) {
                    var_dump($ticket, "You not have agent");
                } elseif ($sum = 1) {
                    var_dump($ticket, $agents);
                }
            }

        }
        }
    }




















































//        for ($i = 0, $size = count($array_csv[$task->id]); $i < $size; ++$i) {
//            $array_csv[$i]['id'] = mt_rand(00000, 10000);
//
//                  }

//        header('Content-Type: text/csv; charset=utf-8');
//        header('Content-Disposition: attachment; CSV_FILE.csv');
//        $file_csv = fopen('CSV_FILE.csv', "w") or die("Unable to open file!");
//        foreach ($array_csv[$task->id] as $row) {
//            fputcsv($file_csv, $row);
//        }
//        fclose($file_csv);


//  , Group Name



