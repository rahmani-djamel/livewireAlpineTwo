<div>
    <h4 class="mb-4 text-2xl font-bold">Posts</h4>
    <div class="container mx-auto">
        <form wire:submit.prevent="storePost" method="post">
            @csrf
           <div>
            <x-input label="title" placeholder="title" Wire:model="title" />
           </div>
           <div class="mt-8 mb-4">
            <x-textarea wire:model="description" label="Description" placeholder="description" />

           </div>
           <x-button info label="Submit" type="submit" />

        </form>

    </div>
</div>
