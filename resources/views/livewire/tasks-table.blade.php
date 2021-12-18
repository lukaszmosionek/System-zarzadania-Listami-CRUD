<div>
    <table class="table" wire:sortable="updateTaskOrder">
        <tbody>
        @foreach($tasks as $task)
            <tr wire:sortable.item="{{ $task->id  }}" wire:key="task-{{$task->id}}" >
                <td>{{ $task->position }}</td>
                <td wire:sortable.handle style="cursor: move;">{{ $task->name }}</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.checklists.tasks.edit', [$checklist, $task]) }}">{{__('Edytuj')}}</a>
                    <form style="display: inline-block" action="{{ route('admin.checklists.tasks.destroy', [$checklist, $task]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" role="submit" onclick="return confirm('{{__('Are you sure?')}}')">{{ __('Usuń') }}</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
