<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Iodev\Whois\Factory;
use App\Models\User;
use Iodev\Whois\Modules\Tld\TldServer;
class Checker extends Component
{
    public $search ='';
    public function index()
    {
        $whois = Factory::get()->createWhois();
        if($whois->isDomainAvailable($this->search)) {
            return 
            session()->flash('success','Bingo! Domain is available!');
        }
        elseif($this->search=='') {
            return 
            session()->flash('bad','');
        }
        else{
            return
            session()->flash('danger','Sorry this domain is not available!');
        }
    }
   
    public function render()
    {
        $this->index();
        return view('livewire.checker');
    }
}
