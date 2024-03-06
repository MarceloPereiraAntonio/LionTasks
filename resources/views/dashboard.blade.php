<x-app-layout>
    <div class="container mt-4">
      <div class="container-md d-flex justify-content-between align-items-center">
        <h1>Task list</h1>
        <a href="{{route('task.create')}}" type="button" class="btn btn-primary d-flex align-items-center"><x-icons.task class="me-1"/> Nova tarefa</a>
      </div>

      <div class="container mt-4">
        <table class="table table-dark table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Titulo</th>
              <th scope="col">Descrição</th>
              <th scope="col">Categoria</th>
              <th scope="col">Status</th>
              <th scope="col">Editar</th>
              <th scope="col">Visualizar</th>
              <th scope="col">Deletar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tasks as $task)
            <tr >
              <td>{{$task->id}}</td>
              <td>{{$task->title}}</td>
              <td >{{$task->description}}</td>
              <td>{{$task->name_category ?? 'Sem categoria'}}</td>
              <td>
                @if ($task->completed == 1)
                  Completo
                @else
                  Pendente
                @endif
              </td>
              <td>
                <a href="{{route('task.edit', $task->id)}}" type="button" class="btn btn-warning d-flex align-items-center"><x-icons.edit class="me-1"/> Editar</a>
              </td>
              <td>
                <a href="{{route('task.show', $task->id)}}" type="button" class="btn btn-primary d-flex align-items-center"><x-icons.eye class="me-1"/> Ver</a>
              </td>
              <td>
                <form action="{{route('task.destroy', $task->id)}}" method="POST">
                  @csrf()
                  @method('DELETE')
                  <button type="submit"  class="btn btn-danger d-flex align-items-center"><x-icons.delete class="me-1"/> Deletar</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</x-app-layout>
