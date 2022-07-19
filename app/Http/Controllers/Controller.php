<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        return view("template.dashboard-content");
    }
    public function home()
    {

    }
    
    public function patientsList()
    {
        return view("patient-360.patients");
    }
    public function newPatient()
    {
        return view('patient-360.patient-form');
    }

    public function addPatient()
    {
        return view("patient-360.patient-form");
    }
    public function showCalender()
    {
        return view("calender.calender");
    }
    public function preOPAnesthesia(){

        return view('anesthesia.preOpAnesthesiaNotes');
    }
    public function cathEchoData(){

        return view('patient-360.cathEchoData');
    }
    public function testSQL()
    {
        return \Illuminate\Support\Facades\DB::table('testing')->get();
    }
    public function testOracle()
    {
        $endpoint = env('ORACLE_DB_BRIDGE');
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://10.10.10.222/skm-bridge/index.php");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);

        $data = curl_exec($curl);

        curl_close($curl);

        print_r($data);
    }
    public function cardiacHistory()
    {
        return view('patient-360.cardiacHistory');
    }
    public function operationRemarks()
    {
        return view('operation.operation-remarks');
    }
    public function operationOutcome()
    {
        return view('operation.operation-outcome');
    }
    public function dischargeSummary()
    {
        return view('patient-360.discharge-summary');
    }
}
