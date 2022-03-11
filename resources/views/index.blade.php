@extends('app')

@section('title')
    Welcome
@endsection


@section('content')

    <p class="mb-2"> Add a task to do </p>
    <form method="POST" action=" {{ route('todoProc') }}">
        @csrf
        <input type="text" name="task" placeholder="End tasks with exclamation!" class="px-3 w-full py-1 rounded bg-slate-500/75 border-slate-800 mb-2 placeholder-slate-400">
        @error('task')
        <div class="text-center text-sm border-red-800 bg-red-300 text-red-800 border rounded p-1 mb-2 w-full h-fit"> {{$message}} </div>
        @enderror
        <input type="date" name="deadline"  value="<?php echo date('Y-m-d',mktime(0, 0, 0, date("m")  , date("d")+7, date("Y"))); ?>" class="px-3 py-1 w-full rounded bg-slate-500/75 border-slate-800 mb-2">
        @error('deadline')
        <div class="text-center text-sm border-red-800 bg-red-300 text-red-800 border rounded p-1 mb-2 w-fit h-fit"> {{$message}} </div>
        @enderror
        <input type="submit" value="Add Task" class="px-3 py-1 rounded bg-emerald-500 border-slate-800 border">
    </form>


@endsection

@section('list')

    @if(is_array($todos) || is_object($todos))
        @if(($todos->count()) == 0)
            You have no tasks.
            Add some and get productive!
        @endif
        @foreach($todos as $todo)
        <div class="flex justify-between">
            <div class="flex justify-between w-full mb-2 rounded bg-gradient-to-r from-sky-800 to-transparent border-slate-700 border">
                <div class="py-1 px-1 "> 
                    {{ $todo->deadline }} | {{ $todo->task }} 
                </div>
                <div class="py-1 px-1">
                    @if($todo->done)
                        <input type="submit" value="DONE!" class="px-2 rounded bg-amber-500 border-slate-800 ">
                    @else
                        <form method="GET" action="{{ route('todoTick',$todo->id)}}">
                        <input type="submit" value="✓" class=" px-2 rounded bg-emerald-500 border-slate-800 ">
                        </form>
                    @endif
                </div>
            </div>
            <div class=" mb-2 rounded ml-2 py-1 px-1 border-slate-700 border">
                <form method="GET" action="{{ route('todoDrop',$todo->id)}}">
                <input type="submit" value="✗" class=" px-2 rounded bg-rose-500 border-slate-800 ">
                </form>
            </div>
        </div>
        @endforeach
    @else
        <div> DATABASE CONNECTION ERROR! <br> {{ print($dberror->getMessage())}}</div>
    @endif


@endsection
