<div class="bg-gray-100 w-full py-4 text-2xl">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1> Livewire is simple and Powerful </h1>

    $message : {{$message}}
    <BR>
    $hello : {{$hello}}

    <div class="my-2 mt-2  ">
        livewire wire:model => bind data

        입력창 안의 text는  BookLive. php 의 $message와 bind되어 있습니다
    </div>

    <input wire:model.debounce.500ms="message" class="my-2 bg-yellow-100 text-2xl w-2/3"/><BR>

    Selected Language = {{$language}}<BR>
    <select name="language" wire:model="language">
        <option value="basic" selected>Basic</option>
        <option value="c++">C++</option>
        <option value="Java">JAVA</option>
    </select>

</div>
