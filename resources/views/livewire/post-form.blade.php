<div class="">
    <h4 class="mb-4 text-2xl font-bold">Posts</h4>
    <div class="container mx-auto">
        <form wire:submit.prevent="storePost" method="post" >
            @csrf
           <div>
            <x-input  wire:dirty.class="border-green-500" wire:model="title" label="Name" placeholder="User's first name" />
           </div>
           <div class="mt-8 mb-4">
            <x-textarea wire:model="description" label="Description" placeholder="description" />

           </div>
           <div class="">
            <x-button  info label="Submit" type="submit" />
           </div>
           
         

        </form>

    </div>
</div>
