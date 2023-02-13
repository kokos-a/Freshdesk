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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//
//        header('Content-Type: text/csv; charset=utf-8');
//        header('Content-Disposition: attachment; filename=users.csv');
//        $columns = [
//            'id',
//            'status',
//            'priority',
//            'company_id',
//            'group_id',
//            'requester_id',
//            'name',
//            'email',
//            'description',
//            'agent_email',
//            'agent_name',
//            'agent_id',
//
//        ];
//        $client = new Client();
//        $prods = $client->request('GET', 'https://mycompany4657.freshdesk.com/api/v2/tickets?include=description,requester',
//            [
//                'auth' => ['JLt8oky3eFmd0nrhpuqW', 'pass']]);
//
//        $tasks = json_decode($prods->getBody());
//        foreach ($tasks as $task) {
//            $requester = $task->requester;
//            $tickets_csv[$task->id] = [
//                'id' => $task->id,
//                'status' => $task->status,
//                'priority' => $task->priority,
//                'company_id' => $task->company_id,
//                'group_id' => $task->group_id,
//                'requester_id' => $task->requester_id,
//                'name' => $requester->name,
//                'email' => $requester->email,
//                'description' => $task->description_text,
//            ];
//
//        }
//        $prods = $client->request('GET', 'https://mycompany4657.freshdesk.com/api/v2/agents',
//            ['auth' => ['JLt8oky3eFmd0nrhpuqW', 'pass']]);
//        $agents = json_decode($prods->getBody());
//        foreach ($agents as $agent) {
//            $contact = $agent->contact;
//            $agent_csv[$agent->id] = [
//                'agent_email' => $contact->email,
//                'agent_name' => $contact->name,
//                'agent_id' => $agent->id
//            ];
//        }
//        $all_csv = $tickets_csv + $agent_csv;
//            header('Content-Type: text/csv; charset=utf-8');
//            header('Content-Disposition: attachment; filename=users.csv');
//            echo implode(',', $columns) . PHP_EOL;
//            foreach ($all_csv as $product) {
//                echo implode(',', $product) . PHP_EOL;
//            }
////////////////////////////////////////////////////////////////////////
//        $columns = [
//            'id',
//            'product_name',
//            'product_url',
//            'price',
//            'category'
//        ];

//            $products = [
//                [1, 'product 1', 'https://example.com/product-1', '9.99', 'category 1'],
//                [2, 'product 2', 'https://example.com/product-2', '19.99', 'category 2'],
//                [3, 'product 3', 'https://example.com/product-3', '29.99', 'category 3'],
//                [4, 'product 4', 'https://example.com/product-4', '39.99', 'category 4'],
//            ];

//        header('Content-Type: text/csv');
//        header('Content-Disposition: attachment; filename="products.csv"');

//            echo implode(',', $columns) . PHP_EOL;
//            foreach ($products as $product) {
//                echo implode(',', $product) . PHP_EOL;
//            }


//    }



















































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



