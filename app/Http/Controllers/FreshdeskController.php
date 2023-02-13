<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;

class FreshdeskController extends Controller
{
    public function get_tickets()
    {

        $client = new Client();
        $prods = $client->request('GET', 'https://mycompany4657.freshdesk.com/api/v2/tickets?include=description,requester',
            [
                'auth' => ['JLt8oky3eFmd0nrhpuqW', 'pass']]);

        $tasks = json_decode($prods->getBody());
        foreach ($tasks as $task) {

            $requester = $task->requester;
            $tickets_csv[$task->id] = [
                'id' => $task->id,
                'status' => $task->status,
                'priority' => $task->priority,
                'company_id' => $task->company_id,
                'group_id' => $task->group_id,
                'requester_id' => $task->requester_id,
                'responder_id' => $task->responder_id,
                'description' => $task->description_text,
                'name' => $requester->name,
                'email' => $requester->email,
            ];
        }

        $prods = $client->request('GET', 'https://mycompany4657.freshdesk.com/api/v2/agents',
            [
                'auth' => ['JLt8oky3eFmd0nrhpuqW', 'pass']]);
        $agents = json_decode($prods->getBody());
        foreach ($agents as $agent) {
            $contact = $agent->contact;
            $agent_csv[$agent->id] = [
                'agent_email' => $contact->email,
                'agent_name' => $contact->name,
                'responder_id' => $agent->id
            ];
        }
        $all_csv = $tickets_csv + $agent_csv;
        foreach ($all_csv as $step1) {
            var_dump($step1);
        }
        header('Content-Description: File Transfer');
        header('Content-Type: application/csv');
        header("Content-Disposition: attachment; filename=CSV_FILE.csv");
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        $file_csv = fopen('CSV_FILE.csv', 'w') or die("Unable to open file!");;
        foreach ($step1 as $fields) {
            fputcsv($file_csv, $fields, ";");
        }
        fclose($file_csv);

    }
}







