<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Iodev\Whois\Factory;
class Checker extends Component
{
    public $search ='';
    public function finder()
    {
        $whois = Factory::get()->createWhois();
        if($this->search && $whois->isDomainAvailable($this->search)) {
            return 
            session()->flash('find','Bingo! Domain is available!');
        }
        elseif ($this->search && !$whois->isDomainAvailable($this->search)){
            return
            session()->flash('notFound','Sorry this domain is not available!');
        }
      
    }
   
    public function render()
    {
        $this->finder();
        return view('livewire.checker');
    }
}
