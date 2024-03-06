<x-app-layout>
    <div class="container mt-4">
      <h1>Task list</h1>
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
              <td>{{$task->name_category}}</td>
              <td>
                @if ($task->completed == 1)
                  Completo
                @else
                  Pendente
                @endif
              </td>
              <td>
                <a href="" type="button" class="btn btn-warning d-flex align-items-center"><x-icons.edit class="me-1"/> Editar</a>
              </td>
              <td>
                <a href="{{route('task.show', $task->id)}}" type="button" class="btn btn-primary d-flex align-items-center"><x-icons.eye class="me-1"/> Ver</a>
              </td>
              <td>
                <button type="button" class="btn btn-danger d-flex align-items-center"><x-icons.delete class="me-1"/> Deletar</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</x-app-layout>
