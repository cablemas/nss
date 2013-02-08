<?php date_default_timezone_set('America/Mexico_City');
	class db extends mysqli { 
    	public function prepare($query) { 
        	return new stmt($this,$query); 
    	} 
	} 

	class stmt extends mysqli_stmt { 
    	public function __construct($link, $query) { 
        	$this->mbind_reset(); 
        	parent::__construct($link, $query); 
    	} 

    public function mbind_reset() { 
        unset($this->mbind_params); 
        unset($this->mbind_types); 
        $this->mbind_params = array(); 
        $this->mbind_types = array(); 
    } 
    
    //utilizar éste para enlazar parametros por referencia
    public function mbind_param($type, &$param) { 
    	//$this->mbind_types[0].= $type; 
        $this->mbind_types[].= $type; 
        $this->mbind_params[] = &$param; 
    } 
    
    //utilizar éste para enlazar el valor directamente, se puede mezclar con mbind_param()
    public function mbind_value($type, $param) { 
        //$this->mbind_types[0].= $type; 
        $this->mbind_types[].= $type; 
        $this->mbind_params[] = $param; 
    } 
    
    
    public function mbind_param_do() { 
        $params = array_merge($this->mbind_types, $this->mbind_params); 
        return call_user_func_array(array($this, 'bind_param'), $this->ValRef($params)); 
    } 
    
    private function ValRef($arr){ 
        $refs = array(); 
        foreach($arr as $key => $value) 
        $refs[$key] = &$arr[$key]; 
        return $refs; 

    } 
    
    public function execute() { 
        if(count($this->mbind_params)) 
            $this->mbind_param_do(); 
            
        return parent::execute(); 
    } 
    
    private $mbind_types = array(); 
    private $mbind_params = array(); 
} 
?>