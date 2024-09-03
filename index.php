<?php

 class Payroll{ 

 


    private string $fn = "John";
    private string $ln = "Volta";
  

    private float $tax = 50;
    private float $salary = 500;

public function computeNet(): float {
   return $net = $this->salary - $this->tax;
}

    public function getEmployeeName(): string {
     return  $Employee  = $this->fn. ", " .$this->ln;



}
    }


$payroll = new payroll();

echo "Employee Name: ". $payroll->getEmployeeName() . "<br/>";
    echo "Net pay: " . $payroll->computeNet()




?>