<?php

namespace App\Livewire\Admin;

use App\Models\Employee;
use App\Models\Payroll as ModelsPayroll;
use Livewire\Component;

class Payroll extends Component
{

    public $editCheck = false;
    public $employee_id;
    public $period;
    public $allowance;
    public $deduction;

    public function render()
    {
        $employees = Employee::all(); 
        $payrolls = ModelsPayroll::all();
        return view('livewire.admin.payroll', compact('payrolls','employees'));
    }

    public function store(){
        $validate = $this->validate([
           'employee_id'=>'required',
           'period'=>'required',
           'allowance'=>'required',
           'deduction'=>'required' 
        ]);

        $employee = Employee::find($this->employee_id);
        ModelsPayroll::create([
            'employee_id'=> $this->employee_id,
            'period'=>$this->period,
            'allowance'=> $this->allowance,
            'deduction'=> $this->deduction,
            'net_salary' => $employee->salary + $this->allowance - $this->deduction
        ]);
        session()->flash('message','Berhasil menambah payroll');
    }

    public function destroy($id){
        
    }
}
