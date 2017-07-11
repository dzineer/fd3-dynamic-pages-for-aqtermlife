<?php
namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 12/27/2016
 * Time: 2:46 PM
 */
class FD3_MM_Signup extends FD3Library {

    protected $fields;
	private $url;
	private $gw; // gateway
	private $membership;
	
    public function __construct() {
      //  add_action('fd3_register_form_display', array( $this, 'render') );
    }

// auth_remote
	
	private function mapToMM( $field, $data )
	{
		return array( $field => $data );
	}
	
	private function stateToAbbr( $state ) {
		
	   // echo $state; exit;

		$states = array(
			'Alabama'=>'AL',
			'Alaska'=>'AK',
			'Arizona'=>'AZ',
			'Arkansas'=>'AR',
			'California'=>'CA',
			'Colorado'=>'CO',
			'Connecticut'=>'CT',
			'Delaware'=>'DE',
			'Florida'=>'FL',
			'Georgia'=>'GA',
			'Hawaii'=>'HI',
			'Idaho'=>'ID',
			'Illinois'=>'IL',
			'Indiana'=>'IN',
			'Iowa'=>'IA',
			'Kansas'=>'KS',
			'Kentucky'=>'KY',
			'Louisiana'=>'LA',
			'Maine'=>'ME',
			'Maryland'=>'MD',
			'Massachusetts'=>'MA',
			'Michigan'=>'MI',
			'Minnesota'=>'MN',
			'Mississippi'=>'MS',
			'Missouri'=>'MO',
			'Montana'=>'MT',
			'Nebraska'=>'NE',
			'Nevada'=>'NV',
			'New Hampshire'=>'NH',
			'New Jersey'=>'NJ',
			'New Mexico'=>'NM',
			'New York'=>'NY',
			'North Carolina'=>'NC',
			'North Dakota'=>'ND',
			'Ohio'=>'OH',
			'Oklahoma'=>'OK',
			'Oregon'=>'OR',
			'Pennsylvania'=>'PA',
			'Rhode Island'=>'RI',
			'South Carolina'=>'SC',
			'South Dakota'=>'SD',
			'Tennessee'=>'TN',
			'Texas'=>'TX',
			'Utah'=>'UT',
			'Vermont'=>'VT',
			'Virginia'=>'VA',
			'Washington'=>'WA',
			'West Virginia'=>'WV',
			'Wisconsin'=>'WI',
			'Wyoming'=>'WY'
		);
		
		if( isset( $states[ $state ] ) ) {
			return $states[ $state ];
		}
		else {
			return $state;
		}
  
	}
	
	
	function setGateway( $gw ) {
		$this->gw = $gw;
	}
	
	function setMembership( $membership ) {
		$this->membership = $membership;
	}
	
	
	public function signup() {

        $result = new \stdClass();
        $debugMode = false;
	
	   // $membership = new AQ2EMembership();
		
		$this->getVar( 'FD3')->load->library( 'AQ2ESubscriberService', null, 'subscriber_service', true ) ;
		
		$this->getVar( 'FD3')->subscriber_service->setGateway( $this->gw );
		$this->getVar( 'FD3')->subscriber_service->setMembership( $this->membership );
		
	    $fields = $this->membership->getData();
	    
	    $f1 = $this->membership->personalToArray();
	    $f2 = $this->membership->userToArray();
	    $f3 = $this->membership->agreementsToArray();
	
	    /*
	     		    'shauserid' => $fields->user->userName,
					'shapassword1' => $fields->user->password,
					'shapassword2' => $fields->user->password,
					'Agreement' => $fields->agreements->userAgreement,
					'SPAM' => $fields->agreements->spamComplianceAgreement,
					'Cancel' => $fields->agreements->cancellationAgreement,
					'txt_fname' => $fields->personal->firstName,
					'txt_lname' => $fields->personal->lastName,
					'txt_company' => $fields->personal->companyName,
					'txt_primary_Email' => $fields->personal->emailAddress,
					'txt_secondary_email' => '',
					'txt_buss_st_address' => $fields->personal->address1,
					'txt_city' => $fields->personal->city,
					'state' => $fields->personal->curState->value,
					'txt_zip' => $fields->personal->zipcode,
					'txt_bus_phone' => $fields->personal->phone
					
		*/
	    
	    if( $debugMode ) {
		
		    $data = array(
			
			    'shauserid' => 'frankdd3gmail',
			    'shapassword' => 'asdeDfdfd3ed',
			    'soc_links'=> '',
			    'owner' => '670.46518482',
			    'shauserid1' => 'frankdd3gmail',
			    'shapassword1' => 'asdeDfdfd3ed',
			    'shapassword2' => 'asdeDfdfd3ed',
			    'Agreement' => 'on',
			    'SPAM' => 'on',
			    'Cancel' => 'on',
			    'txt_fname' => 'Test',
			    'txt_lname' => 'Delano',
			    'txt_fdesignations' => '',
			    'txt_license_number' => '',
			    'txt_company' => '',
			    'txt_secondary_email' =>'',
			    'txt_buss_st_address' => '456 gt',
			    'txt_city' => 'Fullerton',
			    'txt_zip' => '90631',
			    'txt_bus_phone' => '2139096035',
			    'txt_cell_phone' => '',
			    'txt_home_phone' => '',
			    'txt_website' => '',
			    'txt_link' => '',
			    'promocode' => ''
		
		    );
	    	
	    }
	
		// $curState->value = substr( $fields['billing_info']['fd3_form_state'], 2 ); // Get Full 

/*
(
    [companyName] => Test Org
    [firstName] => Test
    [lastName] => Delano
    [address1] => 433 Gold St.
    [address2] => 
    [city] => La Habra
    [state] => CACalifornia
    [curState] => stdClass Object
        (
            [text] => CACalifornia
            [value] => California
        )

    [zipcode] => 90631
    [phone] => 8888888888
    [emailAddress] => frankdd3@gmail.com
)
*/
        error_log(sprintf("FD3_MM_Signup::signup - getBGA result: %s", print_r($fields->personal,true)));

	    $state = $this->stateToAbbr( $fields->personal->curState->value ) ;

	    $data = array(

			'txt_license_number' => '',
		    'shauserid' => $fields->user->userName,
		    'shauserid1' => $fields->user->userName,
		    'shapassword' => $fields->user->password,
		    'shapassword1' => $fields->user->password,
		    'shapassword2' => $fields->user->password,
		    'soc_links'=> '',
		    'titles' => '',
		    'owner' => '670.46518482',
		    'txt_fdesignations' =>'',
		    'Agreement' => 'on',
		    'SPAM' => 'on',
		    'Cancel' => 'on',
		    'txt_fname' => $fields->personal->firstName,
		    'txt_lname' => $fields->personal->lastName,
		    'txt_company' => $fields->personal->companyName,
		    'txt_primary_Email' => $fields->personal->emailAddress,
		    'txt_secondary_email' => '',
		    'txt_buss_st_address' => $fields->personal->address1,
		    'txt_city' => $fields->personal->city,
		    'state' => $state,
		    'txt_zip' => $fields->personal->zipcode,
		    'txt_bus_phone' => $fields->personal->phone,
		    'txt_cell_phone' => '',
		    'txt_home_phone' => '',
		    'txt_website' => '',
		    'txt_link' => '',
		    'promocode' => ''
	
	    );
	
	    $result = $this->getVar( 'FD3')->subscriber_service->subscribeToMarketingMailbox( $data );
	    
	    if( $result->successful === true ) {
	    	$result->login_link = $this->getVar( 'FD3')->platform_config->getGlobal( '/services/affiliate/marketing_mailbox/uri_login_link' ) . '?shapassword=' .  $data['shauserid']  . '&shauserid=' . $data['shapassword1'];
	    }

        return $result;
    }

}
