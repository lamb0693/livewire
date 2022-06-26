<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;

class BookLive extends Component
{
    // public 변수로 선언해 주면 book-live.blade.php에서 사용 가능하다
    public $message = "Hello world";

    public $hello;

    public function mount(){
        $this->hello = "mount 함수를 이용해 멤버 변수를 초기화";
    }

    public function render()
    {
        return view('livewire.book-live');
    }
}
