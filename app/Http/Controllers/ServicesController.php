<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    
	
	  public function index()
    {
        // You can pass data to the view if needed
        return view('frontend.index');
    }

   public function patientsupportservices()
    {
        // You can pass data to the view if needed
        return view('frontend.patient-support-services');
    }

	public function hospitalHousekeeping()
    {
        return view('frontend.hospital_housekeeping');
    }
	
	public function springcleaningonsaturdays()
    {
        return view('frontend.spring-cleaning-on-saturdays');
    }
	public function guesthouseoperationscope()
    {
        return view('frontend.guest-house-operation-scope');
    }
	
	 public function servicesoffered()
    {
        return view('frontend.services-offered');
    }
	
		public function generalmaintenanceservices()
    {
        return view('frontend.general-maintenance-services');
    }
	
	
	public function corporatehousekeeping()
    {
        return view('frontend.corporate-housekeeping');
    }
	
	public function newlegal()
    {
        return view('frontend.legal');
    }

    public function newblog()
    {
        return view('frontend.blog');
    }
	
}
