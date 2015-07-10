<?php 
/**
 * ImportLocations
 * populates the locations table based upon the ids supplied in file (vendors/new_location_file/new_locations.csv)
 */

class addCodesTask extends Shell {
	var $uses = array('PromotionalCode');
	
	/**
	* function execute
 	* $amount the number of places to update for each execution
	*/	
	function execute() {
		$codes_added = 0; // tracks the number of locations that were successfully stored in the database;
					
		$this->hr();
		$this->out("adding codes"); 
		$this->hr(); 
		
		$codes = $this->__getIdsFromFile();
		foreach($codes as $code){
			echo intval($code);
			
			$new_code = array(
				'code' => $code,
				'hashed_code' => md5(utf8_encode("oiadfuhadf89adsyh".intval($code))),
				'has_been_redeemed' => false
			);
			
			$this->PromotionalCode->create();
			$this->PromotionalCode->set($new_code);
			$this->PromotionalCode->save();
			
			$codes_added++;
		}
		
		$this->out("$codes_added codes added to the database.");
		$this->hr();
	}

	private function __getIdsFromFile(){
		$this->out("reading csv file...", 1);
		
		$path = APP_PATH . 'vendors' . DS . 'codes' . DS . 'codes.csv';	
		$codes_file = @fopen($path, "r") or $this->error("No location file found in $path");
				
		$contents = fread($codes_file, filesize($path));    
		fclose($codes_file);
		
		$this->out("done", 2);
		
		return explode("\n", $contents);
	}
}

?>