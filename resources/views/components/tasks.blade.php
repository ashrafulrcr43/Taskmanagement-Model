{{-- <div class="mt-6">
    <p>{{ $task->title }}</p>
    <p>{{ $task->description }}</p>
    <p>{{ $task->status }}</p>
    <p>{{ \Carbon\Carbon::parse($task->due_date)->diffForHumans() }}</p>
    <p class="text-red-500">{{ $task->status }}</p>
</div>  --}}
<div class="mt-5 rounded-xl border bg-card text-card-foreground shadow-sm"data-id="7" data-v0-t='card'>
<div class="flex flex-col space-y 1.5 p-6" data-id="8">
    <div class="flex items-center justify-between" data-id="9">
        <div data-id="10">
            <a href="{{ route('tasks.show', $task) }}">
            <h3 class="text-lg" data-id="11">
                {{ $task->id }} : {{ $task->title }}
            </h3>
        </a>
            <p class="text-sm" data-id="12">
                {{ \Carbon\Carbon::parse($task->due_date)->diffForHumans()  }}
            </p>
        </div>
        <div class="inline-flex w-fit items-center whitespace-normal rounded-full" data-id="13" data-vo-t='badge'>
            {{ $task->status }}
        </div>
    </div>
</div>
<div class="p-6" data-id="14">
    <p class="text-muted-foreground" data-id="15">
        {{ $task->description }}
    </p>
</div>
<div class="form items-center  flex justify-end border-t p-6" data-id="16">
    <form action="{{ route('tasks.update', $task) }}" method="POST">

        @method('PATCH')
        @csrf
        <input type="hidden" name="id" value="{{ $task->id}}">

        <input type="hidden" name="status" value="{{ $task->status=='completed'?'pending':'completed' }}">
       

        <button type="submit" class="bg-orange-50 p-2 rounded-lg inline-flex items-center justify-center whitespace-nowrap text-sm font-medium" >Mark as :{{ $task->status =='completed'?'pending':'completed' }}</button>

    </form>
</div>
</div>
