<x-layout>

    <h3 class="text-center">Task Management Development</h3>
    <div class="container mx-auto w-4/5">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis reiciendis architecto quos esse modi repellat, ut quaerat delectus dolore at hic ullam! Porro optio pariatur dignissimos ea tempore nihil nequeLorem ipsum dolor sit amet consectetur adipisicing elit. Officiis reiciendis architecto quos esse modi repellat, ut quaerat delectus dolore at hic ullam! Porro optio pariatur dignissimos ea tempore nihil neque.</p>
        
        @if($showToolbar)
        <x-task-status :status="request()->get('status')"/>
            <p class="m-5">
                All Task :{{ count($tasks) }}
            </p>
    
        @else
            <a href="{{ route('tasks.index') }}" class=" my-5 border  px-5 py-2 rounded-lg ml-3 inline-flex items-center justify-center whitespace-nowrap text-sm">
            All Task
          </a>
       
       
        @endif
    </div>
        <hr>
    </div>
    <div class="container mx-auto w-4/5 h-screen m-5">
            @foreach ( $tasks as $task )
            {{-- <x-tasks :task="$task"/> --}}
            <x-tasks :$task/>
            @endforeach
        
    </div>
</x-layout>