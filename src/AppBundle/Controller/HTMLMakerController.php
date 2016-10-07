<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\DataCollectorTranslator;
use AppBundle\Entity\TournamentClub;
use Symfony\Component\HttpFoundation\JsonResponse;

class HTMLMakerController {

	private $installationMessages = array (
							"amountCourt" => "Courts",
							"crystalCourts" => "Crystal Courts",
							"wallCourts" => "Wall Courts",
							"coverCourts" => "Cover Courts",
							"centralCourts" => "Central Courts",
							"individualCourts" => "Individual Courts",
							"equipmentRental" => "Equipment Rental",
							"foodServices" => "Food Services",
							"showers" =>"Showers",
							"disabledAccess" => "Disabled Access",
							"Gym" => "Gym",
							"sauna" => "Sauna",
							"kindergarten" => "Kindergarten",
							"jacuzzi" => "Jacuzzi",
							"parking" => "Parking",
							"parkingMotorcycles" => "Parking Motorcycles",
							"parkingBicycles" => "Parking Bicycles",
							"waterpool" => "Waterpool",
							"locker" => "Locker",
							"shop" => "Shop",
							"wifi" => "WiFi",
							"playground" => "Playground",
							"school" => "School",
							"americanTournament" => "American Tournament",
							"leagues" => "Leagues",
							"ilumination" => "Ilumination"
							);
	
	private $dataMessages = array (
							"Name",
							"Phone",
							"Email",
							"Address",
							"Schedule"
							);

	private $webMessages = array (
							"Web",
							"Facebook",
							"Twitter",
							"Instagram",
							"Skype"
							);

	private $contactMessages = array (
							"Name",
							"Email",
							"Phone"
							);

	public function formData(DataCollectorTranslator $translator, $inputGroup) {
		$inputs = explode('*', $inputGroup);
		$html = "";
		$strPreLabel = "<div class='row'><div class='col-md-1 col-md-offset-4'>";
		$strPreForm = "</div><div class='col-md-3'><div class='form-group input-group-sm'>";
		$strPostForm = "</div></div></div>";
        
        $i = 0;
		foreach ($this->dataMessages as $value ) { 
			$trans = $translator->trans($value);
			$html = $html . $strPreLabel . $trans . $strPreForm . $inputs[$i] . $strPostForm;
			$i++;
		}

		return $html;
	}

	public function formInstallations(DataCollectorTranslator $translator, $inputGroup) {
		$inputs = explode('*', $inputGroup);
		$html = "<div class='col-md-4 col-md-offset-4'><div class='checkbox'> ";
		$strPostForm = "<br />";
		$trans;

        $i = 0;
		foreach ($this->installationMessages as $key => $value ) { 
			$trans = $translator->trans($value);
			$html = $html . $trans . $inputs[$i] . $strPostForm;
			$i++;
		}
		$html = $html . "</div></div>";
		return $html;  
	}

	public function formWebs(DataCollectorTranslator $translator, $inputGroup) {
		$inputs = explode('*', $inputGroup);
		$html = "";
		$strPreLabel = "<div class='row'><div class='col-md-1 col-md-offset-4'>";
		$strPreForm = "</div><div class='col-md-3'><div class='form-group input-group-sm'>";
		$strPostForm = "</div></div></div>";

		$i = 0;
		foreach ($this->webMessages as $value ) { 
			$trans = $translator->trans($value);
			$html = $html . $strPreLabel . $trans . $strPreForm . $inputs[$i] . $strPostForm;
			$i++;
		}

		return $html;
	}

	public function formContact(DataCollectorTranslator $translator, $inputGroup) {
		$inputs = explode('*', $inputGroup);
		$html = "";
		$strPreLabel = "<div class='row'><div class='col-md-1 col-md-offset-4'>";
		$strPreForm = "</div><div class='col-md-3'><div class='form-group input-group-sm'>";
		$strPostForm = "</div></div></div>";

		$i = 0;
		foreach ($this->contactMessages as $value ) { 
			$trans = $translator->trans($value);
			$html = $html . $strPreLabel . $trans . $strPreForm . $inputs[$i] . $strPostForm;
			$i++;
		}

		return $html;	
	}


	public function viewData(DataCollectorTranslator $translator, $inputGroup) {
		$inputs = explode('*', $inputGroup);
		$html = "";
		$strPreLabel = "<div class='row user-info'><div class='col-md-1 col-md-offset-4'>";
		$strPreData = "</div><div class='col-md-3'>";
		$strPostData = "</div></div>";
        
        $i = 0;
		foreach ($this->dataMessages as $value ) { 
			$trans = $translator->trans($value);
			$html = $html . $strPreLabel . $trans . $strPreData . $inputs[$i] . $strPostData;
			$i++;
		}

		return $html;
	}

	public function viewInstallations(DataCollectorTranslator $translator, $inputGroup, $club) {

		$inputs = explode('*', $inputGroup);
		$html = "";
		$strPreData = "<div class='row user-info'><div class='col-md-4 col-md-offset-4'>";
		$strPostData = "</div></div>";
        
        $clubInstallations = $club->getInstallations();

        $i = 0;
		foreach ($this->installationMessages as $key => $value ) { 
			if ($clubInstallations[$key] > 0 ) {
				$trans = $translator->trans($value);
				$html = $html . $strPreData . $trans . $inputs[$i] . $strPostData;
				$i++;
			}
		}
		return $html;
 	}

 		public function viewWebs(DataCollectorTranslator $translator, $inputGroup) {

		$inputs = explode('*', $inputGroup);
		$html = "";
		$strPreLabel = "<div class='row user-info'><div class='col-md-1 col-md-offset-4'>";
		$strPreData = "</div><div class='col-md-3'>";
		$strPostData = "</div></div>";
        
        $i = 0;
		foreach ($this->webMessages as $value ) { 
			$trans = $translator->trans($value);
			$html = $html . $strPreLabel . $trans . $strPreData . $inputs[$i] . $strPostData;
			$i++;
		}

		return $html;
 	}

 		public function viewContact(DataCollectorTranslator $translator, $inputGroup) {

		$inputs = explode('*', $inputGroup);
		$html = "";
		$strPreLabel = "<div class='row user-info'><div class='col-md-1 col-md-offset-4'>";
		$strPreData = "</div><div class='col-md-3'>";
		$strPostData = "</div></div>";
        
        $i = 0;
		foreach ($this->contactMessages as $value ) { 
			$trans = $translator->trans($value);
			$html = $html . $strPreLabel . $trans . $strPreData . $inputs[$i] . $strPostData;
			$i++;
		}

		return $html;
 	}
}